<?php

class Form {

    public function input($type, $name, $placeholder){
        return "<input type=\"$type\" class=\"form-control\" placeholder=\"$placeholder\" name=\"$name\" value=\"\" required />";
    }

    public function text($name, $placeholder){
        return $this->input('text', $name, $placeholder);
    }

    public function email($name, $placeholder){
        return $this->input('email', $name, $placeholder);
    }

    public function textarea($name, $cols, $rows, $placeholder){
        return "<textarea name=\"$name\" class=\"form-control\" cols=\"$cols\" rows=\"$rows\" placeholder=\"$placeholder\" required /></textarea>";
    }
}