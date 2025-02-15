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
body{
  overflow-x: hidden;
}
.image-container {
    margin-left: 3vw;
    margin-right: auto;
    margin-top: 12vw;
    align-self: center;
}

.robot-speech {
    width:450px;

}

.robot-speech::after{
  bottom: -10px; 
  right: -10px; 
  transform: rotate(140deg); 
}
.robot img{
    transform: translateY(20px);
}
.container-robot {
    padding: 0;
    display: block;
    margin-top: 10px;
    z-index: 10;
    max-height: 10px;
    width: 25vw; 
    margin-left: auto;
}
.container-buttons{
    margin-top: 7vw;
}


</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/tutorial/armazenado1-pagina4.png" alt="" style="transform: scale(1)">
            </div>
    
    <div class ="container-robot" style="transform: translate(-15vw, -56vw) scale(1);">
        <div class="robot-speech ">
            <p class="writer central-text" id="balloon-text">
            Acessando a visualização de um produto, vemos que há o campo de inserção de comentários que, 
            com o nosso olhar Hacker do Bem, poderia ser explorado.
            </p>
                </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
  <div class="container-buttons" style="margin-top: 5vh;">
    <a href="lab1-armazenado3.php" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar 
        </div>
    </a> 
    <a href="lab1-armazenado5.php" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-next">
            Prosseguir&gt;&gt; 
        </div>
    </a> 
  </div>
</div>
</div>
<script>


let caso = 'ES';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(10, 13);
</script>
</body>
</html>

