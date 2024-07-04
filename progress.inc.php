<?php

include 'credentials.php';

function updateProgress($task, $status){

	$conn = new mysqli($servername, $username, $password, $database, $port);

	# nivel - tipo - numero

	# 0 - tarefa bloqueada
	# 1 - tarefa liberada
	# 2 - tarefa concluida

	if($status < 0 || $status > 2){
		$status = 0;
	}

	$sql_check = "SELECT * FROM progress WHERE tid = '$task'";
	$result_check = mysqli_query($conn, $sql_check);

	if(mysqli_num_rows($result_check) > 0){
		$sql = "UPDATE tasks SET status = '$status' WHERE tid = '$task'"
		$result = mysqli_query($conn, $sql);
	}

	$conn->close();

}


function loadProgress($task, $status){

	$conn = new mysqli($servername, $username, $password, $database);

	# nivel - tipo - numero

	# 0 - tarefa bloqueada
	# 1 - tarefa liberada
	# 2 - tarefa concluida

	$sql = "SELECT * FROM progress WHERE tid = '$task'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$output = $result['status'];
	}

	$conn->close();
	return $output;
}



?>