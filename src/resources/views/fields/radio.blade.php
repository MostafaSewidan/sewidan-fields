<div class="form-group {{$errors->has($name) ? 'has-error':'' }}" id="{{$name}}_wrap">
    {!! Form::label($name, $label, ['class' => 'awesome']) !!}
    <div class="row">
        <div class="col-lg-12">

            <input type="checkbox" class="make-switch" id="test" data-size="small"
                   name="status" {{($company->status == 1) ? ' checked="" ' : ''}}>
            @foreach($options as $value => $displayName)
                <label class="radio-inline" style="">
                    {!! Form::radio($name , $value , $checked == $value ? true : false ) !!}

                    <label for="{{$name}}">{{$displayName}}</label>
                </label>
            @endforeach
        </div>
    </div>

    <span class="help-block">{{$errors->first($name)}}</span>
</div>