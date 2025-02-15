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
    <title>Roubo de Cookie</title>
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


<div style="display: flex; width: 100%;" id="menuLateral">
    

<?php

include '../credentials.php';
$conn = new mysqli($servername, $username, $password, $database, $port);

if (isset($_GET['cart'])) {
    $cartJson = urldecode($_GET['cart']);
    $cart = json_decode($cartJson, true);
}
else{
    $cart = [];
}

include '../menu_lateral_interm.php';


echo '<div class="content">';

if (empty($cart)) {
    echo "<h2>Opa! Parece que seus cookies estão vazios!</h2>";
} else {
    echo "<h2>Ha Ha! Olha o que eu roubei!</h2>";
    echo "<div style='text-align: center; font-size: 24px;'>";
    echo "<img src='../img/badguy.png' alt='bad guy' style='width: 150px;'>";
    echo "</div>";

    foreach ($cart as $productId => $amount) {
        $productId = htmlspecialchars($productId);
        $amount = htmlspecialchars($amount);
        
        $sql = "SELECT nome FROM produto WHERE id = '$productId'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        $name = $row['nome'];

        echo "<div class=''>";
        echo "<p>Você estava comprando " . $amount . " unidades de '" . htmlspecialchars($name) . "'!</p>";
        echo "</div>";
    }

    echo "<div style='text-align: center; margin-top: 20px;'>";
    echo "<p>E agora, o que você vai fazer?</p>";
    echo "</div>";
}
?>


<div class="container-buttons">
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-back-lab" style="bottom: 20px; left: 23vw; right: auto;" onclick="window.history.back();">
    &#60&#60Retornar
    </a>
</div>

</div>
</div>
<script src="../js/menuLateral.js"></script>
<script src="../js/next_activity.js"></script>
</body>
</html>
