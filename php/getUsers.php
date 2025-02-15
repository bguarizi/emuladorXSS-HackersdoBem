<?php

include '../credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT login FROM users";
$result = $conn->query($sql);

$users = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row['login'];
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($users);
?>
