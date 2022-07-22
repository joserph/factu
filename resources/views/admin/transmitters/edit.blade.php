@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Emisor</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('transmitters.index') }}">Emisores</a></div>
                <div class="breadcrumb-item active">Editar Emisor</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('custom.message')

                            {{ Form::model($transmitter, ['route' => ['transmitters.update', $transmitter->id], 'method' => 'PUT']) }}
                                @include('admin.transmitters.partials.form')
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{ Form::button('<i class="fas fa-sync"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-warning', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Actualizar']) }}
                                    </div>
                                </div>
                                
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

