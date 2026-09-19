<?php
$myName = "Simamkele";
$favLanguage = "PHP";
$reason = "because it is easy to build dynamic websites";

echo "<h1>Welcome to PHP Programming!</h1>";
echo "<p>My name is $myName and my favourite programming language is $favLanguage $reason</p>";

$num1 = 15;
$num2 = 25;
$sum = $num1 + $num2;
echo "<p>Sum of $num1 + $num2 = $sum</p>";

echo "<p>Today is: " . date("l, F j, Y") . "</p>";
echo "<p>Your lucky number today is: " . rand(1, 100) . "</p>";
?>
