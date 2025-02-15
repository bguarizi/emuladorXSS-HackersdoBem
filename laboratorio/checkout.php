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
    <link href="../css/keylogger.css" rel="stylesheet">
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
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
     Prosseguir&gt;&gt;
     </a>
  </div>

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

    include '../menu_lateral_avanc.php';

    ?>
   
    <div class="content">

    <p class="vote-title">Pagamento <img src="../img/money.png" width="40px"> </p>


<?php

date_default_timezone_set('America/Sao_Paulo');
include '../credentials.php';
include '../php/comments.inc.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Falha de Conexão: " . $conn->connect_error);
}

echo '<div class="form-content-all" >';

echo '<div class="form-content-products" >';

echo '<div class="products-content rounded-4" id="products-content">';

echo '<p class="title-products-content">Produtos <img src="../img/cart.png" width="20px"></p>';


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

echo '<div class="form-content-entrega rounded-4" id="form-content-entrega">';

echo '<div class="delivery-field">
    
    <p class="title-delivery">Entrega <img src="../img/truck.png" width="20px"></p>
    
    <p class="subtitle-delivery"> Frete: RS 10,00<br>Receba em até 10 dias úteis</p>';
    
echo'</div>';
echo'</div>';

echo'</div>';


echo '<div class="form-content-payment" >';

echo '<div class="form-content-cupom rounded-4" id="form-content-cupom" >';

echo '<div class="">

    <div class="cupom-div-title">

    <p class="cupom-title rounded-2"> Cupom de Desconto</p>

    </div>

    <div class="div-cupom-div">

    <div class="cupom-div">
    
    <input class="cupom-input" type="text" name="cupomField" id="cupomField" placeholder="Insira aqui"> 
    
    <button class="vote-search-button cupom-button btn-light border-0" id="cupomButton" type="submit">Aplicar</button>';
    
        if (isset($_GET['cupom'])) {
            $searchQuery = $_GET['cupom'];
            echo "<p class='text-cupom'> Cupom " . $searchQuery . " aplicado.</p>";
        }

echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';



if (isset($_POST['comment-submit'])) {
    saveLightComment('checkout');
}

echo '<div class="form-content rounded-4" id="form-content">';

echo'<div class="">';

echo'<div class="cupom-div-title">

    <p class="cupom-title rounded-2"> Pagamento</p>
    
    <p class="title-way-payment">Forma de Pagamento</p>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Cartão de crédito
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Cartão de débito
        </label>
    </div>

    <div class="input-container">
        <img src="../img/card.png" alt="Ícone">
        <input class="payment-input" type="text" name="cupomField" id="cupomField" placeholder="Número do Cartão"> 

    </div>

    <div class="input-container">
        <img src="../img/calendar.png" alt="Ícone">
        <input class="payment-input" type="text" name="cupomField" id="cupomField" placeholder="Validade (MM/AA)"> 
    </div>

    <div class="input-container">
        <img src="../img/security.png" alt="Ícone">
        <input class="payment-input" type="text" name="cupomField" id="cupomField" placeholder="Código de Segurança (XXX)"> 
    </div>
    
    <p class="text-payment">Subtotal: R$ 135,00</p>
    <p class="text-payment">Frete: R$ 10,00</p>
    <p class="text-payment">Cupom de Desconto: R$ -0,00</p>

    <h3 class="text-total">Total: R$ 145,00</h3>
    
    
    <button class="vote-search-button cupom-button btn-light border-0" id="cupomButton">Finalizar Compra</button>

    </div>



    
    
    
    ';




echo'</div>';


echo'</div>';

echo'</div>';

echo'</div>';



echo '<div class="form-content-comments rounded-4" id="form-content">';

echo'<p class="title-delivery">Avaliações de Clientes <img src="../img/star.png" width="20px"></p>';


echo'<div class="cart-comments">';


echo'<div class="div-comments">';

$comments = getLightComments('checkout');

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


echo  "<form id='comment-form' action='' method='post' autocomplete='off' style='margin-top: 0px; width: 35%; margin-left:5%; height: 180px; display: flex; flex-direction: column; align-items: center;'>
        <textarea id='comment-input' class='comment-cart-textarea' name='message' style='height: 130px; padding-left:20px;' placeholder='Avalie a experiência'></textarea>
        <button id='comment-button' name='comment-submit' type='submit' class='vote-search-button cep-button btn-light border-0' style='display: block; margin-top: 16px; color: white;'>Enviar Avaliação</button>
        </form>";


echo'</div>';

?>

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

    document.getElementById('cupomButton').addEventListener('click', function() {
        var userInput = document.getElementById('cupomField').value;
        const atividade = getQueryParam('atividade');

if (userInput) {
    var searchQuery = encodeURIComponent(userInput);
    window.location.href = window.location.pathname + '?cupom=' + searchQuery + '&atividade=' + atividade;
}
    });

    function resize_elements(){
        var form_entrega = document.getElementById("form-content-entrega");
        var form_cupom = document.getElementById("form-content-cupom");

        form_entrega.style.height = form_cupom.offsetHeight + "px";

    }

    
    document.addEventListener("DOMContentLoaded", resize_elements);

    window.addEventListener("resize", resize_elements);

</script>

