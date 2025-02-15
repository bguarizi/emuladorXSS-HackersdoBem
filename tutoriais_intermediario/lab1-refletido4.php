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

    <title>Votação XSS Refletido</title>
</head>

<style>

body {
    overflow-x: hidden;
}	
.image-container {
    margin-left: 0px;
    padding-left: 15px;
    padding-top: 5px;
}
.image-container img{
    width: 85%;
    height: auto;
}
.robot-speech {
    min-width: 490px;
    max-width: 490px;
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
    margin-top: 95px;
    margin-bottom: 50px;
    margin-right: 95px;

}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
            <img src="../img/tutorial/intermediario-refletido1-pagina4.png" alt="">
            </div>
    
    <div class ="container-robot" style="transform: translate(34vw, -9vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Após inserir um script para alterar os dados da votação, é possível clicar no botão "votar" e manipular os resultados. Agora é a sua vez! Insira o script e veja como ocorre esse ataque.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img" >
        </div>
  </div>
        <div class="code">
        <div id="codeBlock">
        <code>

        &lt;script&gt;document.querySelector('#candidate2 button').setAttribute('onclick', 'vote(2); setTimeout(function() { document.querySelector("#candidate1 button").click(); }, 100);');&lt;/script&gt;
        </div>
        <button class="copyButton" id="copyButton">Copiar Código</button>
        <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>
        </div>

        <div class="container-buttons">
        <a href="./lab1-refletido3.php"  style="color: white; text-decoration: none; z-index:100;">
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
</div>

<script>
    
var taskNo = 10;
var redirPath = "../laboratorio/voting_lab.php?atividade=ref_vote";
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
