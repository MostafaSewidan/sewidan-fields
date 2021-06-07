<?php
if (! function_exists('field')) {

    function field()
    {
        $field = new SewidanField\Field();
        return $field;
    }

}