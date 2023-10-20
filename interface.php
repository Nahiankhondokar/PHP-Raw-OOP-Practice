<?php

/**
 *  in interface we create functions.
 *  where we implement this interface we have to diclear those function which are created before in the interface
 *  We can implements multiple interface in a single class.
 */

 interface Test {
    public function workOne();
    public function workTwo();
 }

 interface Hello {
    public function info();
 }

 class A implements Test, Hello {
    public function workOne(){
        echo 'Hello';
    }

    public function workTwo(){
        echo 'Hi';
    }

    public function info(){
        echo 'Hi';
    }
 }








            