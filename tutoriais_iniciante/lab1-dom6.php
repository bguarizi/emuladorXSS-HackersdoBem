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

    <title>Tutorial XSS DOM</title>
</head>

<style>
.image-container {
    margin-left: 20vw;
    margin-top: 0vw;
    transform: scale(1.06);
}
.robot-speech {
    width: 450px;
    transform: translateX(-40px);
}

.robot-speech::after {
    top: -20px;
    left: 60px;
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
.writer{
    padding-left: 15px;
    padding-right: 15px;
}
</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content">
            <div class="image-container">
            <img src="../img/tutorial/dom1-pagina6.png" alt="">
            </div>
    
    <div class ="container-robot" style="transform: translate(5vw, -7vw);">
        <div class="robot-speech">
            <p class="writer central-text" id="balloon-text">
            Ataque executado! E, vemos que, adicionando o fragmento de uma URL maliciosa conseguimos processar um script na página vulnerável.               </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
    <div class="container-buttons">
    <a href="./lab1-dom5.php" draggable="false" style="color: white; text-decoration: none;  z-index:100;">
        <div class="btn btn-primary transition-button" id="transition-back">
        &lt;&lt;Retornar
        </div>
    </a>
    <a href="./lab1-dom7.php" draggable="false" style="color: white; text-decoration: none;  z-index:100;">
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
positionRobotForMenuState();
</script>
</body>
</html>

