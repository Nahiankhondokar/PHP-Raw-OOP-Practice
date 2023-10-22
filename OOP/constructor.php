<?php


/**
 *  __construct & __destruct are build-in function.
 *  these function name needs "__" underline before.
 *  __construct is called at the first time when the class is called.
 *  __destruct is called at the last time when the class is called.
 */
class ClassOne {
    public static $name = 'nahian';
    public $skill1 = 'Backend Developer ';

    public static function info(){
        echo 'this is '.self::$name;
    }

    public function __construct() // this is loaded first
    {
       echo '__construct is called before everything <hr> '; 
    }

    public function __destruct()// this is loaded last
    {
        echo '<hr>  __destruct is called after everything'; 
    }
}

$obj = new ClassOne;
echo $obj->info();
echo $obj->skill1;

