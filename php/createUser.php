<?php

include '../credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = $_POST['login'];
    $stmt = $conn->prepare("INSERT INTO users (login) VALUES (?)");
    $stmt->bind_param("s", $user);

    if ($stmt->execute()) {
        $sql = "SELECT id FROM users WHERE login = '$user'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        $id = $row['id'];

        for($task = 1; $task <= 25; $task++){
            $sql_task = "INSERT INTO lojaXss.progress (task_id, status, user_id) VALUES ('$task', 0, '$id')";
            $result_task = mysqli_query($conn, $sql_task);
        }

        echo "Usuário criado com sucesso";

    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

?>
