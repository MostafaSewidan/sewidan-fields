<div class="form-group {{$errors->has($name) ? 'has-error':'' }}" id="{{$name}}_wrap">
    <label class="col-md-2">
        {{ $label }}
    </label>
    <div class="col-md-9">
        {!! Form::textarea($name, $value, [
           "placeholder" => $label,
            "class" => 'form-control Editor',
           "rows" => "80",
           "cols" => "8",
           "data-name" => $name,
           "id" => $name
           ]) !!}
        <span class="help-block">{{$errors->first($name)}}</span>
    </div>
</div>