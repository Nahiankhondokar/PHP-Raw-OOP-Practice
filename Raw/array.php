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


    /**
     *  Build-in array functions
     * 
     *  array_search(string, array);
     *  count(array)
     *  end(array) // last item of an array
     *  current(array) // first item of an array
     *  next(array) // first second item of an array
     *  array_pop() // last item delete of an array
     *  array_shift() // first item delete of an array
     *  array_push() // item add lastly in an array
     *  array_unsift() // item add firstly in an array
     *  array_slice() // copy some item form main array & create new array
     *  array_splice() // cut some item form main array & create new array
     *  in_array() // find one item in the existing array
     *  array_unique() // show only unique item in the existing array
     *  array_splice() // cut some item form main array & create new array
     */





