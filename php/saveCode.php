<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userCode = $_POST['htmlContent'];

    $preContent = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/index_general.css" rel="stylesheet">
    <link href="../css/tutorial_lab.css" rel="stylesheet">
    <link href="../css/vote.css" rel="stylesheet">
    <link href="../css/paginas_sanitizadas.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <script src="../js/progress.js"></script>
    <title>Página Gerada</title>
</head>
<body>

    <div style="display: flex; width: 100%;">

        <?php include '../menu_lateral_avanc.php'; ?>

        <div id="content" class="content p-0">

        <p class="vote-title"><\> Sua página renderizada <\></p>

        <div class="comments-sanitizado">

        <div class="comments-sanitizado-intern">
        <p class="title-fild">Deixe um comentário</p>
HTML;

    $postContent = <<<HTML
            </div>
            
            </div>

            <div class="comments-sanitizado">

            <div class="comments-sanitizado-intern">

            <p class="title-fild">Comentários</p>

            <div id="commentsSection" class="div-comments">
                <?php
                    if (file_exists("comentarios.txt")) {
                        \$comments = file("comentarios.txt", FILE_IGNORE_NEW_LINES);
                        foreach (\$comments as \$c) {
                            echo "<p>" . \$c . "</p>";
                        }
                    }
                    else {
                        echo "<p>Não há comentários ainda!</p>";
                    }
                ?>
            </div>

            <button type="button" class="btn btn-flutuante" id="btn-flutuante">
                <span style="bottom: 60px;" class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
                <img src="../img/robot.png" alt="Robô" style="width: 100px;">
                </span>
            </button>

            <div class="container-buttons">
                <a href="../laboratorio/lab_sanitizacao.php?atividade=avanc_sanitizado" class="btn btn-primary transition-button btn-flutuante" id="transition-back-lab" style="bottom: 20px; left: 23vw; right: auto;">
                &#60&#60Retornar
                </a>
                <a href="../conteudo_teorico/finish_avanc.php" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
                Prosseguir&gt;&gt;
                </a>
            </div>

            </div>

            </div>


</body>
<script src="../js/menuLateral.js"></script>
</html>
HTML;

    if (file_exists("../laboratorio/comentarios.txt")) {
        $file = fopen("../laboratorio/comentarios.txt", "w");
        fwrite($file, "");
        fclose($file);
    }

    $finalCode = $preContent . PHP_EOL . $userCode . PHP_EOL . $postContent;

    $filePath = __DIR__ . '/../laboratorio/lab_render.php';

    file_put_contents($filePath, $finalCode);

    echo '<script>window.location.href = "../laboratorio/lab_render.php";</script>';
    exit;
}
?>
