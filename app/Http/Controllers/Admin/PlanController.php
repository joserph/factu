<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Http\Requests\PlanRequest;

class PlanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-plan|crear-plan|editar-plan|borrar-plan', ['only'=>['index']]);
        $this->middleware('permission:crear-plan', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-plan', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-plan', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::paginate(10);

        return view('admin.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanRequest $request)
    {
        if($request->estatus == 'on')
        {
            $estatus = 'si';
        }else{
            $estatus = 'no';
        }
        //dd($request->all());
        $plan = Plan::create([
            'numero_comprobante' => $request->numero_comprobante,
            'precio' => $request->precio,
            'periodo' => $request->periodo,
            'detalle' => $request->detalle,
            'estatus' => $estatus,
            'user_id' => $request->user_id,
            'user_update' => $request->user_update,
        ]);
        
        return redirect()->route('plans.index')
            ->with('status_success', 'Plan creado con éxito'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plan::find($id);

        return view('admin.plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->estatus == 'on')
        {
            $estatus = 'si';
        }else{
            $estatus = 'no';
        }

        $plan = Plan::find($id);

        $plan->update([
            'numero_comprobante' => $request->numero_comprobante,
            'precio' => $request->precio,
            'periodo' => $request->periodo,
            'detalle' => $request->detalle,
            'estatus' => $estatus,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('plans.index')
            ->with('status_success', 'Plan actualizado con éxito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->delete();

        return redirect()->route('plans.index')
            ->with('status_success', 'Plan eliminado con éxito'); 
    }
}
