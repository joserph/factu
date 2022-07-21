<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre') }}
            {{ Form::text('nombre', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('tipo_identificacion', 'Tipo Identificación') }}
            {{ Form::select('tipo_identificacion', $type_ids, null, ['class' => 'form-control', 'placeholder' => 'Selecciones tipo identificación']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('identificacion', 'Identificación') }}
            {{ Form::text('identificacion', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-8">
        <div class="form-group">
            {{ Form::label('direccion', 'Dirección') }}
            {{ Form::text('direccion', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('celular', 'Celular') }}
            {{ Form::text('celular', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('correo', 'Correo Electrónico') }}
            {{ Form::email('correo', null, ['class' => 'form-control']) }}
        </div>
    </div>


    @isset($client)
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @else
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @endisset        
    
    
</div>