<?php
    $Nim = 225150207111034;
    echo "Before: ";
    echo $Nim;
    echo "\n";

    $Nim = NULL;
    echo "After: ";
    echo $Nim;
    echo "\n";

    // Validation
    echo "Is var null: ";
    echo is_null($Nim);
    echo "\n";

    // Using var_dump() we can return the dataType with the value (true / false)
    echo "Is var null: ";
    echo var_dump(is_null($Nim));
    echo "\n";

    // Error occur because we try to print a undefined variable
    unset($Nim);
    // echo $Nim;
    echo var_dump(isset($Nim));



    // Notes: We can validate if the variable is NULL or not
    // using is_null(). if the function return 1, it's a 
    // NULL variable.

    // Notes: We can use unset() function to delete variable,
    // after we delete the var we can no longer have access 
    // to it.

    // Notes: isset() function used to validate if the variable
    // exist nor not.
