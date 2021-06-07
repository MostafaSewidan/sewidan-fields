<?php

namespace MyVendor\SewidanField;

use Carbon\Carbon;
use Form;


/**
 * to create dynamic fields for modules
 */
class Field{

    public function isDeferred(){
        return false;
    }


    function __construct()
    {

    }

    /**
     * @return string
     */
    public static function langNavTabs()
    {
            return view('sewidanfield::dashboard.fields.lang-nav-tabs')->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $options
     * @return string
     */
    public static function text($name, $label, $value = null,$options = [])
    {
        return view('sewidanfield::dashboard.fields.text',compact('name','label','value','options'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public static function dateTime($name, $label, $value = null)
    {
        return view('sewidanfield::dashboard.fields.date-time',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public static function time($name, $label, $value = null)
    {
        return view('sewidanfield::dashboard.fields.time',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $array
     * @return string
     */
    public static function number($name, $label, $value= null , $array = [])
    {
        $step = inArray('step' , $array , '0.01');

        return view('sewidanfield::dashboard.fields.number',compact('name','label','value','step'))->render();
    }

    /**
     * @param $name
     * @param $array
     * @param $type
     * @return string
     */
    public static function ajaxBtn($name, $array = [] , $type = 'submit')
    {
        $class = inArray('class' , $array , 'btn btn-primary');
        $id = inArray('id' , $array , 'ajax-button');

        return view('sewidanfield::dashboard.fields.ajax-btn',compact('name','class','type','id'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public static function email($name, $label,$value = null)
    {
        return view('sewidanfield::dashboard.fields.email',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @return string
     */
    public static function password($name, $label)
    {
        return view('sewidanfield::dashboard.fields.password',compact('name','label'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $plugin
     * @param $max
     * @param $min
     * @param $value
     * @return string
     */
    public static function datePicker($name, $label, $value = null ,$min = null , $max = null , $plugin = 'datepicker')
    {
        return view('sewidanfield::dashboard.fields.datepicker',compact('name','label','value','plugin','max','min'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $plugin
     * @return string
     */
    public static function date($name, $label, $value = null , $max = null , $min = null)
    {
        return view('sewidanfield::dashboard.fields.date',compact('name','label','value','max','min'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $options
     * @param string $plugin
     * @param string $placeholder
     * @param null $selected
     * @return string
     */
    public static function select($name, $label, $options, $selected = null , $plugin = 'select2', $placeholder = 'اختر قيمة')
    {
        return view('sewidanfield::dashboard.fields.select',compact('name','label', 'options' ,'selected','plugin','placeholder'))->render();
    }
    
    
    /**
     * @param $name
     * @param $label
     * @param $options
     * @param string $plugin
     * @param string $placeholder
     * @param null $selected
     * @return string
     */
    public static function multiFileUpload($name , $label , $plugin = "file_upload_preview")
    {
        return view('sewidanfield::dashboard.fields.multiFile-upload',compact('name','label','plugin'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param $options
     * @return string+
     */
    public static function textarea($name, $label , $value = null , $options = [])
    {
        return view('sewidanfield::dashboard.fields.textarea',compact('name','label','value','options'))->render();
    }

    /**
     * summernote editor
     *
     * @param $name
     * @param $label
     * @param null $value
     * @param string $plugin
     * @return string
     */
    public static function editor($name, $label , $value = null , $plugin = 'summernote')
    {
        return view('sewidanfield::dashboard.fields.editor',compact('name','label','value','plugin'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public static function fileWithPreview($name, $label , $options = [])
    {
        return view('sewidanfield::dashboard.fields.file',compact('name','label' ,'options'))->render();
    }

    public static function checkBox($name, $label ,$options = [])
    {
        return view('sewidanfield::dashboard.fields.check-box',compact('name','label','options'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $options
     * @param null $checked
     * @return string
     */
    public static function radio($name, $label ,$options , $checked = null)
    {
        return view('sewidanfield::dashboard.fields.radio',compact('name','label','options','checked'))->render();
    }
}