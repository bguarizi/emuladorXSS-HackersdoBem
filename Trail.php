<?php include './php/calculateScore_2.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = './js/trail.js'></script>
    <script src='./js/jquery.js'></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link href="./css/trail.css" rel="stylesheet">
    <script src="./js/bootstrap.min4.5.js"></script>
    <title>Trilha de Progresso</title>

    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        body{
            align-items: center;
            background-image: url('./images/trail/Background-small.png');
            background-repeat: repeat-y; 
            background-position: center;
            background-size: contain;
            justify-content: center; 
            align-items: center; 
            overflow-y: visible;
        }
 

    </style>
</head>
<body>
<script>
var calculatedStep = <?php echo $calculatedScore; ?> /10;
const progressData = <?php echo $progressJson; ?>;
updateLevelPhases(progressData);
</script>
    <div class="top-bar" id="topBar">
        <div class = "total-score"> 
            <?php echo "<div class='progress-bar bg-success' style='width:".$calculatedPercentage."%'>" ?>
                <div class="progress-fill">
                </div>
            </div>
            <div class="score"> <?php echo $calculatedPercentage; ?>%</div>
        </div>

        <div class="title">Nível Iniciante</div>
        
        <div class="container-buttons">
        <img src="images\trail\Buttons\home.png" class="home-button" onclick="window.history.back()" draggable="false"></div>
        </div>
    </div>

    <div class="container" id="trail-container">
        <img src="images/trail/Background.png" draggable="false" class="interactive-background" alt="Background Image" id="base-image" style="heigth:10%">
        <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Laboratório 1" id="button1" onclick="redirecttoPage('level1')">

        <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Laboratório 2" id="button2" onclick="redirecttoPage('level2')">

        <img src=""  class="buttons"  draggable="false" title="XSS Refletido" data-content="Quiz" id="button3" onclick="redirecttoPage('level3')">

        <img src=""  class="buttons"  draggable="false" title="XSS Armazenado" data-content="Laboratório 1" id="button4" onclick="redirecttoPage('level4')">

        <img src=""  class="buttons" draggable="false" title="XSS Armazenado" data-content="Laboratório 2" id="button5" onclick="redirecttoPage('level5')">

        <img src=""  class="buttons" draggable="false" title="XSS Armazenado" data-content="Quiz" id="button6" onclick="redirecttoPage('level6')">

        <img src="" class="buttons" draggable="false" title="XSS Baseado em DOM" data-content="Laboratório 1" id="button7" onclick="redirecttoPage('level7')">

        <img src=""  class="buttons" draggable="false" title="XSS Baseado em DOM" data-content="Laboratório 2" id="button8" onclick="redirecttoPage('level8')">

        <img src=""  class="buttons" draggable="false" title="XSS Baseado em DOM" data-content="Quiz" id="button9" onclick="redirecttoPage('level9')">

        <img src="img/robot.png" id="robot">

        </div>

        <!-- <div id="accessDeniedPopup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <p>Acesso negado! Complete os níveis anteriores para desbloquear esta fase.</p>
                <img src="img/robot.png" draggable="false" class="img-fluid mt-3" alt="Imagem" style="max-width: 100px;">
            </div>
        </div> -->

        <script> 
$('.buttons').popover({
  trigger: 'hover'
})
	</script>
</body>
</html>


