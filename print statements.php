<?php
$result = echo "Hello, World!"; // This will cause an error because echo has no return value.

$result = print "Hello, World!"; // Outputs: Hello, World!
echo $result; // Outputs: 1

echo "Hello", ", ", "World", "!"; // Outputs: Hello, World!

print "Hello", "World"; // Error: print expects exactly one argument.


$output = (true && echo "Hello"); // Error: echo cannot be used in an expression.

$output = (true && print "Hello"); // Outputs: Hello
echo $output; // Outputs: 1

?>
