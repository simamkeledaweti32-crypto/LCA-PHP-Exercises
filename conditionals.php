<?php
echo "<h2>1. Budget Calculator</h2>";
$budget = 5000;
$groceries = 1200;
$transport = 800;
$entertainment = 500;

$totalSpent = $groceries + $transport + $entertainment;
$balance = $budget - $totalSpent;

echo "Total Budget: R$budget <br>";
echo "Groceries: R$groceries <br>";
echo "Transport: R$transport <br>";
echo "Entertainment: R$entertainment <br>";
echo "Total Spent: R$totalSpent <br>";
echo "<b>Balance: R$balance</b> <br><br>";

if ($balance > 1000) {
    echo "Great! You are saving well.";
} elseif ($balance > 0) {
    echo "You are within budget, but low.";
} else {
    echo "Warning! You are over budget!";
}
?>
