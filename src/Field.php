<?php

namespace SewidanField;

use Carbon\Carbon;
use Form;


/**
 * to create dynamic fields for modules
 */
class Field
{

    private $config;
    private $view_path = 'fields::fields';

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
        return view($this->view_path . '.' . $view, $params);
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
     * @param array $field_attributes
     * @return array|string
     * @throws \Throwable
     */
    public function text($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('text', compact('name', 'label', 'value', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function dateTime($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('date-time', compact('name', 'label', 'value','field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function time($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('time', compact('name', 'label', 'value','field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function number($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('number', compact('name', 'label', 'value', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function email($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('email', compact('name', 'label', 'value','field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param array $field_attributes
     * @return string
     */
    public function password($name, $label, $field_attributes = [])
    {
        return $this->view('password', compact('name', 'label','field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function datePicker($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('datepicker', compact('name', 'label', 'value', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function date($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('date', compact('name', 'label', 'value', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $options
     * @param null $selected
     * @param array $field_attributes
     * @return string
     */
    public function select($name, $label, $options, $selected = null, $field_attributes = [])
    {
        return $this->view('select', compact('name', 'label', 'options', 'selected', 'field_attributes'))->render();
    }


    /**
     * @param $name
     * @param $label
     * @param array $field_attributes
     * @return string
     */
    public function multiFileUpload($name, $label, $field_attributes = [])
    {
        return $this->view('multiFile-upload', compact('name', 'label', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $field_attributes
     * @return string
     */
    public function textarea($name, $label, $value = null, $field_attributes = [])
    {
        return $this->view('textarea', compact('name', 'label', 'value', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param array $field_attributes
     * @return string
     */
    public function fileWithPreview($name, $label, $field_attributes = [])
    {
        return $this->view('file', compact('name', 'label', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param array $field_attributes
     * @return string
     */
    public function checkBox($name, $label, $field_attributes = [])
    {
        return $this->view('check-box', compact('name', 'label', 'field_attributes'))->render();
    }

    /**
     * @param $name
     * @param $label
     * @param $options
     * @param null $checked
     * @param array $field_attributes
     * @return string
     */
    public function radio($name, $label, $options, $checked = null, $field_attributes = [])
    {
        return $this->view('radio', compact('name', 'label', 'options', 'checked','field_attributes'))->render();
    }
}