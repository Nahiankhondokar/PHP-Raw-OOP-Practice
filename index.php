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
}

// echo NewClass::info(); 
$obj = new NewClass;
echo $obj->fun2();

