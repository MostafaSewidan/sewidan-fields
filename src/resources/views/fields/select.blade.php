@extends('fields::layouts.field-app')
@section('field')
    {!! Form::select($name, $options, $selected , [
       "placeholder" => $label,
       "class" => (isset($field_attributes['class'])) ? $field_attributes['class'] : "form-control select2",
       "data-name" => (isset($field_attributes['data-name'])) ? $field_attributes['data-name'] : $name,
       "id" => $name
       ]) !!}
@endsection