
    {!! Form::password($name, [
       "placeholder" => $label,
       "class" => (isset($field_attributes['class'])) ? $field_attributes['class'] : "form-control",
       "data-name" => (isset($field_attributes['data-name'])) ? $field_attributes['data-name'] : $name,
       "id" => $name
       ]) !!}