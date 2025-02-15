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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Votação</title>
</head>
<body>

<button type="button" class="btn btn-flutuante" id="btn-flutuante">
    <span style="bottom: 60px;" class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
      <img src="../img/robot.png" alt="Robô" style="width: 100px;">
    </span>
  </button>

  <div class="container-buttons">
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
     Prosseguir&gt;&gt;
     </a>
  </div>

<div style="display: flex; width: 100%;">

    <?php include '../menu_lateral_interm.php'; ?>

    <div class="content">

    <p class="vote-title m-0">Vote em seu produto favorito e ganhe 10% off!</p>

<?php

date_default_timezone_set('America/Sao_Paulo');
include '../credentials.php';
include '../php/comments.inc.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}

$sql = "SELECT id, vote_count FROM votes";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$flag = 0;

echo '<div class="vote">';

foreach ($data as $item) {

    $picture_sql = "SELECT end_imagem FROM produto WHERE id = ". $item['id'];
    $picture_result = $conn->query($picture_sql);
    $name_sql = "SELECT nome FROM produto WHERE id = ". $item['id'];
    $name_result = $conn->query($name_sql);

    
    
    if ($picture_result->num_rows > 0) {
        $picture_row = $picture_result->fetch_assoc();
        $picture_url = $picture_row['end_imagem'];

        $name_row = $name_result->fetch_assoc();
        $name = $name_row['nome'];
        
        echo '<div class="vote-product m-0" id="candidate' . $item['id'] . '">';
        echo '<img src="../' . htmlspecialchars($picture_url) . '" alt="produto ' . $item['id'] . '" style="width:120px;">';
        echo '<p class="name-product">'. htmlspecialchars($name) . '</p>';
        echo '<p class="count-votes"><span id="count-' . $item['id'] . '">' . htmlspecialchars($item['vote_count']) . ' Votos</p>';
        echo '<div class="candidate' . $item['id'] . '">';
            echo '<button class="vote-button" onclick="vote(' . $item['id'] . ')">Votar <img src="../img/like.png" style="width:20px;"</img> </button>';
        echo '</div>';
        echo '</div>';
        if ($flag == 0){
            echo '<div class="versus"><img src="../img/versus.png"</img> </div>';
            $flag = 1;
        }
    }
}
echo '</div>';

    echo  "<form id='comment-form' action='".saveLightComment('vote')."' method='post' autocomplete='off'>
        <div class='div-form'>
        <p class='text-input'>Deixe um comentário sobre os produtos</p><textarea class='vote-input border-input' id='comment-input' name='message' rows='3' wrap='soft' placeholder=''></textarea>
        </div>
        <div class='div-button-form'>
        <button id='comment-button' name='comment-submit' type='submit' class='vote-button'>Enviar Comentário</button>
        </div>
        </form>";
?>

<div id="search-result">
    <?php
        if (isset($_GET['search'])) {
            echo "Pesquisou por: " . htmlspecialchars($_GET['search']);
        }
    ?>
</div>

<div class="comment-section">
    <div class='div-form div-search'>
    <p class='text-input'>Buscar Comentário</p><input class='vote-input vote-input-short border-input' type="text" id="commentSearchField" placeholder=""> 
    </div>
    <button class='vote-search-button btn-light border-0' id='searchButton' type='submit'><img class='icon_find' src='../img/busca_white.png'></button>
    <div class='div-form'>
    <p class='text-input'>Comentários</p>
    <div class="div-comments vote-input">

    <?php
                $comments = getLightComments('vote');

                if(mysqli_num_rows($comments) > 0) {
                    while($row = mysqli_fetch_assoc($comments)) {
                        echo "<div class='comment'>";
                        echo "<p class='cart-comment-user'><strong>Usuário " . htmlspecialchars($row['user_id']) . ": </strong></p>";
                        echo "<p class='cart-comment-content'> " . htmlspecialchars($row['message']) . "</p>";
                        echo "</div>";
                    }
                } else {
                        echo "Sem comentários ainda!\n";
                }

    ?>
    </div>
    </div>

    <div class="container-buttons" style="margin-top: 5vh; text-align:left; margin-left:50px;">
    <div class="btn btn-primary transition-button" id="transition-back" onclick="window.history.back();">
        &lt;&lt;Retornar 
    </div>
</div>
</div>

</div>
</div>

    
</body>
</html>
<script src="../js/menuLateral.js"></script>
<script src="../js/next_activity.js"></script>
<script>

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Exibe o parâmetro 'query' diretamente no DOM e executa como código
const query = getQueryParam('query');
if (query) {
         // Verifica se a query contém '(' ou ')'
    if (/[()]/.test(query)) {
        // Se houver parênteses, exibe uma mensagem de erro e não executa a query
        document.getElementById('search-result').innerHTML = "Erro: A requisição da página contém caracteres inválidos.";
    } else {
        // Se não houver parênteses, exibe e executa a query
        document.getElementById('search-result').innerHTML = "Pesquisar por: " + query;
        eval(query); // Executa o conteúdo da query como JavaScript
    }
        }
    
function vote(id) {
    const formData = new FormData();
    formData.append('id', id);

    fetch('../php/addVote.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const countElement = document.getElementById('count-' + id);
            countElement.textContent = data.newCount + " Votos";
        } else {
            console.error('Vote could not be added:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));

    return false;
}

document.getElementById('searchButton').addEventListener('click', function() {
    var userInput = document.getElementById('commentSearchField').value;

    const atividade = getQueryParam('atividade');

    if (userInput) {
        var searchQuery = encodeURIComponent(userInput);
        window.location.href = window.location.pathname + '?search=' + searchQuery + '&atividade=' + atividade;
    }
});

</script>