<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('ruc', 'RUC') }}
            {{ Form::text('ruc', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('razón_social', 'Razón Social') }}
            {{ Form::text('razón_social', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('nombre_comercial', 'Nombre Comercial') }}
            {{ Form::text('nombre_comercial', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('direccion_matriz', 'Dirección Matriz') }}
            {{ Form::text('direccion_matriz', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {{ Form::label('ambiente', 'Ambiente') }}
            {{ Form::select('ambiente', ['pruebas' => 'Pruebas', 'produccion' => 'Producción'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione Ambiente']) }}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {{ Form::label('tipo_emision', 'Tipo Emisión') }}
            {{ Form::select('tipo_emision', ['normal' => 'Normal', 'indisponibilidad' => 'Indisponibilidad SRI'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione Tipo de Emisión']) }}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {{ Form::label('contribuyente', 'Contribuyente') }}
            {{ Form::text('contribuyente', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('obligado_contabilidad', 'Obligado a llevar contabilidad') }}
            {{ Form::select('obligado_contabilidad', ['si' => 'Si', 'no' => 'No'], null, ['class' => 'form-control', 'placeholder' => '¿Obligado a llevar contabilidad?']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('contraseña_firma', 'Contraseña Firma') }}
            {{ Form::password('contraseña_firma', ['class' => 'form-control awesome']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('contraseña_firma_confirmation', 'Confirmar Contraseña Firma') }}
            {{ Form::password('contraseña_firma_confirmation', ['class' => 'form-control']) }}
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('servidor_correo', 'Servidor de Correo') }}
            {{ Form::text('servidor_correo', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('correo_remitente', 'Correo Remitente') }}
            {{ Form::email('correo_remitente', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('contraseña_correo', 'Contraseña Correo') }}
            {{ Form::password('contraseña_correo', ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            {{ Form::label('puerto', 'Puerto') }}
            {{ Form::text('puerto', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="control-label">SSL</div>
            <label class="custom-switch mt-2">
                @isset($transmitter)
                    <input type="checkbox" name="ssl" @if($transmitter->ssl == 'si') checked @endif class="custom-switch-input">
                @else
                    <input type="checkbox" name="ssl" class="custom-switch-input">
                @endisset
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">SSL?</span>
            </label>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="control-label">Régimen Microempresa</div>
            <label class="custom-switch mt-2">
                @isset($transmitter)
                    <input type="checkbox" name="regimen_microempresa" @if($transmitter->regimen_microempresa == 'si') checked @endif class="custom-switch-input">
                @else
                    <input type="checkbox" name="regimen_microempresa" class="custom-switch-input">
                @endisset
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">Régimen Microempresa?</span>
            </label>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('resolucion_agente_retencion', 'Resolución Agente de Retención') }}
            {{ Form::text('resolucion_agente_retencion', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('logo', 'Logo') }}
            {{ Form::file('logo', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('firma', 'Firma') }}
            {{ Form::file('firma', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <div class="control-label">estatus</div>
            <label class="custom-switch mt-2">
                @isset($transmitter)
                    <input type="checkbox" name="estatus" @if($transmitter->estatus == 'activo') checked @endif class="custom-switch-input">
                @else
                    <input type="checkbox" name="estatus" class="custom-switch-input">
                @endisset
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">Activo</span>
            </label>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('plan_id', 'Plan') }}
            {{ Form::select('plan_id', $plans, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Plan']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('ruta_autorizados', 'Ruta Autorizados') }}
            {{ Form::text('ruta_autorizados', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('fecha_inicio_plan', 'Fecha Inicio Plan') }}
            {{ Form::date('fecha_inicio_plan', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('fecha_fin_plan', 'Fecha Fin Plan') }}
            {{ Form::date('fecha_fin_plan', null, ['class' => 'form-control']) }}
        </div>
    </div>


    @isset($transmitter)
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @else
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @endisset        
    
    
</div>