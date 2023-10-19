<?php

// we can not make it object becaseu it's abstruct class. we can only access if exits any static value.
// we
abstract class D {
    public static $name = 'Hello';
    public $hi = 'Hi';
}

class E extends D {
    function demo (){
        echo $this->hi;
    }
}



// $obj = new D; // we can't it  make it object.
echo D::$name;
$obj = new E;
echo $obj->demo();




 


