<?php
$name = htmlspecialchars($_GET['name']);
$address = htmlspecialchars($_GET['address']);
$zip = htmlspecialchars($_GET['zip']);
$state = htmlspecialchars($_GET['state']);
$totalCost = htmlspecialchars($_GET['totalCost']);
$deliveryDate = htmlspecialchars($_GET['deliveryDate']);

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">';
echo '<title>Order Confirmation</title>';
echo '</head>';
echo '<body>';

echo '<div class="container mt-4">';
echo '<div class="card shadow-sm">';
echo '<div class="card-body">';
echo '<h1 class="card-title">Order Confirmation</h1>';
echo "<p class='card-text'>Thank you for your order, <strong>$name</strong><strong>!</strong></p>";
echo "<p class='card-text'>Your order will be shipped to:</p>";
echo "<p class='card-text'><strong>$address</strong><br><strong>$zip</strong>, <strong>$state</strong></p>";
echo "<p class='card-text'>Total Amount Spent: <strong>$$totalCost</strong></p>";
echo "<p class='card-text'>Estimated Delivery Date: <strong>$deliveryDate</strong></p>";
echo '</div>';
echo '</div>';
echo '</div>';

echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>';
echo '</body>';
echo '</html>';
?>
