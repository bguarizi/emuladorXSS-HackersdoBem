<?php include './php/calculateScore_2.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = './js/trail_interm.js'></script>
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
            background-image: url('./images/trail/Background2_interm.png');
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
var calculatedStep = <?php echo $calculatedScoreInterm['score']; ?> / 10;
const progressData = <?php echo $progressJson; ?>;
updateLevelPhases(progressData);
</script>
    <div class="top-bar" id="topBar">
        <div class = "total-score"> 
            <?php echo "<div class='progress-bar bg-success' style='width:".$calculatedPercentageInterm."%'>" ?>
                <div class="progress-fill">
                </div>
            </div>
            <div class="score"> <?php echo $calculatedPercentageInterm; ?>%</div>
        </div>

        <div class="title">Nível Intermediário</div>
        
        <div class="container-buttons">
        <img src="images\trail\Buttons\home.png" class="home-button" onclick="window.history.back()" draggable="false"></div>
        </div>
    </div>

    <div class="container" id="trail-container">
        <img src="images/trail/Background_interm.png" draggable="false" class="interactive-background" alt="Background Image" id="base-image" style="heigth:10%">

    <!-- XSS Refletido -->
    <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Laboratório Votação" id="button10" onclick="redirecttoPage('level10')">
    <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Laboratório Cookies" id="button11" onclick="redirecttoPage('level11')">
    <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Quiz" id="button12" onclick="redirecttoPage('level12')">

    <!-- XSS Armazenado -->
    <img src="" class="buttons" draggable="false" title="XSS Armazenado" data-content="Laboratório Votação" id="button13" onclick="redirecttoPage('level13')">
    <img src="" class="buttons" draggable="false" title="XSS Armazenado" data-content="Laboratório Cookies" id="button14" onclick="redirecttoPage('level14')">
    <img src="" class="buttons" draggable="false" title="XSS Armazenado" data-content="Quiz" id="button15" onclick="redirecttoPage('level15')">

    <!-- XSS Baseado em DOM -->
    <img src="" class="buttons" draggable="false" title="XSS Baseado em DOM" data-content="Laboratório Votação" id="button16" onclick="redirecttoPage('level16')">
    <img src="" class="buttons" draggable="false" title="XSS Baseado em DOM" data-content="Quiz" id="button17" onclick="redirecttoPage('level17')">

    <!-- XSS Sanitizado -->
    <img src="" class="buttons" draggable="false" title="XSS Sanitizado" data-content="Laboratório Votação" id="button18" onclick="redirecttoPage('level18')">
    <img src="" class="buttons" draggable="false" title="XSS Sanitizado" data-content="Laboratório Votação DOM" id="button19" onclick="redirecttoPage('level19')">
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


