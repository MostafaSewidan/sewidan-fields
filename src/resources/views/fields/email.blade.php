@extends('fields::layouts.field-app')
@section('field')
    {!! Form::email($name, $value, [
       "placeholder" => $label,
       "class" => (isset($field_attributes['class'])) ? $field_attributes['class'] : "form-control",
       "data-name" => (isset($field_attributes['data-name'])) ? $field_attributes['data-name'] : $name,
       "id" => $name
       ]) !!}
@endsection