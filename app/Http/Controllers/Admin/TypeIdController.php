<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeId;
use Illuminate\Http\Request;
use App\Http\Requests\TypeIdRequest;

class TypeIdController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-typeId|crear-typeId|editar-typeId|borrar-typeId', ['only'=>['index']]);
        $this->middleware('permission:crear-typeId', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-typeId', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-typeId', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identificaciones = TypeId::paginate(5);

        return view('admin.typeId.index', compact('identificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeId.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeIdRequest $request)
    {
        $typeId = TypeId::create($request->all());

        return redirect()->route('identificaciones.index')
            ->with('status_success', 'Tipo identificación creada con éxito');
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
        $typeId = TypeId::find($id);
        return view('admin.typeId.edit', compact('typeId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeIdRequest $request, TypeId $typeId)
    {
        $typeId->update($request->all());

        return redirect()->route('identificaciones.index')
            ->with('status_success', 'Tipo identificación actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeId $typeId)
    {
        $typeId->delete();

        return redirect()->route('identificaciones.index')
            ->with('status_success', 'Tipo identificación eliminada con éxito');
    }
}
