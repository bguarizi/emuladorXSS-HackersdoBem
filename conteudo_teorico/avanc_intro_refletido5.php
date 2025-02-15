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
  .container-robot {
    border-radius: 3px;
    width: 100%;
    padding: 0;
    display: block;
    margin: auto auto;
    transform: translate(10vw, 0px);
  }

.robot-speech::after {
      content: '';
      height: 25px;
      position: absolute;
      z-index: 1;
      top: 60px; 
      right: -17px; 
      transform: rotate(90deg); 
}

.robot-speech {
    max-width: 20vw;
    min-height: 100px;
    padding: 20px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-15vw) translateY(-190px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(50px, -10px);;
    }
    .robot-speech{
      max-width: 35vw;
      transform: translateX(-19vw) translateY(-190px); 
      margin-bottom: 90px;
  }
  }
  
  @media(min-width:1300px){
    .robot-speech{
      transform: translateX(-13vw) translateY(-190px); 
    }
}
  
   @media(min-width:2200px){
    .robot-speech{
      transform: translateX(-11.5vw) translateY(-190px); 
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
      <h3 class="title">Inspeção de Elementos</h3>
      <div id="first-text">
        <p>
        O elemento de inspeção fornecido pelo navegador é uma ferramenta que permite visualizar e manipular a aparência de uma página Web através de edições locais. Isto significa que ao realizar as modificações, somente a cópia da página apresentada pelo navegador do usuário é alterada e não a página original transmitida via HTTP pelo servidor Web. As modificações realizadas através do elemento de inspeção permitem realizar experimentos sobre os comportamentos dos elementos de HTML, CSS e JavaScript.
        </p>
    </div>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Você sabe como realizar a inspeção de elementos? Existem 3 opções como veremos a seguir!
              </p>
            </div>

      </div>
    <div class="central-text" style="transform: translateY(-80px)">
      <div id="second-text">
        <p>
        Através da ferramenta “Inspetor” é possível visualizar os elementos que compõem a página. No exemplo que será apresentado no tutorial, destaca-se o script utilizado para realizar o ataque XSS Refletido. Observa-se que, apesar de o script não estar sendo exibido na página em si, pode-se encontrá-lo ao se inspecionar o elemento da página utilizado para exibir ao usuário o conteúdo encontrado sobre a pesquisa realizada.          
        </p>
      </div>
    </div>
  <div class="container-buttons">
      <a href="./avanc_intro_refletido4.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../tutoriais_avancado/lab1-refletido1.php" draggable = "false" style="color: white; text-decoration: none;">
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

