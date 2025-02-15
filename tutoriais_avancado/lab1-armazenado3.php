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
    margin-left: 30%;
    margin-top: 0vw ;
    width: 60%;
}
.robot-speech {
    min-width: 380px;
    max-width: 380px;
}

.robot-speech::after {
    top: -20px;
    right: 150px;
    transform: rotateY(180deg);;
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

#balloon-text{
    text-align:justify;
}

.container-buttons{
    margin-top: 5vw;
}
#robot-img{
    width: 230px;
    height: 230px;
    transform: translate(120px, -20px);
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_avanc.php'; ?>
    <div class="content" style="margin: 0px">

    
    <div class ="container-robot" style="transform: translate(0vw, 15vw) scale(1.3);">
        <div class="robot-speech"  style="transform: scale(1.1)">
            <p class="writer central-text" id="balloon-text">
            Após explorar o campo vulnerável, agora, como se fôssemos um usuário, iremos digitar o número do nosso cartão para realizar o pagamento na página.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
        <div class="image-container">
            <img src="../img/tutorial/avancado-armazenado1-pagina3.png">
        </div>
  <div class="container-buttons" style="margin-top: 5vh;">
    <a href="lab1-armazenado2.php" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar 
        </div>
    </a> 
    <a href="lab1-armazenado4.php" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-next">
            Prosseguir&gt;&gt; 
        </div>
    </a> 
  </div>
</div>
</div>


<script>


let caso = 'MI';


</script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotUpdate.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(0, 0);
</script>
</body>
</html>

