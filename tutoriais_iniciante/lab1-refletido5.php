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
    min-width: 490px;
    width: 28%;
}
.robot-speech::after {
    top: -18px;
    right: 100px;
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

.writer{
    text-align:justify;
}
.container-buttons{
    margin-top: 8vw;
}

#robot-img{
    width: 200px;
    height: 200px;
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/tutorial/refletido1-pagina5.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(38vw, -7vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Observe que o ataque nos redirecionou. <BR>
            E ao copiar o URL “http://127.0.0.1/laboratorio/laboratory.php?produto=&lt;script&gt;alert(&quot;XSSAttack&quot;)&lt;/script&gt;”, 
            gerada após realizar o ataque, e inseri-la em outra aba do navegador, será possível observar que o script funcionará.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
        <div class="container-buttons">
        <a href="./lab1-refletido4.php" draggable = "false" style="color: white; text-decoration: none; z-index:100;">
            <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar
            </div>
        </a>
        <a href="./lab1-refletido6.php" draggable = "false"  style="color: white; text-decoration: none; z-index:100;">
            <div class="btn btn-primary transition-button" id="transition-next">
            Prosseguir&gt;&gt;
            </div>
        </a>
        </div>
</div>
</div>


<script>


let caso = 'EMI';

  document.addEventListener("DOMContentLoaded", function() {
    let robotElements = document.getElementsByClassName("robot");
    if (robotElements.length > 0) {
        robotPosition(caso);
    }

    window.addEventListener('resize', function() {
        robotPosition(caso); 
    });

    let speechElements = document.getElementsByClassName("robot-speech");
    if (speechElements.length > 0) {
        let speech = speechElements[0];
        const resizeObserver = new ResizeObserver(entries => {
            for (let entry of entries) {
                if (entry.target === speech) {
                    robotPosition(caso); 
                }
            }
        });
        resizeObserver.observe(speech);
      }
    });



</script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
transformRobotForMenuState(-8, 3);
</script>
</body>
</html>

