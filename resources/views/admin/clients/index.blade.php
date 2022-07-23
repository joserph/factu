@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Clientes</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Clientes</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-cliente')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('clients.create') }}" data-toggle="tooltip" data-placement="top" title="Crear">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Razón Social</th>
                                        <th class="text-center" scope="col">Tipo Identificación</th>
                                        <th class="text-center" scope="col">Identificación</th>
                                        <th class="text-center" scope="col">Dirección</th>
                                        <th class="text-center" scope="col">Celular</th>
                                        <th class="text-center" scope="col">Correo</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td scope="row"><a href="{{ route('clients.show', $client->id) }}">{{ $client->nombre }}</a></td>
                                                <td scope="row">{{ $client->typeid->nombre }}</td>
                                                <td scope="row">{{ $client->identificacion }}</td>
                                                <td scope="row">{{ Str::limit($client->direccion, 15) }}</td>
                                                <td scope="row">{{ $client->celular }}</td>
                                                <td scope="row">{{ $client->correo }}</td>
                                                <td class="text-center" style="width: 110px">
                                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('clients.show', $client->id) }}" data-toggle="tooltip" data-placement="left" title="Ver">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    @can('editar-cliente')
                                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('clients.edit', $client->id) }}" data-toggle="tooltip" data-placement="left" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('borrar-cliente')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['clients.destroy', $client->id], 'style' => 'display:inline']) !!}
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
                                {{ $clients->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

