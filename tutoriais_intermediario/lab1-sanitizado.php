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
    <link href="../css/tutorials_box.css" rel="stylesheet">
    <link href="../css/copy_button.css" rel="stylesheet">

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>

    <title>Tutorial XSS Sanitizado</title>
</head>

<style>

.image-container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 10vw;
    align-self: center;
}

.robot-speech {
    width: 470px;
    margin-left: auto;
    margin-right: auto;
    z-index: 10;
    transform: translateX(-90px);
}
.writer{
    padding-left:10px;
}
.robot-speech::after{
  bottom: 10px; 
  right: -15px; 
  transform: rotate(110deg); 
}

.container-robot {
    padding: 0;
    z-index: 10;
    height: 10vw;
    align-self: center;
}

.container-buttons{
    margin-top: 7vw;
}

.container{
        text-align: center;
    }
.robot{
    margin-left: -50px;
    margin-top: 20px;
    transform: translate(-90px, -30px);
}
.code{
    text-align:left;
    margin-top: 95px;
    margin-bottom: 50px;
}
</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content">
    <div class ="container-robot">
        <div class="robot-speech ">
            <p class="writer" id="balloon-text">
            Parabéns por chegar até aqui! Você explorou ataques mais avançados e identificou entradas vulneráveis a XSS. No próximo laboratório, terá a chance de ver como funciona a correção dessas vulnerabilidades com a sanitização. Relembre as entradas que estudou e veja o que acontece quando elas são tratadas. Aproveite a experiência!        </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">
    <p>
    Se você quiser aprender mais sobre como contornar a sanitização e explorar as formas de tratar vulnerabilidades XSS, continue para o nível avançado!
    </p>
    
    <div class="code" style="margin-top: 20px">
        <p>
        Copie o código abaixo e cole-o na barra de busca por comentários e na  barra de comentários na página a seguir, em seguida, teste a  funcionalidade de votos.
        </p>
        <div id="codeBlock">
        <code>
        &lt;script&gt;document.querySelector(&quot;#candidate2 button&quot;).setAttribute(&quot;onclick&quot;, &quot;vote(2); setTimeout(function() { document.querySelector(&#x27;#candidate1 button&#x27;).click(); }, 100);&quot;);&lt;/script&gt;
        </code>
        </div>
        <button class="copyButton" id="copyButton">Copiar Código</button>
        <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>
        </div>
        </div>

  <div class="container-buttons" style="margin-top: 5vh;">
        <a href="../conteudo_teorico/interm_intro_sanitizacao.php" style="color: white; text-decoration: none;">
            <div class="btn btn-secondary transition-button" id="transition-back">
                &lt;&lt;Retornar <!-- Para onde retornar? -->
            </div>
        </a>
        <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="finishTask(taskNo, redirPath)">
            Laboratório&gt;&gt;
        </button>
        </div>
        </div>
    </div>
</div>

<script>
var taskNo = 18;
var redirPath = "../sanitizado/voting_lab.php?atividade=sanitizado";
let caso = 'ES';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/copy_button.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
positionRobotForMenuState();
</script>
</body>
</html>

