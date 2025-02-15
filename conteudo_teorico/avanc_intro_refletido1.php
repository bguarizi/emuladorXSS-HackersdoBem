<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/tutorial_before_lab.css" rel="stylesheet">
    <link href="../css/general_config.css" rel="stylesheet">
    <link href="../css/teoricos.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Aplicações Web</title>
</head>

<style>
body{
  overflow-x: hidden;
}

.container-buttons{
  margin-top: 20px;
}
.image-container {
    display: flex;
    justify-content: center; 
    align-items: center;
    height: 100%; /* Certifique-se de que o contêiner tenha altura suficiente */
    overflow: hidden; 
    max-width: none;
}

.image-container img {
    width: 80%;
    height: auto;
}
</style>

<body>
<div style="display: flex; width: 100%;">



<?php include '../menu_lateral_avanc.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">Aplicações Web</h3>
      <div id="first-text">
        <p>
        Uma aplicação web é um software que é invocado por um navegador web através da Internet. As aplicações web possuem uma interface gráfica do usuário (Graphical User Interface - GUI), chamada também de lado cliente ou front-end. É através da interface gráfica que os usuários interagem com a aplicação web através de menus de navegação, botões, imagens e gráficos. Já as demais partes das aplicações web responsáveis por sua operação e que não podem ser acessadas pelos usuários compõem o lado servidor, ou back-end. O back-end é o que está “atrás das cenas”, é “tudo que os usuários não enxergam”, como servidores de bancos de dados, bibliotecas de coleta e análise de dados de usuários, interfaces com outras aplicações web, etc.
        </p>
        <p>
        Uma loja de comércio eletrônico, como a loja Hackers do Bem do nosso emulador, é um exemplo de aplicação web com front-end e back-end. É através da interface gráfica, front-end, que o usuário navega pelo menu de atividades, busca um produto e insere comentários sobre ele. A busca por produtos é feita através de consultas ao servidor de banco de dados e os comentários são armazenados também no servidor de banco de dados. Ou seja, tarefas são executadas pelo lado servidor, back-end, cujo resultado é retornado para a interface gráfica, que o exibe para o usuário. A interação entre front-end e back-end é feita, em geral, usando as mensagens HTTP, sobre as quais você aprendeu em atividades anteriores. A figura abaixo ilustra a interação entre front-end e back-end  e mostra linguagens que são costumeiramente usadas para implementá-los. Você aprenderá mais sobre essas linguagens a seguir.
        </p>
      </div>
    </div>
    <div class="image-container" style="width: 100%">
      <img src="../img/teorico/avancado-refletido-pagina1.png" draggable = "false">
    </div>

  <div class="container-buttons">
      <a href="./intro_avanc.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./avanc_intro_refletido2.php"  draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-next">
          Prosseguir&gt;&gt;
          </div>
      </a> 
      </div>
    </div>
  </div>
</div>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
</body>
</html>

