<?php


class NewClass {
    public static $name = 'nahian';
    public $skill = 'Backend Developer';

    public static function info(){
        echo 'hello '.self::$name;
    }

    
    public function fun2(){
        echo 'sklls are '.$this->skill;
    }

    public function __construct()
    {
       echo '__construct is called before everything <hr> '; 
    }

    public function __destruct()
    {
        echo '<hr>  __destruct is called after everything'; 
    }
}

// echo NewClass::info(); 
$obj = new NewClass;
echo $obj->fun2();

