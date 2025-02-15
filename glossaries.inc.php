<?php
include "credentials.php";

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function glossary($conn) { 
    $query = "SELECT * FROM glossary";
    $table = $conn->query($query);

    if (!$table) {
        return json_encode([]); 
    }

    if ($table->num_rows > 0) {
        $words = array();
        while ($row = $table->fetch_assoc()) {
            $words[] = [
                'word' => htmlspecialchars($row['word'], ENT_QUOTES, 'UTF-8'),
                'meaning' => htmlspecialchars($row['meaning'], ENT_QUOTES, 'UTF-8')
            ];
        }
        return json_encode($words);
    }

    return json_encode([]); 
}
?>