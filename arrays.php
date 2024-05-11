<?php
    // PHP not allows us to print an INT array
    $ages = [11, 12, 13, 15];

    // echo $ages[0]; // output: 11
    // echo $ages;  //ERROR

    // Notes: If we wanna print an entire array, consider to use print_r(),
    // print_r() used to print information that more readable for user.
    // print_r() usually used to debug code, not recommended for use in 
    // code production.

    // echo "\n";
    // print_r($ages);

    // Overwrite array index
    $ages[0] = 15;
    // echo "\n";
    // print_r($ages);

    // Add value at the end of index
    array_push($ages, 75);
    // echo "\n";
    // print_r($ages);

    // To count array length
    // echo count($ages); // output: 5

    // Merge 2 seperated array
    // $names1 = array('John', 'Alice', 'Bob', 'Eve'); // length: 4
    // $names2 = array('Michael', 'Sarah', 'David', 'Emily'); // length: 4

    // $mergeNames = array_merge($names1, $names2); // length: 8
    // print_r($mergeNames);

    // Associative arrays (key & value pairs)
    $foods = ['Italy' => 'Pizza', 'Japan' => 'Sushi', 'Mexico' => 'Tacos', 'India' => 'Curry', 'France' => 'Croissant']; // length: 5
    // print_r($foods);

    // Add key & value at the end of index
    // $foods['Germany'] = 'Hotdog';
    // print_r($foods);

    // Overwrite associative arrays (key & value pairs)
    // $foods['Japan'] = 'korokke pan';
    // print_r($foods);

    // To count Associative arrays (key & value pairs)
    echo count($foods);





