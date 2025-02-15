<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['comment'];
    file_put_contents('comments.txt', $comment . "\n", FILE_APPEND);
    header('Location: index7.php');
    exit;
}
?>

