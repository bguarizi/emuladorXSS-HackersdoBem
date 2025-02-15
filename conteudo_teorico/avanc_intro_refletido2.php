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
    width: 100%;
    height: auto;
    overflow: hidden; 
    max-width: none;
}

.image-container img {
    width: 100%;
    height: auto;
}
</style>

<body>
<div style="display: flex; width: 100%;">



<?php include '../menu_lateral_avanc.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">A Interface Gráfica do Usuário ou front-end</h3>
      <div id="first-text">
        <p>
        Uma página web é formada por vários elementos. O Document Object Model (DOM) – você já aprendeu um pouco sobre ele no nível iniciante do nosso emulador – é a representação hierárquica dos elementos de uma página web do navegador. Quando o navegador recebe uma página para carregá-la, ele interpreta a estrutura da página e separa seus elementos em uma estrutura em árvore com cada elemento e atributos aninhados em seu respectivo local. A figura abaixo mostra um exemplo de DOM.
        </p>
      </div>
    </div>
    <div class="image-container" style="width:100%">
      <img src="../img/teorico/avancado-refletido-pagina2.png" draggable = "false">
    </div>
    <div class="central-text">
      <div id="second-text">
        <p>
        Atualmente, três linguagens são usadas para implementar a interface gráfica e definem a forma como os usuários interagem com ela. As linguagens são:
        </p>
        <ul style="list-style-type: disc; margin-left: 20px;">
        <li>
        O HyperText Markup Language (HTML) que define a estrutura da interface gráfica e os diferentes elementos do DOM;
        </li>
        <li>
        O Cascading Style Sheet (CSS) que define o estilo de uma aplicação web, que inclui os tipos de fontes, cores e estilo visual das páginas; e
        </li>
        <li>
        O JavaScript, que permite a implementação de funcionalidades dinâmicas ao manipular o DOM.
          </li>
        </ul>
        <p>
        A seguir, apresentamos mais detalhes sobre o HTML e o JavaScript e algumas recomendações para tornar o HTML e o JavaScript mais protegidos contra ataques XSS.
        </p>
      </div>
    </div>
  <div class="container-buttons">
      <a href="./avanc_intro_refletido1.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./avanc_intro_refletido3.php"  draggable = "false" style="color: white; text-decoration: none;">
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

