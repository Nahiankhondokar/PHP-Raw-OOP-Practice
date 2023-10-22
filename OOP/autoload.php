<?php 

/** 
 *  We use auto load for loading classes location.
 *  Only uses classes location will be used by this function.
 */
spl_autoload_register(function($className){
    require_once $className.'.'.'php';
});

$obj = new User;
$ob->info();



