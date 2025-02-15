<?php

include '../credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    die("ID not set.");
}

$sql = "SELECT * FROM votes WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $old_count = $row['vote_count'];
    $update_sql = "UPDATE votes SET vote_count = vote_count + 1 WHERE id = '$id'";
    mysqli_query($conn, $update_sql);

    $new_count = $old_count + 1;
    echo json_encode(['success' => true, 'newCount' => $new_count]);
} else {
    echo json_encode(['success' => false, 'message' => 'Vote not found.']);
}


?>