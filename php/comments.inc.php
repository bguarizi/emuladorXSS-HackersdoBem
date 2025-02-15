<?php

function saveComment() {

	include '../credentials.php';
	$conn = new mysqli($servername, $username, $password, $database, $port);
	

	if(isset($_POST['comment-submit'])) {

		$date = $_POST['date']; 
		$message = $_POST['message'];
		$product = $_GET['id'];	

		$sql_check = "SELECT * FROM comments WHERE product_id = '$product' AND message = '$message' AND date = '$date'";
        $result_check = mysqli_query($conn, $sql_check);
        
        if (mysqli_num_rows($result_check) > 0) {
			$userMessage = "Dados já inseridos no banco de dados";
		} 
		else {
			$sql = "INSERT INTO comments (date, message, product_id) VALUES ('$date', '$message', '$product')";
			$result = $conn->query($sql);
		}
	}

	echo printComments($conn);
}

function saveLightComment($mode){

	include '../credentials.php';
	$conn = new mysqli($servername, $username, $password, $database, $port);

	if(isset($_POST['comment-submit'])) {

		$message = $_POST['message'];

		if($mode == "cart"){
			$sql_check = "SELECT * FROM cart_comments WHERE message = '$message'";
			$stmt = $conn->prepare("INSERT INTO cart_comments (message) VALUES (?)");
		}

		if($mode == "vote"){
			$sql_check = "SELECT * FROM voting_comments WHERE message = '$message'";
			$stmt = $conn->prepare("INSERT INTO voting_comments (message) VALUES (?)");
		}

		if($mode == "checkout"){
			$sql_check = "SELECT * FROM checkout_comments WHERE message = '$message'";
			$stmt = $conn->prepare("INSERT INTO checkout_comments (message) VALUES (?)");
		}

		$stmt->bind_param("s", $message);

        $result_check = mysqli_query($conn, $sql_check);
        
        if (mysqli_num_rows($result_check) > 0) {
			$userMessage = "Dados já inseridos no banco de dados";
		} 
		else {
			if (!$stmt->execute()) {
        		echo "Error: " . $stmt->error;
    		} 
    		$stmt->close();
		}
	}
}

function getLightComments($mode) {

	include '../credentials.php';
	$conn = new mysqli($servername, $username, $password, $database, $port);

	if ($conn->connect_error) {
	    die("Falha na Conexão: " . $conn->connect_error);
	}

	if ($mode == "cart") {
		$sql = "SELECT * FROM cart_comments";
	} elseif ($mode == "vote") {
		$sql = "SELECT * FROM voting_comments";
	} elseif ($mode == "checkout") {
		$sql = "SELECT * FROM checkout_comments";
	} else {
		die("Modo Inválido");
	}

	$result = mysqli_query($conn, $sql);
	if (!$result) {
	    die("Erro: " . mysqli_error($conn));
	}

	return $result;
}



function printComments($conn) {

	$product = $_GET['id'];

	$result = mysqli_query($conn, "SELECT date, message FROM comments WHERE product_id = '$product'");
	$commentsHtml = ''; 
	while ($row = mysqli_fetch_assoc($result)) {
		$userDate = date('d/m', strtotime($row['date']));
		$userMessage = $row['message'];
		$userDate = formatDate($userDate);
		if ($userMessage == ''){
			$userMessage = "Usuário não deixou a sua opinião.";
		}
		$commentElement = "<div class='comment'>";
		$starsSymbols = "<strong class='comment-stars'>★★★★ 4.0</strong>";
		$commentDate = "<p class='comment-date'>$userDate </p>";
		$commentContent = "<p class='comment-content'>$userMessage</p>";
		$commentElement .= $starsSymbols;
		$commentElement .= $commentDate;
		$commentElement .= $commentContent;
		$commentElement .= "</div>";
		$commentsHtml .= $commentElement;
	}

	$conn->close();
	return $commentsHtml; 
}

function formatDate($date){
	$dateParts = explode('/', $date);
	$day = $dateParts[0];
	$month = ltrim($dateParts[1], '0');
	$array = [
        "1" => "jan.",
        "2" => "fev.",
        "3" => "mar.",
        "4" => "abr.",
        "5" => "mai.",
        "6" => "jun.",
        "7" => "jul.",
        "8" => "ago.",
        "9" => "set.",
        "10" => "out.",
        "11" => "nov.",
        "12" => "dez.",
    ];
    $monthWritten= $array[$month];
    $userDate = $day . ' ' . $monthWritten;
    return $userDate;
}

?>
