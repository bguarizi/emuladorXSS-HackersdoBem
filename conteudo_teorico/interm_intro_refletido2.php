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

<style>
body{
  overflow-x: hidden;
}
.container-robot{
  margin-top: 10% auto 0;
  display:block;
  transform: translate(10%, -15%);
}
</style>

<body>
<div style="display: flex; width: 100%;">



  <?php include '../menu_lateral_interm.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
        <h3 class="title">Requisição e resposta HTTP</h3>
        <p>
        As imagens abaixo apresentam o formato das mensagens de requisição e resposta HTTP. Um cliente HTTP envia uma requisição para o servidor HTTP, como ilustrado a seguir, contendo em sua primeira linha: o método de requisição, o identificador URL e a versão do protocolo HTTP. Em seguida, são enviadas as linhas de cabeçalho, como modificadores da requisição e informações do cliente. Por fim, é enviado conteúdo no corpo da entidade, caso haja.         
        </p>
      </div>
    </div>
    <div class="image-container">
      <img src="../img/teorico/intermediario-refletido-pagina2-1.png">
    </div>
    <div class="central-text">

      <div id="second-text" style="margin-top:20px">
        <p>
        O servidor responde com uma resposta, conforme a figura abaixo, contendo sendo a primeira linha chamada de linha de estado, que informa a versão do protocolo HTTP usada e um código de sucesso ou de erro acompanhado de sua frase. Em seguida são enviadas as linhas de cabeçalho, que podem conter, por exemplo, informações do servidor. E, por fim, é enviado conteúdo, o objeto em si, no corpo da entidade, caso haja.
        </p>
      </div>
    </div>
    <div class="image-container">
      <img src="../img/teorico/intermediario-refletido-pagina2-2.png">
    </div>
    <div class ="container-robot">
        <div class="robot-speech">
            <p class="writer">
            Entender as requisições HTTP abre caminho para várias explorações maliciosas, como para a manipulação de sistemas ou roubo de dados sensíveis como veremos nos laboratórios a seguir!
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
            <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
  <div class="container-buttons">
      <a href="./interm_intro_refletido.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../tutoriais_intermediario/lab1-refletido1.php"  draggable = "false" style="color: white; text-decoration: none;">
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

