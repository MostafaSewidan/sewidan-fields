{!! Form::checkbox($name, $label, $value , [
    "class" => (isset($field_attributes['class'])) ? $field_attributes['class'] : "make-switch",
    "data-name" => (isset($field_attributes['data-name'])) ? $field_attributes['data-name'] : $name,
    "id" => $name,
    "data-size" => (isset($field_attributes['data-size'])) ? $field_attributes['data-size'] : 'small',
]) !!}