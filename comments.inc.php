<?php

function saveComment($conn) {

	if(isset($_POST['comment-submit'])) {

		$date = $_POST['date']; 
		$message = $_POST['message'];
		$product = $_GET['id'];

		$sql_check = "SELECT * FROM comments WHERE pid = '$product' AND message = '$message' AND date = '$date'";
        $result_check = mysqli_query($conn, $sql_check);
        
        if (mysqli_num_rows($result_check) > 0) {
			$userMessage = "Dados já inseridos no banco de dados";
		} 
		else {
			$sql = "INSERT INTO comments (date, message, pid) VALUES ('$date', '$message', '$product')";
			$result = $conn->query($sql);
		}
	}

	echo printComments($conn);
}

function printComments($conn) {

	$product = $_GET['id'];
	$result = mysqli_query($conn, "SELECT date, message FROM comments WHERE pid = '$product'");
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
