<?php

namespace SewidanField;

use Carbon\Carbon;
use Form;


/**
 * to create dynamic fields for modules
 */
class Field{

    private $config;
    private $view_path = 'fields::fields';

    public function isDeferred(){
        return false;
    }


    function __construct($content = null)
    {
        $content = $content ? $content : config('field.default');
        $config_contents = config('field.contents');
        $config = isset($config_contents[$content]) ? $config_contents[$content] : $config_contents['default'];
        $this->config = $config;
    }

    /**
     * @param $view
     * @param array $params
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    private function view($view, $params = [])
    {
        $params['config'] = $this->config;
        return view($this->view_path.'.'. $view, $params);
    }

    /**
     * @return array|string
     * @throws \Throwable
     */
    public function langNavTabs()
    {
            return $this->view('lang-nav-tabs')->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $options
     * @return array|string
     * @throws \Throwable
     */
    public function text($name, $label, $value = null,$options = [])
    {
        return $this->view('text',compact('name','label','value','options'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public function dateTime($name, $label, $value = null)
    {
        return $this->view('date-time',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public function time($name, $label, $value = null)
    {
        return $this->view('time',compact('name','label','value'))->render();
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

        return $this->view('number',compact('name','label','value','step'))->render();
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

        return $this->view('ajax-btn',compact('name','class','type','id'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @return string
     */
    public function email($name, $label,$value = null)
    {
        return $this->view('email',compact('name','label','value'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @return string
     */
    public function password($name, $label)
    {
        return $this->view('password',compact('name','label'))->render();
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
        return $this->view('datepicker',compact('name','label','value','plugin','max','min'))->render();
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
        return $this->view('date',compact('name','label','value','max','min'))->render();
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
        return $this->view('select',compact('name','label', 'options' ,'selected','plugin','placeholder'))->render();
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
        return $this->view('multiFile-upload',compact('name','label','plugin'))->render();
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
        return $this->view('textarea',compact('name','label','value','options'))->render();
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
        return $this->view('editor',compact('name','label','value','plugin'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function fileWithPreview($name, $label , $options = [])
    {
        return $this->view('file',compact('name','label' ,'options'))->render();
    }

    public function checkBox($name, $label ,$options = [])
    {
        return $this->view('check-box',compact('name','label','options'))->render();
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
        return $this->view('radio',compact('name','label','options','checked'))->render();
    }
}