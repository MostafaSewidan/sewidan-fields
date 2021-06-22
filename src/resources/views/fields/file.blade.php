
<link rel="stylesheet" href="{{asset('SewidanField/plugins/bootstrap-fileinput/css/fileinput.min.css')}}">
{!! Form::file($name, $field_attributes) !!}

<span class="holder" style="margin-top:15px;max-height:100px;">
    @if($value)
        <img src="{{$value}}" style="height: 15rem;">
    @endif
</span>


<script src="{{asset('SewidanField/plugins/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
<script src="{{asset('SewidanField/plugins/bootstrap-fileinput/js/fileinput_locale_ar.js')}}"></script>