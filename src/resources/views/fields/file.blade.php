
{!! Form::file($name, $field_attributes) !!}

<span class="holder" style="margin-top:15px;max-height:100px;">
    @if($value)
        @php
            $file = explode(".", $document->car_document);
            $extenstion = end($file);
        @endphp
        @if(in_array($extenstion, config('field.file_extenstions', ["pdf"] )))
            <a target="_blank" download="{{$name . '.'. $extenstion}}" href="{{$value}}">Download !</a>
        @else
            <img src="{{$value}}" style="height: 15rem;">
        @endif
      
    @endif
</span>
