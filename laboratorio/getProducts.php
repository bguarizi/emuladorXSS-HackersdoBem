<?php

    include '../credentials.php';
    $nome = isset($_GET['produto']) ? $_GET['produto'] : '';
    $atividade = $_GET['atividade'];

    //Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Verificar a conexão
    if ($conn->connect_error) {
    	echo 'falha';
        die('Conexão falhou: ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM produto WHERE nome LIKE '%$nome%'";
    $result = $conn->query($sql);

    // Verificar se a consulta foi bem-sucedida
    if ($result === false) {
    	echo 'falha consulta';
        die('Erro na consulta: ' . $conn->error);
    }

    if ($nome != '') {

    	echo "<h3 style='text-align: center; padding-top: 50px;'> Resultados encontrados para '".$nome."'</h3>";
      echo "<div class='div_product_button'> <a href='./laboratory.php?atividade=".$atividade."'><button type='button' class='btn btn-outline-secondary product_button'>Voltar à página inicial</button></a> </div>";

    	echo "<div id='products'>";
        // Exibir os dados
        while ($row = $result->fetch_assoc()) {

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
    } else {

    	echo "<div id='carouselExampleIndicators' class='carousel slide shadow mb-5 bg-body-tertiary'>

    <div class='carousel-inner'>
      <div class='carousel-item active'>
        <img src='../img/img_carrossel_1.png' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item'>
        <img src='../img/img_carrossel_2.png' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item'>
        <img src='../img/img_carrossel_3.png' class='d-block w-100' alt='...'>
      </div>
    </div>
    <button onclick='prevSlide()' class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='prev'>
      <div class='carousel_button'>
      	<span class='carousel-control-prev-icon' aria-hidden='true'></span>
      </div>
      <span class='visually-hidden'>Previous</span>
    </button>
    <button onclick='nextSlide()' class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='next'>
      <div class='carousel_button'>
      	<span class='carousel-control-next-icon' aria-hidden='true'></span>
      </div>
      <span class='visually-hidden'>Next</span>
    </button>
</div>";

       echo "<div id='products'>";
        // Exibir os dados
        while ($row = $result->fetch_assoc()) {

            echo "<div class='border border-2 rounded-2 product shadow p-3 mb-5 bg-body-tertiary'>";

            echo "<img src='../" .$row["end_imagem"]. "' alt=''>";

            echo "<p>" .$row["nome"]. "</p>";

            echo "<p> R$ " .$row["preco"]. "</p>";
            
            echo "<a href='commentsProduct.php?atividade=" .urlencode($atividade). "&id=" .$row["id"]. "'>
            <button type='button' class='btn btn-dark product_button'>Saiba mais</button>
            </a>";

            echo "</div>";
        }
	
    	
    }
    
    $conn->close();

?>
