@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{ $establishment->nombre }}</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('establishments.index') }}">Establecimientos</a></div>
                <div class="breadcrumb-item active">{{ $establishment->nombre }}</div>
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
                                        <th scope="row">Estado</th>
                                        <td>{{ $establishment->estatus }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nombre</th>
                                        <td>{{ $establishment->nombre }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Código</th>
                                        <td>{{ $establishment->codigo }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dirección</th>
                                        <td>{{ $establishment->direccion }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nombre Comercial</th>
                                        <td>{{ $establishment->nombre_comercial }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Emisor</th>
                                        <td>{{ $establishment->transmitter->razon_social }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Correo con copia oculta</th>
                                        <td>{{ $establishment->correo_cco }}</td>
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer card-primary bg-whitesmoke">
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                                @can('editar-establishment')
                                <a href="{{ route('establishments.edit', $establishment->id) }}" type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</a>
                                @endcan
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

