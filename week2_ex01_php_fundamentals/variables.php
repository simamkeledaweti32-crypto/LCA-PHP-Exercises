<?php
$name = "Simamkele";
$age = 20;
$height = 1.70;
$weight = 65;
$isStudent = true;

echo "<h2>Variable Types</h2>";
echo "Name: $name - Type: " . gettype($name) . "<br>";
echo "Age: $age - Type: " . gettype($age) . "<br>";
echo "Height: $height - Type: " . gettype($height) . "<br>";
echo "isStudent: $isStudent - Type: " . gettype($isStudent) . "<br>";

if (isset($weight) && isset($height)) {
    $bmi = $weight / ($height * $height);
    echo "<h2>BMI Calculator</h2>";
    echo "<p>Weight: $weight kg, Height: $height m</p>";
    echo "<p>BMI: " . round($bmi, 2) . "</p>";
    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi < 25) {
        $category = "Normal weight";
    } elseif ($bmi < 30) {
        $category = "Overweight";
    } else {
        $category = "Obese";
    }
    echo "<p>Category: <strong>$category</strong></p>";
}
?>
