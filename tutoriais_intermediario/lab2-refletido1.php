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
.image-container {
    margin-left: 0px;
    padding-left: 10px;
    padding-top: 5px;
}
.writer{
    padding-left:10px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.image-container img{
    width: 90%;
    height: auto;
}
.robot-speech {
    min-width: 420px;
    max-width: 420px;
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

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/tutorial/intermediario-refletido2-pagina1.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(36vw, -9.5vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Por meio do XSS Refletido, também é possível explorar entradas para o roubo de cookies dentro de uma página web. Por isso, podemos explorar campos que são capazes de refletir respostas HTTP, como em “Inserir CEP”.        
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
    <div class="container-buttons" style="margin-top: 5vw;">
            <button class="btn btn-primary transition-button" id="transition-back" style="color: white; text-decoration: none;" onclick="window.location.href = '../laboratorio/voting_lab.php?atividade=ref_vote';">
                &lt;&lt;Retornar <!-- Para onde retornar? -->
            </button>
        <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="window.location.href = 'lab2-refletido2.php';">
                Prosseguir&gt;&gt;
            </button>
    </div>
</div>
</div>


<script>
let caso = "EIA";
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(-7, 1);
</script>
</body>
</html>

