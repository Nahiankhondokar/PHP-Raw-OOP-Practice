<?php

class A {
    const SKILL = ' nahian';
    
    public $name = 'nahian'; // we can access anywhere
    private $age = 26; // only we can access in the exitsing class
    protected $job = 'web developer'; // we can access in existing class & extend class not anywhere else.
}

class B extends A{
        function info(){
            echo 'my job is '.$this->job;
        }
}


$obj = new B;
echo $obj->info();
echo A::SKILL;






