<?php


class ClassOne {
    public static $name = 'nahian';
    public $skill1 = 'Backend Developer ';

    public static function info(){
        echo 'this is '.self::$name;
    }
    
    public function fun2(){
        echo 'sklls are '.$this->skill1;
    }
}

class ClassTwo extends ClassOne {
    public static $name = 'rahi';
    public $skill = 'Frontend Developer';

    public static function info(){
        // echo 'this is '.self::$name;
        echo 'this is '.parent::$name;
    }
}

// * ClassOne --> parent class
// * ClassTwo --> child class

$obj = new ClassTwo;
echo $obj->info();
// echo $obj->skill1;

