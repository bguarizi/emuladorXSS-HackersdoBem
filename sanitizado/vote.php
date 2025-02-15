<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $candidate = $_POST['candidate'];
    $file = 'votes.txt';

    // Verifique se o arquivo existe e inicialize os votos se não existir
    if (!file_exists($file)) {
        $votes = array(1 => 0, 2 => 0);
    } else {
        $currentVotes = file_get_contents($file);
        $votes = json_decode($currentVotes, true);
    }

    // Incrementa o voto para o candidato selecionado
    if (!isset($votes[$candidate])) {
        $votes[$candidate] = 0;
    }
    $votes[$candidate]++;

    // Salva os votos atualizados no arquivo
    file_put_contents($file, json_encode($votes));
    echo "Voto gravado para Candidato " . $candidate;
}
?>

