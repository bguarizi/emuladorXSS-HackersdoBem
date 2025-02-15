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

    <title>Tutorial XSS Refletido</title>
</head>

<style>
body{
    overflow-x: hidden;
}
.image-container {
    margin-left: 5px;
}
.robot-speech {
    min-width: 450px;
    width: 28%;
}
.robot-speech::after {
    top: -18px;
    right: 100px;
    transform: rotate(45deg);
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
    margin-top: 8vw;
}

#balloon-text{
    text-align:justify;
}

#robot-img{
    width: 200px;
    height: 200px;
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
                <img src="../img/tutorial/refletido2-pagina3.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(39vw, -8vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            A forma de ataque ocorre de forma semelhante, no entanto, é importante que você conheça essas diferentes maneiras para garantir que seu ambiente esteja protegido.<br>
            Agora é a sua vez! Conforme realizamos anteriormente, explore o ataque XSS Refletido em nosso Laboratório.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>

        
  </div>

    <div class="code">

    <p>Copie o código abaixo e insira-o na barra de busca do laboratório na próxima página.</p>

    <div id="codeBlock">
    <code>&lt;script&gt;window.open("./redirecionamento_ref.html", "_self")&lt;/script&gt;</code>
    </div>
    <button class="copyButton" id="copyButton">Copiar Código</button>
    <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>

    </div>

    <div class="container-buttons">

    <a href="./lab2-refletido2.php"  style="color: white; text-decoration: none; z-index:100;">
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
var taskNo = 2;
var redirPath = "../laboratorio/laboratory.php?atividade=ref2";
let caso = 'EMI';

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
transformRobotForMenuState(-6, 4);
</script>
</body>
</html>

