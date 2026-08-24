<!DOCTYPE html>
<html>
<head><title>Week1 Ex01 - PHP Fundamentals</title></head>
<body>
<h1>Exercise 1 - PHP Fundamentals</h1>
<?php
$name = "Simamkele";
$age = 22;
$isStudent = true;
$hobbies = ["coding", "football", "music"];

echo "<p>Hello, I am $name learning PHP!</p>";
echo "Today is " . date("l, F j, Y") . "<br>";
echo "Lucky number: " . rand(1,100) . "<br>";
echo "Type of name: " . gettype($name) . "<br>";
?>
<h3>My Hobbies:</h3>
<ul><?php foreach($hobbies as $h) echo "<li>$h</li>"; ?></ul>
<?php
$globalVar = "I am global";
function testScope(){
  $local = "I am local";
  static $count = 0; $count++;
  global $globalVar;
  echo "$globalVar | $local | Count: $count <br>";
}
testScope(); testScope();
?>
</body>
</html>
