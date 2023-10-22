<?php 


// ====== Intro of PHP =========
$previous_name = 'personal home page. it is discovered at 1994';
$php = 'hyper text pre processor';
$server = 'php is a server site scripting language, php work in server.';
$ASP_lun = 'ASP is a server site language which is build by Microsoft';

// ====== Reference Variable =========
$name = 'Nahian khondokar';

$result = 'this is result of '.$name; // $name variable is a reference variable;
echo $result;


// ====== Constant Variable =========
/**
 *  Constant value is never change. it's a fixed value.
 *  Constant variable name is should be unique.
 *  Constant Variable should be capital letter.
 *  Constant diclear has 2 key. like const & define();
 *  
 */
const NAME = 'hello';
define('SKILL', 'Laravel Dev');

// can't do that, bcz variable name is same.
// const NAME = 'hi'; 

