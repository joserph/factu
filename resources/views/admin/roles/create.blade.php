@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Rol</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('roles.index') }}">Lista de Roles</a></div>
                <div class="breadcrumb-item active">Crear Rol</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('custom.message')

                            {{ Form::open(['route' => 'roles.store', 'method' => 'POST']) }}
                                @include('admin.roles.partials.form')
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{ Form::button('<i class="fas fa-plus-circle"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-info', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Crear']) }}
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

