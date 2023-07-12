{!! Form::file($name, $field_attributes) !!}

<span class="holder" style="margin-top:15px;max-height:100px;">
    @if($value)
        <img src="{{$value}}" style="height: 15rem;">
    @endif
</span>
