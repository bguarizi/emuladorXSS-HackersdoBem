<!DOCTYPE html>
<html lang="en">
<?php include "../glossaries.inc.php";?>

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
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/scriptGlossario.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>XSS Refletido</title>
</head>

<style>

.image-container img {
  height: auto;
  display: block;
}
.robot-speech {
  max-width: 35%;
  margin-left: auto; 
  transform: translateX(-140%) translateY(100px); 
  z-index:10;
  text-align: center;
  overflow-wrap: break-word;
}

.container-robot{
  padding: 0;
  margin-top: 20%;
  display:block;
  margin:auto auto;
}
.robot-speech::after{
    bottom: -10px; 
    right: -10px; 
    transform: rotate(140deg); 
}
.robot{
  transform: translateX(30%);  
}
.writer{
  text-align: justify;
  justify-content: left;
  margin-bottom: 0px;
}
@media(max-width:800px){
  .robot{
    transform: scale(0.8);
    transform: translateX(55%);  
  }
  .robot-speech {
  max-width: 55%;
  margin-left: auto; 
  transform: translateX(-50%) translateY(110px); 
}
}

</style>

<body>
<div style="display: flex; width: 100%;">

  <?php include '../menu_lateral.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
      <h3 class="title" >Como funciona o ataque XSS Refletido</h3>
      <p>
        Os ataques XSS pertencem à categoria de ataques denominada ataques de injeção de código. 
        Nessa categoria de ataque, um usuário malicioso injeta o código malicioso através de campos de entrada existentes no sistema. 
        No caso de ataques XSS, o usuário malicioso explora os campos de entrada da página Web para injetar códigos maliciosos em JavaScript em uma aplicação Web 
        legítima em razão da aplicação Web não realizar codificação ou validação apropriada das entradas de dados fornecidas.
        </p>
        <p>
        A vítima do usuário malicioso em um ataque XSS é o navegador Web do usuário legítimo e não o servidor que hospeda a página Web vulnerável. 
        O código malicioso em JavaScript injetado na página Web legítima é executado no navegador Web do usuário legítimo. 
        Dessa forma, o usuário malicioso utiliza a página Web legítima como um canal confiável do usuário legítimo para executar o seu ataque.
        </p>
        <p>
        A descoberta de diversas formas de realizar ataques XSS em sites Web, 
        combinada com técnicas de phishing (que envolvem tentativas de fraude para roubo de informações sigilosas), 
        tornou os ataques XSS um dos métodos mais devastadores para a realização de fraudes em negócios.
        </p>
      </div>

    </div>

    <div class="image-container">
      <img src="../img/teorico/reflected-image1.png">
    </div>

      <div class="central-text theoric-content" id="second-text">
        <p>
        No ataque XSS refletido, o atacante gera um (URL) que contém um código malicioso(1). 
        Em seguida, o atacante repassa o URL ao usuário, por exemplo, através de um e-mail, 
        em um link em uma página Web ou por outras técnicas de engenharia social (2). 
        </p>
        <p>
        Geralmente o usuário é induzido a clicar no link associado ao URL (3) e quando isso ocorre, 
        o código malicioso é inserido na requisição HTTP enviada ao servidor Web (4) que executa uma aplicação Web vulnerável (5). 
        Esse servidor não trata devidamente as informações da requisição HTTP e as coloca na resposta HTTP contendo o código malicioso (6). 
        O código então é executado no navegador do usuário, pois, para o navegador, o código é originário de uma fonte confiável (o servidor Web).
        </p>
      </div>  

    <div class ="container-robot">
        <div class="robot-speech">
            <p class="writer">
            Em nosso tutorial, veremos o passo-a-passo de como identificar uma entrada vulnerável ao XSS 
            Refletido. Vamos nessa?
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
            <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
    <div class="container-buttons">
    <a href="../conteudo_teorico/intro.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Início 
          </div>
      </a> 
    <a href="../tutoriais_iniciante/lab1-refletido1.php" class="btn btn-primary transition-button" id="transition-next">
        Tutorial&gt;&gt;
    </a> 
</div>
</div>
</div>
</div>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script>
var glossaryData = <?php echo glossary($conn); ?>;
glossaryData.forEach(entry => {
    activateGlossary(entry.word, entry.meaning);
});
</script>
</body>
</html>

