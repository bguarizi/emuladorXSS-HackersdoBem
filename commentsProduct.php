<?php
    date_default_timezone_set('America/Sao_Paulo');
    include 'credentials.php';
	$conn = new mysqli($servername, $username, $password, $database, $port);
	include 'comments.inc.php';
    $id_produto = $_GET['id'];

    $sql = "SELECT * FROM produto WHERE id = '$id_produto'";
    $result = $conn->query($sql);
    
    $rows = array();

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/menu.css" rel="stylesheet">
    <link href="./css/fonts.css" rel="stylesheet">
    <link href="./css/index_general.css" rel="stylesheet">
    <link href="./css/page.css" rel="stylesheet">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    <title>Loja Hackers do Bem</title>

</head>
<body>

    <?php include './header.html'; ?>

    <div style="display: flex; width: 100%;">

    <div class="menu-lateral" id="menu-lateral">
    	<div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="./img/levels.png" alt="">Iniciante
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Intermediário</button>
                <button class="dropdown-item" type="button">Avançado</button>
            </div>
        </div>

        <hr class="levels_line mt-1 mb-3">

        <button type="button" class="close-btn">
            <img src="./img/close-btn.png" onclick="close_menu()"></img>
        </button>

        <div class="img-div">
        	<img src="./img/logo_oficial_branca.svg" class="img-logo"></img>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Introdução</a>
            </li>
            <li class="nav-item" type="button" data-toggle="collapse" data-target="#XssRef" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" href="#">XSS Refletido</a>
            </li>
            <ul class="collapse ul-subitem" id="XssRef">
                <li class="nav-subitem">
                <a href="#">Introdução</a><br>
                </li>
                <li class="nav-subitem">
                <a href="#">Como funciona</a><br>
                </li>
                <li class="nav-subitem">
                <a href="./laboratory.php">Laboratório</a><br>
                </li>
            </ul>
            <li class="nav-item" type="button" data-toggle="collapse" data-target="#xssarm" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" href="#">XSS Armazenado</a>
            </li>
            <ul class="collapse ul-subitem" id="xssarm">
                <li class="nav-subitem">
                    <a href="#">Introdução</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="#">Como funciona</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="./laboratory.php">Laboratório</a><br>
                    </li>
            </ul>
            <li class="nav-item" type="button" data-toggle="collapse" data-target="#xssdom" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" href="#">XSS DOM</a>
            </li>
            <ul class="collapse ul-subitem" id="xssdom">
                <li class="nav-subitem">
                    <a href="#">Introdução</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="#">Como funciona</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="./laboratory.php">Laboratório</a><br>
                    </li>
            </ul>
        </ul>

        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width: 25%"></div>
        </div>
    </div>

    <div class="menu-lateral-closed btn-menu-hidden"><img src="./img/mobile.png" alt=""></div>

        <div id="content" class="content">

            <div id='container-principal' class='container-fluid mt-3'>
        <div class='row justify-content-center align-items-center'>
            <div id='col' class='col-lg-6 position-relative'>
                <div id="first-card" class='card h-100'>
                    <div class='card-body'>
                        <div class="container-first">
                            <div class='container-banana'>
                                <?php 
                                echo "<img src='" . $rows[0]['end_imagem'] . "' id='banana-image' class='img-fluid float-start me-3' alt='banana'>";
                                

                                echo "<div class='card-title'> " . $rows[0]['descricao'] . " </div>";
                                    
   
                                    ?>

                                
                            </div>
                            <img id="heart-symbol" src='img/heart_symbol.png' class='heart-icon' alt='heart'>
                            <div class="inferior-card">
                                <!-- Estrelas -->
                                <div id="rating-box" class="container">
                                    <div id="rating" class="rating">
                                        <p id="rating-average">4.0</p>
                                        <span class="rating" id="star" data-value="1">&#9733;</span>
                                        <span class="rating" id="star" data-value="2">&#9733;</span>
                                        <span class="rating" id="star" data-value="3">&#9733;</span>
                                        <span class="rating" id="star" data-value="4">&#9733;</span>
                                        <span class="rating" id="star" data-value="5">&#9733;</span>
                                        <p id="rating-number">(13)</p>
                                    </div>
                                </div>
                                <!-- Preço -->
                                
                                <?php
                                
                                echo "<p id='price'>" . $rows[0]["preco"] . " </p>";
                                    
   
                                ?>
                                
                                    <!-- Botão -->
                                <div class="button-container">
                                    <button type="button" class="btn-custom-1">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="second-container" class='card col-lg-4'>
                <div class="comment-section">
                    <div id="comments-container">
                        <h5 id="opinions-text">Opiniões do Produto</h5>

                        <div class="progress-wrapper">
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="rating-label">5.0 &#9733;</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="rating-label">4.0 &#9733;</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="rating-label">3.0 &#9733;</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="rating-label">2.0 &#9733;</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="rating-label">1.0 &#9733;</span>
                        </div>
                        <h5 id='comments-title'>Comentários</h5>
                    
<?php

            echo  "</div><form id='comment-form' action='".saveComment($conn)."' method='post' autocomplete='off'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                        <input type='textarea' id='comment-input' name='message' placeholder='Faça um comentário'></input>
                        <button id='comment-button' name='comment-submit' type='submit' class='btn-custom-2'>Enviar Comentário</button>
                    </form></div>";

?> 
                </div>
            </div>
        </div>
    </div>

        </div>

    </div>
    
          <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Hello World!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Seja bem-vindo(a) ao nosso tutorial!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>

          </div>
        </div>
      </div>
    
    <button type="button" class="btn btn-flutuante" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <span class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
          <img src="./img/robot.png" alt="Robô" style="width: 100px;">
        </span>
   </button>

    
    <script src="./js/menuLateral.js"></script>
    <script src="./js/commentsProduct.js"> window.addEventListener('resize', resize)</script>
</body>

<script>

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

</script>

</html>