<?php

function calculateScore($level){

	include '../credentials.php';
	$conn = new mysqli($servername, $username, $password, $database, $port);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

	if (isset($_COOKIE['username'])) {
    	$user = $_COOKIE['username'];
    }
    else{
    	$user = 'Convidado';
    }


	$stmt = $conn->prepare("SELECT * FROM users WHERE login = ?");
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

	while($row = $result->fetch_assoc()){

		$task_id = $row['task_id'];

		$sql_level = "SELECT * FROM tasks WHERE id = '$task_id'";
		$result_level = mysqli_query($conn, $sql_level);
        

        if(mysqli_num_rows($result_level) > 0){

            $row_level = $result_level->fetch_assoc();

            if ($level == $row_level['level']) {
                $score += 10;
            }
        }
        
	}

	$conn->close();
	return $score;
}

$calculatedScoreBasic = calculateScore(1);

$calculatedPercentageBasic = number_format(100*($calculatedScoreBasic/90), 2); 

if ($calculatedPercentageBasic == 100){
	$medalha = "../img/medalha_finish.png";
} else {
	$medalha = "../img/medalha_block.png";
}

$calculatedScoreInterm = calculateScore(2);

$calculatedPercentageInterm = number_format($calculatedScoreInterm, 2);

if ($calculatedPercentageInterm == 100){
	$medalha_interm = "../img/medalha_finish.png";
} else {
	$medalha_interm = "../img/medalha_block.png";
}

$calculatedScoreAvanc = calculateScore(3);

$calculatedPercentageAvanc = number_format(100*($calculatedScoreAvanc/60), 2);

if ($calculatedPercentageAvanc == 100){
    $medalha_avanc = "../img/medalha_finish.png";
} else {
    $medalha_avanc = "../img/medalha_block.png";
}

/* $conn->close(); Tentei debuggar mas até o momento não entendi o conflito */

?>