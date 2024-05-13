<?php
    $blogs = [
        ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 15],
        ['title' => 'mario kart cheat', 'author' => 'toad', 'content' => 'lorem', 'likes' => 21],
        ['title' =>  'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 11]
    ];

    // Accessing multidimensional arrays using index & key
    // print_r($blogs[2]['author']); // output: 'link'

    // Count array length
    // echo "\n";
    // echo count($blogs);
    //
    // Adding new elements
    $blogs[] = ['title' =>  'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 11];
    // print_r(count($blogs)); // length: 4

    // Take the last index on array using pop
    $popped = array_pop($blogs);
    print_r($popped);

    // The last index is now disappear and moved to $popped
    // print_r(count($blogs)); // Output: 3

