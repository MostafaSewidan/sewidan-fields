<div class="input-group">
            <span class="input-group-btn">
                <a data-input="image" data-preview="holder"
                   class="btn btn-primary lfm">
                    <i class="fa fa-picture-o"></i>
                    {{__('apps::dashboard.buttons.upload')}}
                </a>
            </span>
    {!! Form::text($name, null, [
       "class" => "form-control image",
       "id" => $name,
       "readonly" => "readonly"
    ]) !!}
    <span class="input-group-btn">
                <a data-input="{{$name}}" data-preview="holder"
                   class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-remove"></i>
                </a>
            </span>
</div>
<span class="holder" style="margin-top:15px;max-height:100px;">
    @if($value)
        <img src="{{$value}}" style="height: 15rem;">
    @endif
</span>
<input type="hidden" data-name="{{$name}}">

