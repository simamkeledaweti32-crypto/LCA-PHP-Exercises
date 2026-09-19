<?php
$name = "Simamkele";

function greet($name) {
    return "Hello, $name!";
}

function calculateArea($length, $width) {
    return $length * $width;
}

function testScope() {
    $localVar = "I am local";
    echo "<p>Inside function: $localVar</p>";
    echo "<p>Global name inside via global: " . $GLOBALS['name'] . "</p>";
}

echo "<h2>Functions & Scope</h2>";
echo "<p>" . greet($name) . "</p>";
echo "<p>Area of 5x10 = " . calculateArea(5, 10) . "</p>";

testScope();

echo "<p>Outside, global name is: $name</p>";
echo "<p>Outside, localVar does NOT exist: " . (isset($localVar) ? $localVar : "undefined - as expected") . "</p>";
?>
