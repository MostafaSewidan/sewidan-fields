
    {!! Form::textarea($name, $value, [
       "placeholder" => $label,
       "class" => (isset($field_attributes['class'])) ? $field_attributes['class'] : "form-control Editor",
       "rows" => (isset($field_attributes['rows'])) ? $field_attributes['rows'] : "80",
       "cols" => (isset($field_attributes['cols'])) ? $field_attributes['cols'] : "8",
       "data-name" => (isset($field_attributes['data-name'])) ? $field_attributes['data-name'] : $name,
       "id" => $name
       ]) !!}