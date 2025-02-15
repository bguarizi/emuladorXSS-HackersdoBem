<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/tutorial_before_lab.css" rel="stylesheet">
    <link href="../css/general_config.css" rel="stylesheet">
    <link href="../css/tutorials_box.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>


    <title>Votação vulnerável ao DOM XSS</title>
    <style>
        .candidate {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .comments {
            margin-top: 20px;
        }
        .results {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content" style="margin: 0px">
    <h1>Vote em seu Candidato</h1>
    <div class="candidate" id="candidate1">
        <h2>Candidato 1</h2>
        <button onclick="vote(1)">Vote</button>
    </div>
    <div class="candidate" id="candidate2">
        <h2>Candidato 2</h2>
        <button onclick="vote(2)">Vote</button>
    </div>

    <div class="results" id="results">
        <!-- Os resultados da votação serão carregados aqui -->
    </div>

    <div class="comments">
        <h2>Commentários</h2>
        <form method="POST" action="comments.php">
            <textarea name="comment" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
        <div id="comments-section">
            <!-- Aqui os comentários serão carregados -->
        </div>
    </div>

    <div id="search-result">
        <!-- O resultado da busca será inserido aqui -->
    </div>

    </div>
    </div>

    
</body>

<script src="../js/menuLateral.js"></script>

<script>
        // Função para ler parâmetros da URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Exibe o parâmetro 'query' diretamente no DOM e executa como código
        const query = getQueryParam('query');
        if (query) {
            // Usa eval para executar o script injetado
            document.getElementById('search-result').innerHTML = "Pesquisar por: " + query;
            eval(query); // Executa o conteúdo da query como JavaScript
        }

        function vote(candidate) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "vote.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
               // if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
               //     alert("Vote recorded for Candidate " + candidate);
               // }
            };
            xhr.send("candidate=" + candidate);
        }

        function updateResults() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'pegavoto.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('results').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        setInterval(updateResults, 1000); // Atualiza a cada 3 segundos
    </script>
</html>

