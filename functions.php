<?php
echo "<h2>1. Greeting Function</h2>";
function greetUser($name) {
    return "Hello $name, welcome to TechVibe!";
}
echo greetUser("Simamkele") . "<br><br>";

echo "<h2>2. Multiply Function</h2>";
function multiply($a, $b) {
    return $a * $b;
}
$num1 = 5;
$num2 = 3;
echo "$num1 * $num2 = " . multiply($num1, $num2) . "<br><br>";

echo "<h2>3. Check Even Function</h2>";
function isEven($num) {
    return $num % 2 == 0;
}
echo "Is 4 even? " . (isEven(4) ? "Yes" : "No");
?>
