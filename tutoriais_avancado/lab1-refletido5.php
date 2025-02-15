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

    <title>Tutorial XSS Refletido</title>
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
    
    <?php include '../menu_lateral_avanc.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/tutorial/avancado-refletido1-pagina5.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(37vw, -8.5vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Conforme pode ser observado ao clicar (1) no inspetor e passar o mouse (2) sobre Resultados encontrados para '' o script (3) 
            pode ser visto injetado no HTML da página. Sabendo disso, conseguimos estar ainda mais alertas a estes ataques!
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>

        <div class="container-buttons" draggable="false">
        <a href="./lab1-refletido4.php" class="btn btn-primary transition-button" draggable="false" id="transition-back">
        &lt;&lt;Retornar  
    </a> 
    <a href="./lab1-refletido6.php" class="btn btn-primary transition-button" draggable="false" id="transition-next">
        Prosseguir&gt;&gt;
    </a> 
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
transformRobotForMenuState(-7, 0);
</script>
</body>
</html>

