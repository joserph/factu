@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{ $transmitter->razón_social }}</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('transmitters.index') }}">Emisores</a></div>
                <div class="breadcrumb-item active">{{ $transmitter->razón_social }}</div>
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
                                        <td>{{ $transmitter->estado }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">RUC</th>
                                        <td>{{ $transmitter->ruc }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Razón Social</th>
                                        <td>{{ $transmitter->razón_social }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nombre Comercial</th>
                                        <td>{{ $transmitter->nombre_comercial }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dirección Matriz</th>
                                        <td>{{ $transmitter->direccion_matriz }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ambiente</th>
                                        <td>{{ $transmitter->ambiente }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tipo Emisión</th>
                                        <td>{{ $transmitter->tipo_emision }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contribuyente Especial</th>
                                        <td>{{ $transmitter->contribuyente }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Obligado a llevar Contabilidad</th>
                                        <td>{{ $transmitter->obligado_contabilidad }}</td>
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer card-primary bg-whitesmoke">
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                                @can('editar-transmitter')
                                <a href="{{ route('transmitters.edit', $transmitter->id) }}" type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</a>
                                @endcan
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

