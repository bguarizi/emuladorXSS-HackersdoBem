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

body {
    overflow-x: hidden;
}	
.image-container {
    margin-left: 0px;
    padding-left: 10px;
    padding-top: 5px;
    margin-left: auto;
    margin-right: auto;
    transform: translateX(15vw);
    width: 60%;
}
.image-container img{
    width: 100%;
    height: auto;
}
.robot-speech {
    min-width:350px;
    max-width: 350px;
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
#robot-img{
    width: 250px;
    height: 250px;
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
    <?php include '../menu_lateral_avanc.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
            <img src="../img/tutorial/avancado-refletido1-pagina6.png" alt="">
            </div>
    <div class ="container-robot" style="transform: translate(5vw, -35.5vw) scale(1);">
        <div class="robot-speech ">
            <p class="writer central-text" id="balloon-text">
            Agora, uma outra funcionalidade que pode ser vista no elemento inspecionar é a aba de cookies. Clique em (1) Armazenamento e observe que o meu (2) username está aparecendo.
Por isso, certifique-se de ter a opção de outra conta criada em sua plataforma para que possamos modificar este campo!
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>

        <div class="container-buttons">
    <a href="./lab1-refletido5.php" class="btn btn-primary transition-button" draggable="false" id="transition-back">
        &lt;&lt;Retornar  
    </a> 
    <a href="./lab1-refletido7.php" class="btn btn-primary transition-button" draggable="false" id="transition-next">
        Prosseguir&gt;&gt;
    </a> 
    </div>
    </div>
    </div>


<script>
let caso = 'DS';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
positionRobotForMenuState(-10,2);
</script>
</body>
</html>
