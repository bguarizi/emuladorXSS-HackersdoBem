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
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>XSS Armazenado</title>
</head>

<style>

.image-container {
    width: 45%;

    margin-bottom:20px;
}

.robot-speech {
  max-width: 30%;
  margin-left: auto; 
  transform: translateX(-160%) translateY(110px); 
  z-index:10;
  text-align: left;
  overflow-wrap: break-word;
}
.container-robot{
  padding: 0;
  transform: translateY(-20%);
  display:block;
  margin:auto auto;
  margin-top:10px;
}
.robot-speech::after{
  bottom: -10px; 
  right: -10px; 
  transform: rotate(135deg); 
}

.robot{
  transform: translateX(30%);  
}

@media(max-width: 1100px){
  .robot-speech{
    transform: translateX(-110%) translateY(110px); 
    max-width: 40%;
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
        <h3 class="title" >Quais as consequências de um ataque XSS Armazenado?</h3>
        <p>Este tipo de ataque pode não só ter o objetivo de prejudicar o usuário legítimo que está navegando pela página Web, mas também, de alguma forma, prejudicar o servidor Web e as aplicações que estão mantendo a determinada página ativa.
        </p>
        
      </div>

    </div>

    <div class="image-container">
      <img src="../img/teorico/stored-image2.png" id="image-central">
    </div>

      <div class="central-text" id="second-text">
        <p>
        Além de o código malicioso inserido na página poder ser utilizado para tentar coletar informações dos usuários legítimos que a estão acessando ou redirecionar estes usuários para outra página Web criada pelo atacante, também é possível que o código tenha como objetivo coletar informações armazenadas no servidor que hospeda a página, como informações de usuários cadastrados na página ou informações de login e senha para acesso administrativo ao servidor.
        </p>
      </div>  

    <div class ="container-robot">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Em nosso laboratório, veremos na prática como aplicar o ataque XSS Armazenado. <br> Vamos nessa?            
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
  <div class="container-buttons">
        <a href="./intro_armazenado.php" class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar  
        </a>
        <a href="../tutoriais_iniciante/lab1-armazenado1.php" class="btn btn-primary transition-button" id="transition-next">
            Tutorial&gt;&gt;
        </a> 
  </div>
  </div>
</div>
</div>

<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
</body>
</html>

