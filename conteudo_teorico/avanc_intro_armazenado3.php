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
    <title>Linguagens de Programação</title>
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
    transform: translate(12vw, 50px);
  }
.robot-speech::after {
    content: '';
    height: 25px;
    position: absolute;
    z-index: 1;
    border-bottom: 30px solid #fff; 
    border-right: 20px solid transparent; 
    top: 70px; 
    right: -12px; 
    transform: rotate(-270deg); 
}

.robot-speech {
    max-width: 30vw;
    min-height: 110px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-18vw) translateY(-200px); 
    padding-top:20px;
    padding-bottom:20px;
}


  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-20vw) translateY(-200px); 
      margin-bottom: 90px;
  }
}
  
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-17vw) translateY(-200px); 
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
      <h3 class="title">O PHP no lado Servidor ou back-end</h3>
      <div id="first-text">
        <p>
        O PHP (Hypertext Preprocessor) é uma linguagem interpretada usada, particularmente, para o desenvolvimento web do lado servidor ou back-end. O motivo aparecerá logo a seguir. Assim como o JavaScript, código PHP pode ser embutido dentro de código HTML. O que diferencia o PHP do JavaScript é que o código PHP é executado no servidor web e não no navegador. O servidor gera a página HTML  a partir do código PHP e a envia para o navegador. O navegador, então, recebe os resultados da execução do código PHP, sem saber qual o código fonte originou tais resultados.
        </P>
        <p>
        O código PHP é delimitado pelas tags de início e fim &lt;?php e ?&gt; que permitem entrar e sair do modo PHP. A partir daí,  o código é interpretado pelo interpretador PHP. Com PHP, é possível coletar dados de formulários, gerar páginas com conteúdo dinâmico ou enviar e receber cookies. 
        </p>
      </div>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Neste módulo, exploramos o funcionamento do JavaScript e do PHP no contexto de segurança. Agora, vamos avançar e compreender o ataque de Keylogger, analisando como ele opera e, com base no que aprendemos, reforçar como esse tipo de ameaça pode impactar o back-end de uma aplicação.
              </p>
          </div>
    </div>
  <div class="container-buttons" style= "margin-top:0px">
        
      <a href="./avanc_intro_refletido3.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../tutoriais_avancado/lab1-armazenado1.php"  draggable = "false" style="color: white; text-decoration: none;">
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

