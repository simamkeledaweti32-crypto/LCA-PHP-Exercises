<?php
echo "<h2>1. For Loop - Numbers 1 to 10</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "X is equal to $i <br>";
}
echo "<br>";

echo "<h2>2. Foreach Loop - South African Cities</h2>";
$cities = ["Cape Town", "Johannesburg", "Durban", "Pretoria", "Bloemfontein"];

foreach ($cities as $city) {
    echo "City: $city <br>";
}
echo "<br>";

echo "<h2>3. While Loop - Countdown</h2>";
$count = 5;
while ($count > 0) {
    echo "Countdown: $count <br>";
    $count--;
}
echo "Done!";
?>
