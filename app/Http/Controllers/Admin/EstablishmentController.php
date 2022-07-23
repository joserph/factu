<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Models\Transmitter;
use App\Http\Requests\EstablishmentRequest;

class EstablishmentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-establecimiento|crear-establecimiento|editar-establecimiento|borrar-establecimiento', ['only'=>['index']]);
        $this->middleware('permission:crear-establecimiento', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-establecimiento', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-establecimiento', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::paginate(10);

        return view('admin.establishments.index', compact('establishments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transmitters = Transmitter::pluck('razon_social', 'id');

        return view('admin.establishments.create', compact('transmitters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstablishmentRequest $request)
    {
        if($request->estatus == 'on')
        {
            $estatus = 'activo';
        }else{
            $estatus = 'inactivo';
        }
        //dd($request->all());
        $establishment = Establishment::create([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'url' => $request->url,
            'nombre_comercial' => $request->nombre_comercial,
            'direccion' => $request->direccion,
            'correo_cco' => $request->correo_cco,
            'estatus' => $estatus,
            'logo' => $request->logo,
            'transmitter_id' => $request->transmitter_id,
            'user_id' => $request->user_id,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('establishments.index')
            ->with('status_success', 'Establecimiento creado con éxito');
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
        $establishment = Establishment::find($id);
        $transmitters = Transmitter::pluck('razon_social', 'id');

        return view('admin.establishments.edit', compact('establishment', 'transmitters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstablishmentRequest $request, $id)
    {
        $establishment = Establishment::find($id);
        if($request->estatus == 'on')
        {
            $estatus = 'activo';
        }else{
            $estatus = 'inactivo';
        }

        $establishment->update([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'url' => $request->url,
            'nombre_comercial' => $request->nombre_comercial,
            'direccion' => $request->direccion,
            'correo_cco' => $request->correo_cco,
            'estatus' => $estatus,
            'logo' => $request->logo,
            'transmitter_id' => $request->transmitter_id,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('establishments.index')
            ->with('status_success', 'Establecimiento actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $establishment = Establishment::find($id);
        $establishment->delete();

        return redirect()->route('establishments.index')
            ->with('status_success', 'Establecimiento eliminado con éxito');
    }
}
