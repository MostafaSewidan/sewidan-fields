<?php
if (! function_exists('field')) {

    function field()
    {
        $field = new MyVendor\SewidanField\Field();
        return $field;
    }

}