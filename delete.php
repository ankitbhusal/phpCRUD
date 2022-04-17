<?php

require_once "./db.php";

// get id from index.php
$id = $_GET['id'];

// check if id is not empty
if (!empty($id)) {
    // delete the record
    $result = $conn->query("DELETE FROM `stocks` WHERE `id`='$id'");
    if ($result) {
        header("Location: index.php");
    } else {
        die("Error Occured");
    }
} else {
    header("Location: index.php");
}
