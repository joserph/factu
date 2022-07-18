<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre Identificación') }}
            {{ Form::text('nombre', null, ['class' => 'form-control']) }}
        </div>
    </div>
    @isset($typeId)
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @else
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('user_update', Auth::user()->id) }}
    @endisset        
    
    
</div>