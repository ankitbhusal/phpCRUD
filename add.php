<?php

// echo "<pre>";
// print_r($_POST);
// Array
// (
//     [name] => rice
//     [quantity] => 20
//     [price] => 2000
//     [category] => 3
// )

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category = $_POST['category'];

require_once 'db.php';
// redirect to index page if the values arenot provided
if (empty($name) || empty($quantity) || empty($price) || empty($category)) {
    header('Location: index.php');
    exit();
}

if (!empty($name) && !empty($quantity) && !empty($price) && !empty($category)) {
    $result = $conn->query("INSERT INTO `stocks` (`name`, `qty`, `price`, `category`) VALUES ('$name', '$quantity', '$price', '$category')");
    if ($result) {
        header("Location: index.php");
    } else {
        die("Error Occured");
    }
}
