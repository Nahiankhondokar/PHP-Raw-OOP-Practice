<?php


class ClassOne {
    public static $name = 'nahian';
    public $skill1 = 'Backend Developer';

    public static function info(){
        echo 'this is '.self::$name;
    }

    
    public function fun2(){
        echo 'sklls are '.$this->skill1;
    }

    // public function __construct()
    // {
    //    echo '__construct is called before everything <hr> '; 
    // }

    // public function __destruct()
    // {
    //     echo '<hr>  __destruct is called after everything'; 
    // }
}

class ClassTwo extends ClassOne {
    public static $name = 'rahi';
    public $skill = 'Frontend Developer';

    public static function info(){
        echo 'this is '.self::$name;
    }
}

// echo NewClass::info(); 
$obj = new ClassTwo;
echo $obj->info();
echo $obj->skill1;

