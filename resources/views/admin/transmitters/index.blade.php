@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Emisores</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Emisores</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-transmitter')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('transmitters.create') }}" data-toggle="tooltip" data-placement="top" title="Crear">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">RUC</th>
                                        <th class="text-center" scope="col">Razón Social</th>
                                        <th class="text-center" scope="col">Dirección Matriz</th>
                                        <th class="text-center" scope="col">Estado</th>
                                        <th class="text-center" scope="col">Plan</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transmitters as $transmitter)
                                            <tr>
                                                <td class="text-center" scope="row"><a href="{{ route('transmitters.show', $transmitter->id) }}">{{ $transmitter->ruc }}</a></td>
                                                <td class="text-center" scope="row">{{ $transmitter->razón_social }}</td>
                                                <td class="text-center" scope="row">{{ $transmitter->direccion_matriz }}</td>
                                                <td class="text-center" scope="row">{{ $transmitter->estado }}</td>
                                                <td class="text-center" scope="row">{{ $transmitter->plan->periodo }}</td>
                                                <td class="text-center" style="width: 110px">
                                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('transmitters.show', $transmitter->id) }}" data-toggle="tooltip" data-placement="left" title="Ver">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    @can('editar-transmitter')
                                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('transmitters.edit', $transmitter->id) }}" data-toggle="tooltip" data-placement="left" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('borrar-transmitter')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['transmitters.destroy', $transmitter->id], 'style' => 'display:inline']) !!}
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
                                {{ $transmitters->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

