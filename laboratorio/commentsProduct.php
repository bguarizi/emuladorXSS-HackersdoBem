<?php
    date_default_timezone_set('America/Sao_Paulo');
    include '../credentials.php';
	$conn = new mysqli($servername, $username, $password, $database, $port);
	include '../php/comments.inc.php';
    $id_produto = $_GET['id'];
    $atividade = $_GET['atividade'];
    $nome = isset($_GET['produto']) ? $_GET['produto'] : '';

    $sql = "SELECT * FROM produto WHERE id = '$id_produto'";
    $result = $conn->query($sql);
    
    $rows = array();

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    $sql2 = "SELECT * FROM produto WHERE nome LIKE '%$nome%'";
    $result2 = $conn->query($sql2);

    // Verificar se a consulta foi bem-sucedida
    if ($result2 === false) {
    	echo 'falha consulta';
        die('Erro na consulta: ' . $conn->error);
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/index_general.css" rel="stylesheet">
    <link href="../css/tutorial_lab.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/index_general.css" rel="stylesheet">
    <link href="../css/page.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
        
    <title>Loja Hackers do Bem</title>

</head>

<style>

    ul li.nav-item{
        padding-left: 0px !important;
    }

</style>

<body>

    <div style="display: flex; width: 100%;">
    
    <?php
        function getParameterByName($name) {
            if (!isset($_GET[$name])) {
                return null;
            }
            return $_GET[$name];
        }

        $param = getParameterByName('atividade');

        // Definir o arquivo PHP a ser incluído com base no parâmetro
        if ($param === 'intermediario') {
            include '../menu_lateral_interm.php';
        } else {
            include '../menu_lateral.php';
        }
    ?>
    
    <div id="content" class="content p-0" style="text-align: left;">

        <?php include './header.php'; ?>

        <?php 

        if ($nome == '') {

           echo "<div id='container-principal' class='container-fluid mt-3'>";
           echo "<div class='div_product_button'> <a href='./laboratory.php?atividade=";echo htmlspecialchars($_GET['atividade']); echo"'><button type='button' class='btn btn-outline-secondary product_button'>Voltar à página inicial</button></a> </div>
        <div class='row justify-content-center align-items-center'>
            <div id='col' class='col-lg-6 position-relative'>
                <div id='first-card' class='card h-100'>
                    <div class='card-body'>
                        <div class='container-first'>
                            <div class='container-banana'>";
                                
                                echo "<img src='../" . $rows[0]['end_imagem'] . "' id='banana-image' class='img-fluid float-start me-3' alt='banana'>";
                                

                                echo "<div class='card-title'> " . $rows[0]['descricao'] . " </div>
                                    
   
                                    

                                
                            </div>
                            <img id='heart-symbol' src='../img/heart_symbol.png' class='heart-icon' alt='heart'>
                            <div class='inferior-card'>
                                <!-- Estrelas -->
                                <div id='rating-box' class='container'>
                                    <div id='rating' class='rating'>
                                        <p id='rating-average'>4.0</p>
                                        <span class='rating' id='star' data-value='1'>&#9733;</span>
                                        <span class='rating' id='star' data-value='2'>&#9733;</span>
                                        <span class='rating' id='star' data-value='3'>&#9733;</span>
                                        <span class='rating' id='star' data-value='4'>&#9733;</span>
                                        <span class='rating' id='star' data-value='5'>&#9733;</span>
                                        <p id='rating-number'>(13)</p>
                                    </div>
                                </div>
                                <!-- Preço -->";
                                
                                
                                
                                echo "<p id='price'>" . $rows[0]['preco'] . " </p>
                                    
   
                                
                                
                                    <!-- Botão -->
                                <div class='button-container'>
                                    <button type='button' class='btn-custom-1'>Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='second-container' class='card col-lg-4'>
                <div class='comment-section'>
                    <div id='comments-container'>
                        <h5 id='opinions-text'>Opiniões do Produto</h5>

                        <div class='progress-wrapper'>
                            <div class='progress-bar-container'>
                                <div class='progress-bar'></div>
                            </div>
                            <span class='rating-label'>5.0 &#9733;</span>
                        </div>
                        <div class='progress-wrapper'>
                            <div class='progress-bar-container'>
                                <div class='progress-bar'></div>
                            </div>
                            <span class='rating-label'>4.0 &#9733;</span>
                        </div>
                        <div class='progress-wrapper'>
                            <div class='progress-bar-container'>
                                <div class='progress-bar'></div>
                            </div>
                            <span class='rating-label'>3.0 &#9733;</span>
                        </div>
                        <div class='progress-wrapper'>
                            <div class='progress-bar-container'>
                                <div class='progress-bar'></div>
                            </div>
                            <span class='rating-label'>2.0 &#9733;</span>
                        </div>
                        <div class='progress-wrapper'>
                            <div class='progress-bar-container'>
                                <div class='progress-bar'></div>
                            </div>
                            <span class='rating-label'>1.0 &#9733;</span>
                        </div>
                        <h5 id='comments-title'>Comentários</h5>";
                    


            echo  "</div><form id='comment-form' action='".saveComment()."' method='post' autocomplete='off'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                        <input type='textarea' id='comment-input' name='message' placeholder='Faça um comentário'></input>
                        <button id='comment-button' name='comment-submit' type='submit' class='btn-custom-2'>Enviar Comentário</button>
                    </form></div>


                </div>
            </div>
        </div>
    </div>";
    } else {
        echo "<h3 style='text-align: center; padding-top: 50px;'> Resultados encontrados para '".$nome."'</h3>";
      echo "<div class='div_product_button'> <a onclick='window.history.back();'><button type='button' class='btn btn-outline-secondary product_button'>Voltar à página inicial</button></a> </div>";

    	echo "<div id='products'>";
        // Exibir os dados
        while ($row = $result2->fetch_assoc()) {

            echo "<div class='border border-2 rounded-2 product shadow p-3 mb-5 bg-body-tertiary'>";

            echo "<img src='../" .$row["end_imagem"]. "' alt=''>";

            echo "<p>" .$row["nome"]. "</p>";

            echo "<p> R$ " .$row["preco"]. "</p>";
            
            echo "
            <a href='commentsProduct.php?atividade=".$atividade."&id=".$row["id"]."'>
            <button type='button' class='btn btn-dark product_button'>Saiba mais</button>
            </a>
            ";
            
            echo "</div>";
        }
    }

    ?> 

            <div class="container-buttons">
              <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-back-lab" style="bottom: 20px; left: 23vw; right: auto;">
              &#60&#60Retornar
              </a>
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
    
    <button type="button" class="btn btn-flutuante">
        <span style="bottom: 60px;" class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
          <img src="../img/robot.png" alt="Robô" style="width: 100px;">
        </span>
   </button>

   <div class="container-buttons">
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
     Prosseguir&gt;&gt;
     </a>
  </div>

    
</body>
<script src="../js/next_activity.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/commentsProduct.js"> window.addEventListener('resize', resize)</script>

</html>