<div class="form-group {{$errors->has($name) ? 'has-error':'' }}" id="{{$name}}_wrap">
    <label class="col-md-2">
        {{ $label }}
    </label>
    <div class="col-md-9">
        {!! Form::select($name, $options ,$selected, [
            "placeholder" => $placeholder,
            "class" => "form-control ".$plugin,
            "id" => $name,
        ]) !!}
        <span class="help-block">{{$errors->first($name)}}</span>
    </div>
</div>