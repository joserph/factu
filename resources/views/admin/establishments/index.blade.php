@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Establecimientos</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Establecimientos</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-establecimiento')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('establishments.create') }}" data-toggle="tooltip" data-placement="top" title="Crear">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Nombre</th>
                                        <th class="text-center" scope="col">Código</th>
                                        <th class="text-center" scope="col">Dirección</th>
                                        <th class="text-center" scope="col">Emisor</th>
                                        <th class="text-center" scope="col">Estado</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($establishments as $establishment)
                                            <tr>
                                                <td scope="row"><a href="{{ route('establishments.show', $establishment->id) }}">{{ $establishment->nombre }}</a></td>
                                                <td scope="row">{{ $establishment->codigo }}</td>
                                                <td scope="row">{{ $establishment->direccion }}</td>
                                                <td scope="row">{{ $establishment->emisor }}</td>
                                                <td scope="row">{{ $establishment->estado }}</td>
                                                <td class="text-center" style="width: 110px">
                                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('establishments.show', $establishment->id) }}" data-toggle="tooltip" data-placement="left" title="Ver">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    @can('editar-establecimiento')
                                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('establishments.edit', $establishment->id) }}" data-toggle="tooltip" data-placement="left" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('borrar-establecimiento')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['establishments.destroy', $establishment->id], 'style' => 'display:inline']) !!}
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
                                {{ $establishments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

