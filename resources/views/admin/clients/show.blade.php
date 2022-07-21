@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{ $client->nombre }}</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></div>
                <div class="breadcrumb-item active">{{ $client->nombre }}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Razón Social</th>
                                        <td>{{ $client->nombre }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tipo Identificaión</th>
                                        <td>{{ $client->typeid->nombre }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Identificaión</th>
                                        <td>{{ $client->identificacion }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dirección</th>
                                        <td>{{ $client->direccion }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Celular</th>
                                        <td>{{ $client->celular }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Correo Electrónico</th>
                                        <td>{{ $client->correo }}</td>
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer card-primary bg-whitesmoke">
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                                @can('editar-client')
                                <a href="{{ route('clients.edit', $client->id) }}" type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</a>
                                @endcan
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

