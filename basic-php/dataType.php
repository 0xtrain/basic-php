<?php
    // Integer
    echo "INT\n";
    echo "Decimal: ";
    var_dump(1234);

    echo "Octal: ";
    var_dump(0b1111);

    echo "Hexadecimal: ";
    var_dump(0x1A);

    echo "Binary: ";
    var_dump(0b1111);

    // Using underscore to make number more readable
    echo "implement underscore: ";
    var_dump(1_000_000);
    
    echo "\n";

    // Floating point
    echo "FLOAT\n";
    echo "Floating point with E notation plus: 1.2 x 10 : ";
    var_dump(1.2e1);

    echo "Floating point with E notation minus: 12.0 x -000.001 : ";
    var_dump(12.e-5);

    echo "Underscore in floating point: ";
    var_dump(10_000.200);

    // Notes: 64 bit computer does can fit up to 9223372036854775807
    // If there is value of integer more than 9223372036854775807
    // Integer overflow will trigger and dataType automaticlly changed.
