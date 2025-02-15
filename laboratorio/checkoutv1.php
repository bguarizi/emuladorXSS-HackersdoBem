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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Checkout</title>

    <button type="button" class="btn btn-flutuante" id="btn-flutuante">
    <span style="bottom: 60px;" class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
      <img src="../img/robot.png" alt="Robô" style="width: 100px;">
    </span>
  </button>

  <div class="container-buttons">
    <a href="../questionarios/quiz_armazenado_avanc.php" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
     Prosseguir&gt;&gt;
     </a>
  </div>

</head>
<body>

<div style="display: flex; width: 100%;" id="menuLateral">

<?php
   
    include '../menu_lateral_avanc.php';
?>

    <div class="content">


<?php

date_default_timezone_set('America/Sao_Paulo');
include '../credentials.php';
include '../php/comments.inc.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}

echo '<div class="form-content rounded-4" id="form-content">';

echo '<div class="comment-section-checkout">
    
    <input class="cep-input" type="text" name="cupomField" id="cupomField" placeholder="Insira um cupom de desconto"> 
    
    <button class="vote-search-button cep-button btn-light border-0" id="cupomButton" type="submit">Validar cupom</button>';
    
        if (isset($_GET['search'])) {
            $searchQuery = $_GET['search'];
            echo "<script> var cupomField = document.getElementsByName('cupomField')[0]; cupomField.placeholder = " . $searchQuery .";</script>";
            echo "<p class='text-cep'>" . $searchQuery . "</p>";
        }
    
echo'</div>';

if (isset($_POST['comment-submit'])) {
    saveLightComment('checkout');
}

echo'<div class="checkout-comments">';

echo'<p class="title-questions">Dúvidas Frequentes</p>';

echo'<div class="div-comments">';

$comments = getLightComments('checkout');

if(mysqli_num_rows($comments) > 0) {
    while($row = mysqli_fetch_assoc($comments)) {
        echo "<div class='comment'>";
        echo "<p class='checkout-comment-user'><strong>Usuário " . $row['user_id'] . ": </strong></p>";
        echo "<p class='checkout-comment-content'> " . $row['message'] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p class='checkout-comment-content'>Sem comentários ainda.</p>";
}

echo'</div>';

echo  "<form id='comment-form' action='' method='post' autocomplete='off' style='margin-top: 10px;'>
        <textarea id='comment-input' class='comment-checkout-textarea' name='message' placeholder='Não encontrou uma resposta para sua pergunta? Publique sua pergunta'></textarea>
        <button id='comment-button' name='comment-submit' type='submit' class='vote-search-button cep-button btn-light border-0'>Enviar Comentário</button>
        </form>";

?>


</div>
</div>

<div class="container-buttons">
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-back-lab" style="bottom: 20px; left: 23vw; right: auto;" onclick="window.history.back();">
    &#60&#60Retornar
    </a>
</div>

</div>
</div>

</body>
</html>
<script src="../js/menuLateral.js"></script>
<script>

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

    var form = document.getElementById('form-content');
    var prod = document.getElementById('products-content');
    form.style.height = prod.offsetHeight + "px";

    document.getElementById('cupomButton').addEventListener('click', function() {
        var userInput = document.getElementById('cupomField').value;
        const atividade = getQueryParam('atividade');

if (userInput) {
    var searchQuery = encodeURIComponent(userInput);
    window.location.href = window.location.pathname + '?search=' + searchQuery + '&atividade=' + atividade;
}
    });

</script>

