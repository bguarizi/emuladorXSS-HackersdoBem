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

    <title>Tutorial XSS Armazenado</title>
</head>

<style>

.image-container {
    margin-left: 5px;
}
.robot-speech {
    min-width: 350px;
    width: 28%;
}
.robot-speech::after{
    top: -10px; 
    right: -10px; 
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

#robot-img{
    width: 250px;
    height: 250px;
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/Pc1.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(37vw, -8.5vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Parabéns! Você concluiu mais uma etapa.  <br>Agora, entenderemos um pouco melhor como funciona o XSS Armazenado na prática e seus perigos. Vamos encarar?</p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
        <div class="container-buttons">
        <button class="btn btn-primary transition-button" id="transition-back" style="color: white; text-decoration: none;" onclick="window.location.href = '../conteudo_teorico/intro_armazenado2.php';">
            &lt;&lt;Retornar
        </button>
        <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="window.location.href = 'lab1-armazenado2.php';">
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
transformRobotForMenuState(-8, 2);
</script>
</body>
</html>

