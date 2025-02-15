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
    <title>Introdução ao HTML</title>
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
      <h3 class="title">O que é HTML?</h3>
      <div id="first-text">
        <p>
        A linguagem, através da qual a maioria das páginas Web é escrita, chama-se HyperText Markup Language (HTML). A linguagem de marcação de hipertexto permite que os usuários produzam páginas que incluem texto, imagens, vídeos e ponteiros (hiperlinks) para outras páginas. Uma página Web consiste em um cabeçalho (&lt;head&gt; e &lt;/head&gt;) e um corpo (&lt;body&gt; e &lt;/body&gt;) entre as tags (comandos de formatação) de início (&lt;html&gt;) e de fim (&lt;/html&gt;). A figura abaixo exemplifica o formato de uma tag.
        </p>
      </div>
    </div>
    <div class="image-container" style="width:100%">
      <img src="../img/teorico/avancado-refletido-pagina3-1.png" draggable = "false">
    </div>
    <div class="central-text">
      <div id="second-text">
        <p>
        A maior parte das tags em HTML possuem o formato &lt;algo&gt; para indicar o início do conteúdo que será marcado e o formato &lt;/algo&gt; para indicar o fim do conteúdo marcado. As strings que são inseridas entre as tags são chamadas de diretivas para iniciar e finalizar uma determinada especificação. Por exemplo, a diretiva “b” das tags &lt;b&gt; e &lt;/b&gt; indica que o conteúdo inserido entre as tags será marcado em bold (negrito). 
        </p>
        <p>
        Algumas tags possuem parâmetros, chamados de atributos. Por exemplo, a tag &lt;img&gt; pode ser utilizada para incluir uma imagem seguida de um texto alternativo caso a imagem não possa ser exibida. Portanto, a tag possui a seguinte estrutura &lt;img src=”URL da imagem” alt=”Descrição da imagem”&gt;. O primeiro atributo chamado “src” deve indicar o URL para a imagem. O segundo atributo chamado “alt” deve indicar o texto alternativo para a descrição da imagem. Para cada tag, o padrão HTML oferece uma lista dos parâmetros e o que significam. Como cada parâmetro possui um nome, a ordem na qual eles aparecem não é importante. A Figura a seguir uma página HTML.
        </p>
      </div>
    </div>
    <div class="image-container">
    <img src="../img/teorico/avancado-refletido-pagina3-2.png" draggable = "false">
    </div>

  <div class="container-buttons">
      <a href="./avanc_intro_refletido2.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./avanc_intro_refletido4.php"  draggable = "false" style="color: white; text-decoration: none;">
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

