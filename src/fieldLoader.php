<?php

use SewidanField\Field;

if (!function_exists('field')) {

    function field($defult = null)
    {
        $defult = $defult ? $defult : env('FIELD_DEFAULT_CONTENT','default');
        $field = new SewidanField\Field($defult);
        return $field;
    }

}
if (!function_exists('SewidanGetTagConfig')) {

    function SewidanGetTagConfig($type, $config)
    {
        if (isset($config[$type]) && isset($config[$type]['active']) && $config[$type]['active'])
            return $config[$type];

        return false;
    }

}
if (!function_exists('sewidanOptionsToStr')) {

    function sewidanOptionsToStr($options)
    {
        $response = '';

        foreach ($options as $option => $value) :
            $response .= $option .'='. $value .' ';
        endforeach;

        return $response;
    }

}