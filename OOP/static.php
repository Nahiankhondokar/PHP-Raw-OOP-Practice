<?php

use ClassTwo as GlobalClassTwo;

/**
 *  static property or method we can call without make object the calss.
 *  we have to call static property or method by using :: scrope resolution.
 * 
 *  ClassName::$property;
 *  ClassName::info();
 */
class ClassOne {
    public static $name = 'nahian';
    public static $skill1 = 'Backend Developer ';

    public static function info(){
        echo 'this is '.self::$name;
    }

    
    public function fun2(){
        echo 'sklls are '.self::$skill1;
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

$obj = new ClassTwo;
echo $obj->fun2();

echo ClassTwo::$name;

