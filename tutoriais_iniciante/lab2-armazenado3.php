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

    <title>Tutorial XSS Armazenado</title>
</head>

<style>

.image-container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 12vw;
    align-self: center;
}

.robot-speech {
    min-width:600px;
    max-width: 600px;
}

.robot-speech::after{
  bottom: -10px; 
  left: -10px; 
  transform: rotate(-110deg); 
}


.container-robot {
    padding: 0;
    display: block;
    margin-top: 10px;
    z-index: 10;
    max-height: 10px;
    width: 25vw; 
    margin-right: 10px;

}



.container-buttons{
    margin-top: 7vw;
}

.code{
    text-align:left;
    padding-left: 90px;
    margin-top: 110px;
}



</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/tutorial/armazenado2-pagina3.png" alt="">
            </div>
    
    <div class ="container-robot" style="transform: translate(7vw, -60.5vw) scale(1);">
        <div class="robot-speech ">
            <p class="writer central-text" id="balloon-text">
            Como consequência, fomos redirecionados. No entanto, pelo ataque estar armazenado no servidor, toda vez que um usuário acessar esta página, ele será redirecionado automaticamente. Agora, explore este ataque em nosso laboratório!
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>

  <div class="code">

    <p>Copie o código abaixo e cole-o na barra de comentários do produto que você selecionar na próxima página.</p>

    <div id="codeBlock">
    <code>&lt;script&gt;window.open("./redirecionamento_arm.html", "_self")&lt;/script&gt;</code>
    </div>
    <button class="copyButton" id="copyButton">Copiar Código</button>
    <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>

    </div>

  <div class="container-buttons" style="margin-top: 5vh;">
    <a href="lab2-armazenado2.php" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar 
        </div>
    </a> 
    <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="finishTask(taskNo, redirPath)">
            Laboratório&gt;&gt;
    </button>
  </div>
</div>
</div>
<script>
var taskNo = 5;
var redirPath = "../laboratorio/laboratory.php?atividade=arm2";

let caso = 'DS';

  document.addEventListener("DOMContentLoaded", function() {
    let robotElements = document.getElementsByClassName("robot");
    if (robotElements.length > 0) {
        robotPosition(caso);
    }

    window.addEventListener('resize', function() {
        robotPosition(caso); 
    });

    let speechElements = document.getElementsByClassName("robot-speech");
    if (speechElements.length > 0) {
        let speech = speechElements[0];
        const resizeObserver = new ResizeObserver(entries => {
            for (let entry of entries) {
                if (entry.target === speech) {
                    robotPosition(caso); 
                }
            }
        });
        resizeObserver.observe(speech);
      }
    });



</script>
<script src="../js/copy_button.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(0, 9);
</script>
</body>
</html>

