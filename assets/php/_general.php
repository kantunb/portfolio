<?php

session_start();

function dd($var){
    var_dump($var);
    die;
}

require dirname(dirname(__DIR__))."/class/Form.php";
