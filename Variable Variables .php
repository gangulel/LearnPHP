<?php

    $var = "Hello";
    $$var ="World";
    $$$var = "!";
    echo $World; // Outputs:!

    //Constants 

    define("PI", 3.14);
    echo PI; // Outputs: 3.14

?>