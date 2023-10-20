<?php

/**
 *  trait is like abstruct class, we can not make it object.
 *  We can implement this trait in any class by "use TraitName" writing like this.
 *  Trait is a reuseable abstruct class, 
 */
trait NewTrait{
    public function traitFun(){
        echo 'I am from trait';
    }
}

class A {
    public $name = 'Hello world';
}

class B extends A {
    use NewTrait;

    public function info(){
        echo 'This is '.$this->name;
    }
}

$obj = new B();
$obj->traitFun();


