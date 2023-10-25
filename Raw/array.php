<?php


/**
 *  Index Array
 *  Associative Array 
 *  Multidimentional Array
 */

   /**
    *  Index array
    */
  $food = ['apple', 'orange', 'grapes', 'mango'];

   /**
    *  Associative array
    *  We can define array index.
    */
   $location = [
    'rampura'   => 'Nahian',
    'feni'      => 'shuvo',
    'barishal'  => 'Misu'
   ];
   print_r($food);
    /**
    *  Multidimentional array
    *  We can define multiple array in a single array.
    */
    $multiLocation = [
        'rampura'   => ['Nahian', 'Prosenjit', 'Farid'],
        'feni'      => 'shuvo',
        'barishal'  => 'Misu'
       ];

    print_r($multiLocation);

    /**
     *  foreach loop
     *  Multidimentional array
     */
       $devs = [
        [
            'name'      => 'Nahian',
            'job'       => 'Laravel Developer'
        ],
        [
            'name'      => 'Prosenjit',
            'job'       => 'Polish Citizen'
        ],
        [
            'name'      => 'Farid',
            'job'       => 'England Citizen'
        ],
       ];

    foreach($devs as $index => $item) {
    echo 'This is -'. $item['name']. '<hr>';
    }






