<?php

include '../credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

$tables = ["comments", "cart_comments", "voting_comments", "checkout_comments", "sanitized_comments"];


$conn->begin_transaction();

foreach ($tables as $table) {
    $conn->query("DELETE FROM $table");
}

$conn->commit();


$conn->close();

?>