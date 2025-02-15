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

    <title>Tutorial XSS Sanitizado DOM</title>
</head>

<style>
body{
    overflow-x: hidden;
}
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

.robot-speech::after{
  bottom: -10px; 
  right: -10px; 
  transform: rotate(140deg); 
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
    transform: translateX(-90px);
}
.code{
    text-align:left;
    margin-top: 95px;
    margin-bottom: 50px;    
    word-break: break-all; 
}
</style>

<body>    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content">
        <div class="container-robot">
            <div class="robot-speech">
                <p class="writer" id="balloon-text">
                    Para finalizar, o próximo será o laboratório de votação com a sanitização do XSS DOM implementada e não se esqueça de prosseguir para o próximo nível. Até a próxima!
                </p> <!-- Correção: fechamento da tag <p> -->
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
        </div>
        <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">
            
            <div class="code" style="margin-top: 20px">
                <p>
                Copie o código abaixo e cole-o no final da URL na barra de busca do navegador e, em seguida, teste o sistema de votação.                
            </p>
                <div id="codeBlock">
                    <code>
                        &amp;query=query=document.querySelector(%27%23candidate2%20button%27).setAttribute(%27onclick%27,%20%27vote(2);%20setTimeout(function()%20{%20document.querySelector(%22%23candidate1%20button%22).click();%20},%20100);%27);
                    </code>
                </div>
                <button class="copyButton" id="copyButton">Copiar Código</button>
                <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width="20px;"></button>
            </div>
        </div>

        <div class="container-buttons" style="margin-top: 5vh;">
            <a href="../sanitizado/voting_lab.php?atividade=sanitizado" style="color: white; text-decoration: none;">
                <div class="btn btn-secondary transition-button" id="transition-back">
                    &lt;&lt;Retornar 
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
var taskNo = 19;
var redirPath = "../sanitizado/voting_lab_dom.php?atividade=sanitizado_dom";
let caso = 'ES';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/copy_button.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
positionRobotForMenuState();
</script>
</body>
</html>

