<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionPoint;
use App\Models\Transmitter;
use App\Models\Establishment;
use App\Http\Requests\EmissionPointRequest;

class EmissionPointController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-punto-de-emision|crear-punto-de-emision|editar-punto-de-emision|borrar-punto-de-emision', ['only'=>['index']]);
        $this->middleware('permission:crear-punto-de-emision', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-punto-de-emision', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-punto-de-emision', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emission_points = EmissionPoint::with('establishment')->paginate(10);
        $transmitters = Transmitter::get();
        //dd($emission_points);
        return view('admin.emission_points.index', compact('emission_points', 'transmitters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establishments = Establishment::pluck('nombre', 'id');
        $establishments_all = Establishment::with('transmitter')->get();
        //dd($establishments_all);
        return view('admin.emission_points.create', compact('establishments', 'establishments_all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmissionPointRequest $request)
    {
        if($request->estatus == 'on')
        {
            $estatus = 'activo';
        }else{
            $estatus = 'inactivo';
        }
        //dd($request->all());
        EmissionPoint::create([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'secuencial_factura' => $request->secuencial_factura,
            'secuencial_liquidacion_compra' => $request->secuencial_liquidacion_compra,
            'secuencial_nota_credito' => $request->secuencial_nota_credito,
            'secuencial_nota_debito' => $request->secuencial_nota_debito,
            'secuencial_guia' => $request->secuencial_guia,
            'secuencial_retencion' => $request->secuencial_retencion,
            'estatus' => $estatus,
            'establishment_id' => $request->establishment_id,
            'user_id' => $request->user_id,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('emission_points.index')
            ->with('status_success', 'Punto de Emisión creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emission_point = EmissionPoint::find($id);
        $establishments = Establishment::pluck('nombre', 'id');

        return view('admin.emission_points.show', compact('emission_point', 'establishments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emission_point = EmissionPoint::find($id);
        $establishments = Establishment::pluck('nombre', 'id');

        return view('admin.emission_points.edit', compact('emission_point', 'establishments'));
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
        $emission_point = EmissionPoint::find($id);
        if($request->estatus == 'on')
        {
            $estatus = 'activo';
        }else{
            $estatus = 'inactivo';
        }

        $emission_point->update([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'secuencial_factura' => $request->secuencial_factura,
            'secuencial_liquidacion_compra' => $request->secuencial_liquidacion_compra,
            'secuencial_nota_credito' => $request->secuencial_nota_credito,
            'secuencial_nota_debito' => $request->secuencial_nota_debito,
            'secuencial_guia' => $request->secuencial_guia,
            'secuencial_retencion' => $request->secuencial_retencion,
            'estatus' => $estatus,
            'establishment_id' => $request->establishment_id,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('emission_points.index')
            ->with('status_success', 'Punto de Emisión actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emission_point = EmissionPoint::find($id);
        $emission_point->delete();

        return redirect()->route('emission_points.index')
            ->with('status_success', 'Punto de Emisión eliminado con éxito');
    }
}
