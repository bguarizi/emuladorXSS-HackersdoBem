<?php

include '../credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

$user = $_POST['user'];

$sql = "SELECT id FROM users WHERE login = '$user'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$id = $row['id'];

$sql_check = "SELECT * FROM progress WHERE user_id = '$id'";
$result_check = mysqli_query($conn, $sql_check);

if(mysqli_num_rows($result_check) > 0){
	$sql = "UPDATE progress SET status = 0 WHERE user_id = '$id'";
	$result = mysqli_query($conn, $sql);
}

$conn->close();

?>