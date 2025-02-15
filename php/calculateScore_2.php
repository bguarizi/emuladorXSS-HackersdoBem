<?php

include './credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function calculateScore($level, $conn) {
    if (isset($_COOKIE['username'])) {
        $user = $_COOKIE['username'];
    } else {
        $user = 'Convidado';
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE login = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $id = $row['id'];

    $stmt = $conn->prepare("SELECT * FROM progress WHERE status = 1 AND user_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $score = 0;
    $progress_data = [];  

    while ($row = $result->fetch_assoc()) {
        $task_id = $row['task_id'];

        $stmt_level = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt_level->bind_param("i", $task_id);
        $stmt_level->execute();
        $result_level = $stmt_level->get_result();

        if ($result_level->num_rows > 0) {
            $row_level = $result_level->fetch_assoc();

            if ($level == $row_level['level']) {
                $score += 10;  
            }
        }

        $progress_data[] = [
            'task_id' => $row['task_id'],
            'status' => $row['status']
        ];
    }

    return [
        'score' => $score,
        'progress' => json_encode($progress_data)
    ];
}

$level = 1;  
$calculatedData = calculateScore($level, $conn);
$progressJson = $calculatedData['progress'];  
$calculatedScore = $calculatedData['score'];  

$calculatedPercentage = number_format(100 * ($calculatedScore / 90), 1);

if ($calculatedPercentage == 100) {
    $medalha = "../img/medalha_finish.png";
} else {
    $medalha = "../img/medalha_block.png";
}

// Calcular o score para o nível 1
$calculatedScoreBasic = calculateScore(1, $conn);
$calculatedPercentageBasic = number_format(100 * ($calculatedScoreBasic['score'] / 90), 2);

if ($calculatedPercentageBasic == 100) {
    $medalha = "../img/medalha_finish.png";
} else {
    $medalha = "../img/medalha_block.png";
}

// Calcular o score para o nível 2
$calculatedScoreInterm = calculateScore(2, $conn);
$calculatedPercentageInterm =  number_format(100 * ($calculatedScoreInterm['score'] / 100), 2);

// Calcular o score para o nível 2
$calculatedScoreAvanc = calculateScore(3, $conn);
$calculatedPercentageAvanc =  number_format(100 * ($calculatedScoreAvanc['score'] / 60), 2);
?>
