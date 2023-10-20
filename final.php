<?php

/**
 *  we can not extends final class with another class.
 */
final class A {
    public $name = 'nahian';
}

class B extends A {

}


/**
 *  we can not overwrite both of final function which are exits parent & child class.
 */
class C {
    public final function info(){
        echo 'Hello world';
    }
}

class D extends C {
    public final function info(){
        echo 'Hello nation';
    }
}

$obj = new D;
$obj->info();
 