<?php

    $globalvar = 10;
    function myfunc(){
        $localvar = 20;
        global $globalvar;
        echo "Local variable inside function is: $localvar";
        echo "<br>";
        echo "Global variable inside function is: $globalvar";
    }
    myfunc();
?>
