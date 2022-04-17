<?php
require_once "./db.php";
// get all fields from update.php
$id = $_GET['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category = $_POST['category'];

// if any fields are empty than redirect to update.php
if (empty($name) || empty($quantity) || empty($price) || empty($category)) {
    header('Location: update.php?id=' . $id);
    exit();
}

// check if all the fields are not empty
if (!empty($name) && !empty($quantity) && !empty($price) && !empty($category)) {
    // update the record
    $result = $conn->query("UPDATE `stocks` SET `name`='$name', `qty`='$quantity', `price`='$price', `category`='$category' WHERE `id`='$id'");
    if ($result) {
        header("Location: index.php");
    } else {
        die("Error Occured");
    }
}
