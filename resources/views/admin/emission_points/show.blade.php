@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{ $emission_point->nombre }}</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('emission_points.index') }}">Puntos de Emisión</a></div>
                <div class="breadcrumb-item active">{{ $emission_point->nombre }}</div>
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
                                        <td>{{ $emission_point->estatus }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nombre</th>
                                        <td>{{ $emission_point->nombre }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Código</th>
                                        <td>{{ $emission_point->codigo }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Secuencial Factura</th>
                                        <td>{{ $emission_point->secuencial_factura }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Secuencial Liquidación de compra</th>
                                        <td>{{ $emission_point->secuencial_liquidacion_compra }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Secuencial Nota de Crédito</th>
                                        <td>{{ $emission_point->secuencial_nota_credito }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Secuencial Nota de Débito</th>
                                        <td>{{ $emission_point->secuencial_nota_debito }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Secuencial Guía de Remisión</th>
                                        <td>{{ $emission_point->secuencial_guia }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Secuencial Retención</th>
                                        <td>{{ $emission_point->secuencial_retencion }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Establecimiento</th>
                                        <td>{{ $emission_point->establishment->nombre }}</td>
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer card-primary bg-whitesmoke">
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                                @can('editar-punto-de-emision')
                                <a href="{{ route('emission_points.edit', $emission_point->id) }}" type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</a>
                                @endcan
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

