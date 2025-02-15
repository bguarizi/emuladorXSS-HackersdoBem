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

    <title>Votação XSS Armazenado</title>
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
.image-container img{
    width: 85%;
    height: auto;
}
.robot-speech {
    min-width: 440px;
    max-width: 440px;
}
@media (min-width: 2200px){
    .robot-speech {
        min-width: 450px;
        max-width: 450px;
    }
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
                <img src="../img/tutorial/intermediario-armazenado1-pagina2.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(35vw, -8vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            O XSS Armazenado, como o próprio nome diz, explora entradas em que há o armazenamento de informações. Dessa forma, campos de entrada em que há persistência de informações, como comentários, são indicativos desse tipo de ataque.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
    <div class="container-buttons" style="margin-top: 7vw;">
    <button class="btn btn-primary transition-button" id="transition-back" style="color: white; text-decoration: none;" onclick="window.location.href = 'lab1-armazenado1.php';">
                &lt;&lt;Retornar 
            </button>
        <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="window.location.href = 'lab1-armazenado3.php';">
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
transformRobotForMenuState(-7, 3);
</script>
</body>
</html>

