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
    <link href="../css/interm_intro.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>XSS Refletido</title>
</head>

<body>
<div style="display: flex; width: 100%;">

  <?php include '../menu_lateral_interm.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
        <h3 class="title">O HTTP</h3>
        <p>
        As aplicações Web são o alvo dos ataques XSS. Para entender como tais ataques são implementados e como conseguem explorar vulnerabilidades de páginas Web, é preciso conhecer o funcionamento do HyperText Transfer Protocol (HTTP).        </p>
        <p>
        O HTTP é um protocolo de comunicação usado pelas aplicações Web desde 1990. O HTTP é executado em dois programas, um cliente e outro servidor, e funciona baseado em dois tipos de mensagens: requisição e resposta. Os dois programas conversam entre si por meio da troca das mensagens de requisição e resposta. O HTTP define a estrutura dessas duas mensagens e o modo como o cliente e o servidor as trocam. A figura abaixo ilustra um exemplo de funcionamento da troca de mensagens de requisição e resposta entre um cliente e um servidor.
        </p>
      </div>
    </div>

    <div class="image-container">
      <img src="../img/teorico/intermediario-refletido-pagina1.png">
    </div>

      <div class="central-text theoric-content" id="second-text">
        <p>
        Para esclarecer, um cliente HTTP é um programa que estabelece conexões com a finalidade de enviar requisições. Os navegadores (browsers), como Google Chrome, Mozilla Firefox e Microsoft Edge, são exemplos de clientes HTTP. Um servidor HTTP também é um programa que, nesse caso, aceita conexões dos clientes para servir as requisições enviando respostas para os clientes. O Apache e o Microsoft Internet Information Server (IIS) são exemplos de servidores HTTP.
        </p>
      </div>  

    <div class ="container-robot">
        <div class="robot-speech">
            <p class="writer">
            Para entender um pouco mais sobre requisição e resposta, vamos para a próxima página?
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
            <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
  <div class="container-buttons">
      <a href="../intermediario/intro_interm.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Início 
          </div>
      </a> 
      <a href="./interm_intro_refletido2.php"  draggable = "false" style="color: white; text-decoration: none;">
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

