@extends('fields::layouts.field-app')
@section('field')
    {!! Form::text($name, $value, [
       "placeholder" => $label,
       "autocomplete" => "off",
       "class" => (isset($field_attributes['class'])) ? $field_attributes['class'] : "form-control datepicker",
       "data-name" => (isset($field_attributes['data-name'])) ? $field_attributes['data-name'] : $name,
       "max" => (isset($field_attributes['max'])) ? (isset($field_attributes['max'])) : \Carbon\Carbon::now()->toDateTimeString(),
       "min" => (isset($field_attributes['min'])) ? (isset($field_attributes['min'])) : \Carbon\Carbon::now()->subYears(200)->toDateTimeString(),
       "id" => $name
       ]) !!}
@endsection