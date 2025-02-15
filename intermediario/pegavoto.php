<?php
// Defina o nome do arquivo que contém os votos
$arquivo = 'votes.txt';

// Verifique se o arquivo existe
if (file_exists($arquivo)) {
    // Leia o conteúdo do arquivo
    $conteudo = file_get_contents($arquivo);

    // Decodifique o conteúdo JSON para um array PHP
    $votos = json_decode($conteudo, true);

    // Verifique se a decodificação foi bem-sucedida
    if (json_last_error() === JSON_ERROR_NONE) {
        // Comece a exibir o conteúdo HTML
        echo "<html><body>";

        // Percorra o array de votos e exiba as informações
        foreach ($votos as $candidato => $voto) {
            echo "<h3>Candidato $candidato: $voto votos</h3>";
        }

        // Termine o conteúdo HTML
        echo "</body></html>";
    } else {
        // Se houver um erro na decodificação JSON
        echo "<h3>Erro ao decodificar o JSON: " . json_last_error_msg() . "</h3>";
    }
} else {
    // Se o arquivo não existir
    echo "<h3>Arquivo $arquivo não encontrado.</h3>";
}
?>
