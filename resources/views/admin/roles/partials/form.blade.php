<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('name', 'Nombre del Rol') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('name', 'Permisos para el Rol') }}
            <br>
            @foreach ($permission as $item)
                <label for="">
                    {{ form::checkbox('permission[]', $item->id, false, ['class' => 'name']) }}
                    {{ $item->name }}
                </label>
                <br>
            @endforeach
        </div>
    </div>
</div>