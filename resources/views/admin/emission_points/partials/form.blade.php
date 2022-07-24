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
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('secuencial_factura', 'Secuencial Factura') }}
            {{ Form::number('secuencial_factura', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('secuencial_liquidacion_compra', 'Secuencial Liquidación de Compra') }}
            {{ Form::number('secuencial_liquidacion_compra', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('secuencial_nota_credito', 'ecuencial Nota de Crédito') }}
            {{ Form::number('secuencial_nota_credito', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('secuencial_nota_debito', 'Secuencial Nota de Débito') }}
            {{ Form::number('secuencial_nota_debito', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('secuencial_guia', 'Secuencial Guía') }}
            {{ Form::number('secuencial_guia', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('secuencial_retencion', 'Secuencial Retención') }}
            {{ Form::number('secuencial_retencion', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="control-label">estatus</div>
            <label class="custom-switch mt-2">
                @isset($emission_point)
                    <input type="checkbox" name="estatus" @if($emission_point->estatus == 'activo') checked @endif class="custom-switch-input">
                @else
                    <input type="checkbox" name="estatus" class="custom-switch-input">
                @endisset
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">Activo</span>
            </label>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('establishment_id', 'Tipo Identificación') }}
            {{ Form::select('establishment_id', $establishments, null, ['class' => 'form-control', 'placeholder' => 'Selecciones tipo identificación']) }}
        </div>
    </div>
    {{-- <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('establishment_id', 'Tipo Identificación') }}
            <select name="establishment_id" id="establishment_id" class="form-control">
                <option value="">Selecciones Establecimiento</option>
                @foreach ($establishments2 as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }} - {{ $item->transmitter->razon_social }}</option>
                @endforeach
            </select>
        </div>
    </div> --}}


    @isset($emission_point)
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @else
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @endisset        
    
    
</div>