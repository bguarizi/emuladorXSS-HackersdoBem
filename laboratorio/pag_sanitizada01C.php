<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include '../credentials.php';
    $conn = new mysqli($servername, $username, $password, $database, $port);
    $task = 13;
    ?>

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
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <script src="../js/progress.js"></script>
    <title>Página Sanitizada 01 C</title>
</head>
<body>

    <div style="display: flex; width: 100%;">

        <?php include '../menu_lateral_avanc.php'; ?>

        <div id="content" class="content p-0">
        
        <p class="vote-title"><\> Sua página sanitizada <\></p>

        <div class="comments-sanitizado">

        <div class="comments-sanitizado-intern">
            <p class="title-fild">Deixe um comentário</p>
            <form id="comment-form" action="" method="post" autocomplete="off" style="margin-top: 10px;">
                <textarea id="comment" name="message" class="textarea-comments-sanitizado" placeholder="Escreva aqui o seu comentário e teste a sanitização aplicada no código!"></textarea>
                <button id="comment-button" name="comment-submit" type="submit" class="vote-search-button btn-light border-0" style="color:white;">Enviar Comentário</button>
            </form>
 
            </div>
            
            </div>

            <div class="comments-sanitizado">

            <div class="comments-sanitizado-intern">

    		<p class="title-fild">Comentários</p>
            <div id="commentsSection" class="div-comments">
                <?php

                $sql = "SELECT * FROM sanitized_comments WHERE task = '$task'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<p class='comment-on-field'>" . $row['message'] . "</p>";
                    }
                } else {
                    echo "<p class='comment-on-field'>Sem comentários ainda.</p>";
                }
                ?>
            </div>

            </div>

            </div>

    <?php
    if (isset($_POST['comment-submit'])) {
        $comment = trim($_POST['message']);

        if (!empty($comment)) {
            
            $sql_check = "SELECT * FROM sanitized_comments WHERE message = '$comment' AND task = '$task'";
            $result_check = mysqli_query($conn, $sql_check);
        
            if (mysqli_num_rows($result_check) > 0) {
                $userMessage = "Dados já inseridos no banco de dados";
            } 
            else {
                $stmt = $conn->prepare("INSERT INTO sanitized_comments (message, task) VALUES (?, '$task')");
                $stmt->bind_param("s", $comment);
                
                if (!$stmt->execute()) {
                    echo "Error: " . $stmt->error;
                } 
                $stmt->close();
            }
        }

        echo "<script>window.location.replace(window.location.href);</script>";
    }
    ?>
    
    <p class="text-bottom">** Ao finalizar seus testes, feche esta aba do navegador e retorne para a aba inicial. Nela você verá se selecionou a resposta correta e poderá dar continuidade aos seus estudos.</p>

</body>
<script src="../js/menuLateral.js"></script>
</html>
