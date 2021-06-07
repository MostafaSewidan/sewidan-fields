<?php

namespace SewidanField;

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
    public function langNavTabs()
    {
            return view('fields::fields.lang-nav-tabs')->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $options
     * @return string
     */
    public function text($name, $label, $value = null,$options = [])
    {
        return view('fields::fields.text',compact('name','label','value','options'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public function dateTime($name, $label, $value = null)
    {
        return view('fields::fields.date-time',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public function time($name, $label, $value = null)
    {
        return view('fields::fields.time',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $array
     * @return string
     */
    public function number($name, $label, $value= null , $array = [])
    {
        $step = inArray('step' , $array , '0.01');

        return view('fields::fields.number',compact('name','label','value','step'))->render();
    }

    /**
     * @param $name
     * @param $array
     * @param $type
     * @return string
     */
    public function ajaxBtn($name, $array = [] , $type = 'submit')
    {
        $class = inArray('class' , $array , 'btn btn-primary');
        $id = inArray('id' , $array , 'ajax-button');

        return view('fields::fields.ajax-btn',compact('name','class','type','id'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public function email($name, $label,$value = null)
    {
        return view('fields::fields.email',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @return string
     */
    public function password($name, $label)
    {
        return view('fields::fields.password',compact('name','label'))->render();
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
    public function datePicker($name, $label, $value = null ,$min = null , $max = null , $plugin = 'datepicker')
    {
        return view('fields::fields.datepicker',compact('name','label','value','plugin','max','min'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param null $max
     * @param null $min
     * @return string
     */
    public function date($name, $label, $value = null , $max = null , $min = null)
    {
        return view('fields::fields.date',compact('name','label','value','max','min'))->render();
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
    public function select($name, $label, $options, $selected = null , $plugin = 'select2', $placeholder = 'اختر قيمة')
    {
        return view('fields::fields.select',compact('name','label', 'options' ,'selected','plugin','placeholder'))->render();
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
    public function multiFileUpload($name , $label , $plugin = "file_upload_preview")
    {
        return view('fields::fields.multiFile-upload',compact('name','label','plugin'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param $options
     * @return string+
     */
    public function textarea($name, $label , $value = null , $options = [])
    {
        return view('fields::fields.textarea',compact('name','label','value','options'))->render();
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
    public function editor($name, $label , $value = null , $plugin = 'summernote')
    {
        return view('fields::fields.editor',compact('name','label','value','plugin'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function fileWithPreview($name, $label , $options = [])
    {
        return view('fields::fields.file',compact('name','label' ,'options'))->render();
    }

    public function checkBox($name, $label ,$options = [])
    {
        return view('fields::fields.check-box',compact('name','label','options'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $options
     * @param null $checked
     * @return string
     */
    public function radio($name, $label ,$options , $checked = null)
    {
        return view('fields::fields.radio',compact('name','label','options','checked'))->render();
    }
}