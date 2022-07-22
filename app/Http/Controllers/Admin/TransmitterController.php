<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transmitter;
use App\Models\Plan;
use App\Http\Requests\TransmitterRequest;

class TransmitterController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-transmitter|crear-transmitter|editar-transmitter|borrar-transmitter', ['only'=>['index']]);
        $this->middleware('permission:crear-transmitter', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-transmitter', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-transmitter', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transmitters = Transmitter::with('plan')->paginate(10);
        //dd($transmitters);
        return view('admin.transmitters.index', compact('transmitters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans = Plan::pluck('detalle', 'id');

        return view('admin.transmitters.create', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransmitterRequest $request)
    {
        //dd($request->all());
        if($request->ssl == 'on')
        {
            $ssl = 'si';
        }else{
            $ssl = 'no';
        }
        if($request->regimen_microempresa == 'on')
        {
            $regimen_microempresa = 'si';
        }else{
            $regimen_microempresa = 'no';
        }
        if($request->estado == 'on')
        {
            $estado = 'si';
        }else{
            $estado = 'no';
        }
        //dd($request->all());
        $transmitter = Transmitter::create([
            'ruc' => $request->ruc,
            'razón_social' => $request->razón_social,
            'nombre_comercial' => $request->nombre_comercial,
            'direccion_matriz' => $request->direccion_matriz,
            'ambiente' => $request->ambiente,
            'tipo_emision' => $request->tipo_emision,
            'contribuyente' => $request->contribuyente,
            'obligado_contabilidad' => $request->obligado_contabilidad,
            'contraseña_firma' => $request->contraseña_firma,
            'servidor_correo' => $request->servidor_correo,
            'correo_remitente' => $request->correo_remitente,
            'contraseña_correo' => $request->contraseña_correo,
            'puerto' => $request->puerto,
            'ssl' => $ssl,
            'regimen_microempresa' => $regimen_microempresa,
            'resolucion_agente_retencion' => $request->resolucion_agente_retencion,
            'logo' => $request->logo,
            'firma' => $request->firma,
            'estado' => $estado,
            'ruta_autorizados' => $request->ruta_autorizados,
            'fecha_inicio_plan' => $request->fecha_inicio_plan,
            'fecha_fin_plan' => $request->fecha_fin_plan,
            'plan_id' => $request->plan_id,
            'user_id' => $request->user_id,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('transmitters.index')
            ->with('status_success', 'Emisor creado con éxito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transmitter = Transmitter::with('plan')->find($id);

        return view('admin.transmitters.show', compact('transmitter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transmitter = Transmitter::find($id);
        $plans = Plan::pluck('detalle', 'id');

        return view('admin.transmitters.edit', compact('transmitter', 'plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransmitterRequest $request, $id)
    {
        $transmitter = Transmitter::find($id);
        if($request->ssl == 'on')
        {
            $ssl = 'si';
        }else{
            $ssl = 'no';
        }
        if($request->regimen_microempresa == 'on')
        {
            $regimen_microempresa = 'si';
        }else{
            $regimen_microempresa = 'no';
        }
        if($request->estado == 'on')
        {
            $estado = 'si';
        }else{
            $estado = 'no';
        }
        if($request->contraseña_firma)
        {
            $contraseña_firma = $request->contraseña_firma;
        }else{
            $contraseña_firma = $transmitter->contraseña_firma;
        }
        if($request->contraseña_correo)
        {
            $contraseña_correo = $request->contraseña_correo;
        }else{
            $contraseña_correo = $transmitter->contraseña_correo;
        }
        //dd($transmitter);
        $transmitter->update([
            'ruc' => $request->ruc,
            'razón_social' => $request->razón_social,
            'nombre_comercial' => $request->nombre_comercial,
            'direccion_matriz' => $request->direccion_matriz,
            'ambiente' => $request->ambiente,
            'tipo_emision' => $request->tipo_emision,
            'contribuyente' => $request->contribuyente,
            'obligado_contabilidad' => $request->obligado_contabilidad,
            'contraseña_firma' => $contraseña_firma,
            'servidor_correo' => $request->servidor_correo,
            'correo_remitente' => $request->correo_remitente,
            'contraseña_correo' => $contraseña_correo,
            'puerto' => $request->puerto,
            'ssl' => $ssl,
            'regimen_microempresa' => $regimen_microempresa,
            'resolucion_agente_retencion' => $request->resolucion_agente_retencion,
            'logo' => $request->logo,
            'firma' => $request->firma,
            'estado' => $estado,
            'ruta_autorizados' => $request->ruta_autorizados,
            'fecha_inicio_plan' => $request->fecha_inicio_plan,
            'fecha_fin_plan' => $request->fecha_fin_plan,
            'plan_id' => $request->plan_id,
            'user_update' => $request->user_update,
        ]);

        return redirect()->route('transmitters.index')
            ->with('status_success', 'Emisor Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transmitter = Transmitter::find($id);
        $transmitter->delete();

        return redirect()->route('transmitters.index')
            ->with('status_success', 'Emisor Eliminado con éxito');
    }
}
