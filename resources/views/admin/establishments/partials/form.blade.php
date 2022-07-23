<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre') }}
            {{ Form::text('nombre', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('codigo', 'Código') }}
            {{ Form::text('codigo', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('url', 'Urlweb') }}
            {{ Form::text('url', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('nombre_comercial', 'Nombre Comercial') }}
            {{ Form::text('nombre_comercial', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-7">
        <div class="form-group">
            {{ Form::label('direccion', 'Dirección') }}
            {{ Form::text('direccion', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {{ Form::label('correo_cco', 'Correo con copia oculta') }}
            {{ Form::email('correo_cco', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="control-label">Estado</div>
            <label class="custom-switch mt-2">
                @isset($transmitter)
                    <input type="checkbox" name="estado" @if($transmitter->estado == 'si') checked @endif class="custom-switch-input">
                @else
                    <input type="checkbox" name="estado" class="custom-switch-input">
                @endisset
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">Activo</span>
            </label>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('transmitter_id', 'Emisor') }}
            {{ Form::select('transmitter_id', $transmitters, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Emisor']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('logo', 'Logo') }}
            {{ Form::file('logo', null, ['class' => 'form-control']) }}
        </div>
    </div>


    @isset($client)
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @else
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @endisset        
    
    
</div>