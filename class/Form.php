<?php

class Form {

    private $datas = [];

    public function __construct($datas = []){
        $this->datas = $datas;
    }

    private function getValue($name){
        $value = '';
        if(isset($this->datas[$name])){
            return $this->datas[$name];
        } else {
            return '';
        }
    }

    private function input($type, $name, $placeholder){
        $value = $this->getValue($name);
        return "<input type=\"$type\" class=\"form-control\" name=\"$name\" id=\"input$name\" placeholder=\"$placeholder\" value=\"$value\" />";
    }

    public function text($name, $placeholder){
        return $this->input('text', $name, $placeholder);
    }

    public function email($name, $placeholder){
        return $this->input('email', $name, $placeholder);
    }

    public function textarea($name, $cols, $rows, $placeholder){
        $value = $this->getValue($name);
        if(isset($this->datas[$name])){
            $value = $this->datas[$name];
        }
        return "<textarea name=\"$name\" id=\"input$name\" class=\"form-control\" cols=\"$cols\" rows=\"$rows\" placeholder=\"$placeholder\" />$value</textarea>";
    }
}