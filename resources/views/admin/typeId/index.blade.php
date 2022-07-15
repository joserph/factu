@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tipo Identificación</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Tipo Identificación</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-typeId')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('identificaciones.create') }}" data-toggle="tooltip" data-placement="top" title="Crear">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($identificaciones as $ident)
                                            <tr>
                                                <td scope="row">{{ $ident->nombre }}</td>
                                                <td class="text-center">
                                                    @can('editar-typeId')
                                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('identificaciones.edit', $ident->id) }}" data-toggle="tooltip" data-placement="left" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('borrar-typeId')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['identificaciones.destroy', $ident->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Eliminar', 'onclick' => 'return confirm("¿Seguro de eliminar?")']) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination justify-content-end">
                                {{ $identificaciones->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

