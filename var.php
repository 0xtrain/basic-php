<?php
    $fname = "Made";
    $lname = "Dananjaya";

    echo "nama: ";
    echo $fname;
    echo " ";
    echo $lname;

    // Variable variables testing
    $address = "Jln. no.60 anggrek";
    $$address = "alamat rumah Made";

    echo "\n";
    echo "alamat: ";
    echo $$address;

    // Notes: Variables in php is mutable, which mean the dataType can be changed anytime.