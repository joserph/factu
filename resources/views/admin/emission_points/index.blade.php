@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Puntos de Emisión</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Puntos de Emisión</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-punto-de-emision')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('emission_points.create') }}" data-toggle="tooltip" data-placement="top" title="Crear">
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
                                        <th class="text-center" scope="col">Emisor</th>
                                        <th class="text-center" scope="col">Establecimiento</th>
                                        <th class="text-center" scope="col">Asignado A</th>
                                        <th class="text-center" scope="col">Estado</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($emission_points as $emission_point)
                                            <tr>
                                                <td class="text-center" scope="row"><a href="{{ route('emission_points.show', $emission_point->id) }}">{{ $emission_point->nombre }}</a></td>
                                                <td class="text-center" scope="row">{{ $emission_point->codigo }}</td>
                                                <td class="text-center" scope="row">
                                                    @foreach ($transmitters as $transmitter)
                                                        @if ($transmitter->id == $emission_point->establishment->transmitter_id)
                                                            {{ $transmitter->razon_social }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="text-center" scope="row">{{ $emission_point->establishment->nombre }}</td>
                                                <td class="text-center" scope="row">{{ $emission_point->asignado }}</td>
                                                <td class="text-center" scope="row">{{ $emission_point->estatus }}</td>
                                                <td class="text-center" class="text-center" style="width: 110px">
                                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('emission_points.show', $emission_point->id) }}" data-toggle="tooltip" data-placement="left" title="Ver">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    @can('editar-punto-de-emision')
                                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('emission_points.edit', $emission_point->id) }}" data-toggle="tooltip" data-placement="left" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('borrar-punto-de-emision')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['emission_points.destroy', $emission_point->id], 'style' => 'display:inline']) !!}
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
                                {{ $emission_points->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

