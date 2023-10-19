<?php

/**
 *  in interface we create functions.
 *  where we implement this interface we have to diclear those function which are created befor in the interface
 */

 interface Test {
    public function workOne();
    public function workTwo();
 }


 class A implements Test {
    public function workOne(){
        echo 'Hello';
    }

    public function workTwo(){
        echo 'Hi';
    }
 }








            