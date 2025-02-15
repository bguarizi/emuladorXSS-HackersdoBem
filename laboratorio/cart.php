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
    <link href="../css/cart.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Carrinho</title>

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

    <?php

    if (!isset($_COOKIE['cart'])) {
    
    $defaultCart = [
        '1' => 2,
        '4' => 1,
    ];

    setcookie('cart', json_encode($defaultCart), time() + 86400, "/", "", false, false);
    $cart = $defaultCart;

} else {
    $cart = json_decode($_COOKIE['cart'], true);
}

    ?>

</head>
<body>

<div style="display: flex; width: 100%;" id="menuLateral">

<?php
    
    function getParameterByName($name) {
        if (!isset($_GET[$name])) {
            return null;
        }
        return $_GET[$name];
    }

    $param = getParameterByName('atividade');

    // Definir o arquivo PHP a ser incluído com base no parâmetro
    if ($param === 'ref_cookie' || $param === 'arm_cookie') {
        include '../menu_lateral_interm.php';
    } else {
        include '../menu_lateral.php';
    }
    ?>
   
    <div class="content">

    <p class="vote-title">Entrega <img src="../img/truck.png" width="40px"> </p>


<?php

date_default_timezone_set('America/Sao_Paulo');
include '../credentials.php';
include '../php/comments.inc.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}

echo '<div class="products-content rounded-4" id="products-content">';

echo '<p class="title-products-content">Itens do Carrinho <img src="../img/cart.png" width="20px"></p>';

if (!empty($cart)) {
    $ids = array_keys($cart);
    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    
    $sql = "SELECT id, nome, end_imagem, preco FROM produto WHERE id IN ($placeholders)";
    $stmt = $conn->prepare($sql);
    
    // Bind the parameters
    $stmt->bind_param(str_repeat('i', count($ids)), ...$ids); // 'i' for integer
    $stmt->execute();
    $result = $stmt->get_result();

    // Display the products in the cart
    while ($row = $result->fetch_assoc()) {
        $productId = $row['id'];
        $amount = $cart[$productId];

        echo '<div class="border border-2 rounded-4 cart-product">';
        echo '<div class="div-form">';
        echo '<img src="../' . htmlspecialchars($row["end_imagem"]) . '" alt="' . htmlspecialchars($row["nome"]) . '" style="width:150px;">';
        echo '<div class="text-input-cart">';
        echo '<p style="font-weight: bold;">' . htmlspecialchars($row["nome"]) . '</p>';
        echo '<p>R$ ' . htmlspecialchars($row["preco"]) . '</p>';
        echo '<p>Quantidade: ' . htmlspecialchars($amount) . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "<p>Seu carrinho ainda está vazio!</p>";
}
echo '<p class="title-products-content text-right">Subtotal: R$ 130,00</p>';
echo '</div>';

echo '<div class="form-content rounded-4" id="form-content">';

echo '<div class="comment-section-cart">
    
    <input class="cep-input" type="text" name="cepField" id="cepField" placeholder="Insira um CEP"> 
    
    <button class="vote-search-button cep-button btn-light border-0" id="cepButton" type="submit">Buscar CEP</button>';
    
        if (isset($_GET['search'])) {
            $searchQuery = $_GET['search'];
            echo "<script> var cepField = document.getElementsByName('cepField')[0]; cepField.placeholder = " . $searchQuery .";</script>";
            echo "<p class='text-cep'>" . $searchQuery . "</p>";
        }
    
echo'</div>';

if (isset($_POST['comment-submit'])) {
    saveLightComment('cart');
}

echo'<div class="cart-comments">';

echo'<p class="title-questions">Dúvidas Frequentes</p>';

echo'<div class="div-comments">';

$comments = getLightComments('cart');

if(mysqli_num_rows($comments) > 0) {
    while($row = mysqli_fetch_assoc($comments)) {
        echo "<div class='comment'>";
        echo "<p class='cart-comment-user'><strong>Usuário: </strong></p>";
        echo "<p class='cart-comment-content'> " . $row['message'] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p class='cart-comment-content'>Sem comentários ainda.</p>";
}

echo'</div>';

echo  "<form id='comment-form' action='' method='post' autocomplete='off' style='margin-top: 10px;'>
        <textarea id='comment-input' class='comment-cart-textarea' name='message' placeholder='Não encontrou uma resposta para sua pergunta? Publique sua pergunta'></textarea>
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
<script src="../js/next_activity.js"></script>
<script>

function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

    var form = document.getElementById('form-content');
    var prod = document.getElementById('products-content');
    form.style.height = prod.offsetHeight + "px";

    document.getElementById('cepButton').addEventListener('click', function() {
        var userInput = document.getElementById('cepField').value;
        const atividade = getQueryParam('atividade');

if (userInput) {
    var searchQuery = encodeURIComponent(userInput);
    window.location.href = window.location.pathname + '?search=' + searchQuery + '&atividade=' + atividade;
}
    });

</script>

