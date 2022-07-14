@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Usuario</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {{ Form::open(['route' => 'users.store', 'method' => 'POST']) }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group ">
                                            {{ Form::label('name', 'Nombre') }}
                                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('email', 'E-mail') }}
                                            {{ Form::email('email', null, ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('password', 'Contraseña') }}
                                            {{ Form::password('password', ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('confirm-password', 'Confirmar Contraseña') }}
                                            {{ Form::password('confirm-password', ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{ Form::label('roles', 'Roles') }}
                                            {{ Form::select('roles[]', $roles, [], ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{ Form::button('<i class="far fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) }}
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

