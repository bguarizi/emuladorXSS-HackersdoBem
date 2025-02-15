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
    margin-left: 20vw;
    margin-top: 0vw;
    transform: scale(0.9);
}
.robot-speech {
    width: 400px;
}

.robot-speech::after {
    top: -20px;
    left: 40px;
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
    margin-top: 5vw;
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
                <img src="../img/tutorial/armazenado2-pagina2.png">
            </div>
    
    <div class ="container-robot" style="transform: translate(5vw, -10vw) scale(1);">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Para o redirecionamento, irei inserir o script “&lt;script&gt;window.open("./redirecionamento_arm.html", "_self")&lt;/script&gt;” deixando-o como comentário.
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
    <div class="container-buttons">
    <a href="./lab2-armazenado1.php" draggable="false" style="color: white; text-decoration: none;  z-index:100;">
        <div class="btn btn-primary transition-button" id="transition-back">
        &lt;&lt;Retornar
        </div>
    </a>
    <a href="./lab2-armazenado3.php" draggable="false" style="color: white; text-decoration: none;  z-index:100;">
        <div class="btn btn-primary transition-button" id="transition-next">
        Prosseguir&gt;&gt;
        </div>
    </a>
    </div>
</div>
</div>


<script>


let caso = 'DI';

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
transformRobotForMenuState(-2, 1.5);
</script>
</body>
</html>

