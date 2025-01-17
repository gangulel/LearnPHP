<?php
// Define a multidimensional array
$students = [
    [
        "name" => "Alice",
        "age" => 20,
        "grades" => ["Math" => 85, "Science" => 90, "History" => 88],
    ],
    [
        "name" => "Bob",
        "age" => 22,
        "grades" => ["Math" => 78, "Science" => 85, "History" => 80],
    ],
    [
        "name" => "Charlie",
        "age" => 21,
        "grades" => ["Math" => 92, "Science" => 88, "History" => 84],
    ],
];

// Accessing elements in the array
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "\n";
    echo "Age: " . $student["age"] . "\n";
    echo "Grades:\n";
    foreach ($student["grades"] as $subject => $grade) {
        echo "  $subject: $grade\n";
    }
    echo "\n";
}
?>
