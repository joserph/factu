@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Planes</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Planes</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-plan')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('plans.create') }}" data-toggle="tooltip" data-placement="top" title="Crear">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Cantidad de Comprobantes</th>
                                        <th class="text-center" scope="col">Precio</th>
                                        <th class="text-center" scope="col">Periodo</th>
                                        <th class="text-center" scope="col">Detalle</th>
                                        <th class="text-center" scope="col">Estatus</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plans as $plan)
                                            <tr>
                                                <td class="text-center" scope="row">{{ $plan->numero_comprobante }}</td>
                                                <td class="text-center" scope="row">{{ $plan->precio }}</td>
                                                <td class="text-center" scope="row">{{ $plan->periodo }}</td>
                                                <td class="text-center" scope="row">{{ $plan->detalle }}</td>
                                                <td class="text-center" scope="row">{{ $plan->estatus }}</td>
                                                <td class="text-center" style="width: 110px">
                                                    @can('editar-plan')
                                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('plans.edit', $plan->id) }}" data-toggle="tooltip" data-placement="left" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('borrar-plan')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['plans.destroy', $plan->id], 'style' => 'display:inline']) !!}
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
                                {{ $plans->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

