<?php

function __autoload($class)
{
    include './libs/class_'.$class.'.php';
}

class Core{


    static $DB_NAME     = 'rand_text';
    static $DB_LOGIN    = 'mr_work';
    static $DB_PASS     = '020959';
    static $DB_LOCAL    = 'localhost';

}