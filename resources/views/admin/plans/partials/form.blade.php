<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('numero_comprobante', 'Numero de comprobantes') }}
            {{ Form::text('numero_comprobante', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('precio', 'Precio') }}
            {{ Form::text('precio', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('periodo', 'Periodo') }}
            {{ Form::select('periodo', ['anual' => 'Anual', 'mensual' => 'Mensual'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione periodo']) }}
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('detalle', 'Detalles') }}
            {{ Form::text('detalle', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="control-label">Estatus</div>
            <label class="custom-switch mt-2">
                @isset($plan)
                    <input type="checkbox" name="estatus" @if($plan->estatus == 'si') checked @endif class="custom-switch-input">
                @else
                    <input type="checkbox" name="estatus" checked class="custom-switch-input">
                @endisset
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">Activo</span>
            </label>
        </div>
    </div>

    @isset($plan)
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @else
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @endisset        
    
    
</div>