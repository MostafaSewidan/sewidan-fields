@extends('fields::layouts.field-app')
@section('field')
    {!! Form::text($name, $value, [
       "placeholder" => $label,
       "class" => "form-control",
       "data-name" => (isset($options['data-name'])) ? $options['data-name'] : $name,
       "id" => $name
       ]) !!}
@endsection;