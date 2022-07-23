<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmissionPoint;
use App\Models\Transmitter;
use App\Models\Establishment;

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

        return view('admin.emission_points.create', compact('establishments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
