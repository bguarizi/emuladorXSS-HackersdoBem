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
    <title>Introdução do Nível Avançado</title>
</head>

<style>
body{
  overflow-x: hidden;
}

.image-container img {
    height: auto;
    display: block;
  }

  .container-robot {
    border-radius: 3px;
    width: 100%;
    padding: 0;
    display: block;
    margin: auto auto;
    transform: translate(13vw, 50px);
  }

.robot-speech::after {
      content: '';
      height: 25px;
      position: absolute;
      z-index: 1;
      border-bottom: 30px solid #fff; 
      border-right: 20px solid transparent; 
      top: 70px; 
      right: -17px; 
      transform: rotate(90deg); 
}

.robot-speech {
    max-width: 35vw;
    min-height: 100px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-21.7vw) translateY(-200px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(50px, -10px);;
    }
    .robot-speech{
      max-width: 35vw;
      transform: translateX(-20.7vw) translateY(-200px); 
      margin-bottom: 90px;
  }
  }
  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-21.7vw) translateY(-200px); 
  }
}
  
   @media(min-width:2200px){
    .robot-speech{
      transform: translateX(-20.7vw) translateY(-200px); 
  }
   }

  .writer{
    text-align: justify;
    justify-content: left;
    margin-bottom: 0px;
  }



</style>

<body>
<div style="display: flex; width: 100%;">



<?php include '../menu_lateral_avanc.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">Introdução</h3>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              No nível intermediário, pudemos entender de forma mais aprofundada como funcionam os ataques XSS. Devido a possibilidades variadas de ataques e suas gravidades é de extrema importância enterdemos sobre prevenção e como corrigir as vulnerabilidades em nossos ambientes. Por isso, neste nível, iremos entender como funciona o conceito de sanitização aplicado a código, para que possamos garantir ambientes mais seguros! Vamos nessa?
</p>
            </div>

      </div>
    <div class="central-text" style="transform: translateY(-80px)">
      <div id="first-text">
        <p>
        Neste nível, aprofundaremos o conhecimento adquirido nos níveis anteriores para entender a estrutura e funcionamento do HTML e de linguagens essenciais no desenvolvimento web, como JavaScript e PHP. Vamos explorar a interação entre o front-end e o back-end e focar em como tags e scripts podem representar riscos de segurança quando manipulados de forma inadequada.
        </p>
          
        <p>
        Analisaremos métodos de inspeção de elementos HTML, identificando pontos vulneráveis para ataques XSS e aprendendo técnicas de proteção e práticas de segurança para evitar a execução de código malicioso. Também, abordaremos as melhores práticas de sanitização e validação de entradas de dados, utilizando bibliotecas especializadas e métodos seguros para garantir que os aplicativos web sejam mais resistentes a ataques de injeção e vulnerabilidades de segurança.
        </p>
      </div>
    </div>
  <div class="container-buttons">
      <a href="../conteudo_teorico/levels_selection.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Início 
          </div>
      </a> 
      <a href="./avanc_intro_refletido1.php" draggable = "false" style="color: white; text-decoration: none;">
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

