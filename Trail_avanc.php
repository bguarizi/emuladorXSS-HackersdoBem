<?php include './php/calculateScore_2.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = './js/trail_avanc.js'></script>
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
            background-image: url('./images/trail/Background2_avanc.png');
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
var calculatedStep = <?php echo $calculatedScoreAvanc['score']; ?> / 10;
const progressData = <?php echo $progressJson; ?>;
updateLevelPhases(progressData);
</script>
    <div class="top-bar" id="topBar">
        <div class = "total-score"> 
            <?php echo "<div class='progress-bar bg-success' style='width:".$calculatedPercentageAvanc."%'>" ?>
                <div class="progress-fill">
                </div>
            </div>
            <div class="score"> <?php echo $calculatedPercentageAvanc; ?>%</div>
        </div>

        <div class="title">Nível Avançado</div>
        
        <div class="container-buttons">
        <img src="images\trail\Buttons\home.png" class="home-button" onclick="window.history.back()" draggable="false"></div>
        </div>
    </div>

    <div class="container" id="trail-container">
        <img src="images/trail/Background_avanc.png" draggable="false" class="interactive-background" alt="Background Image" id="base-image" style="heigth:10%">

    <!-- XSS Refletido -->
    <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Laboratório Inspeção" id="button20" onclick="redirecttoPage('level20')">
    <img src="" class="buttons" draggable="false" title="XSS Refletido" data-content="Quiz" id="button21" onclick="redirecttoPage('level21')">

    <!-- XSS Armazenado -->
    <img src="" class="buttons" draggable="false" title="XSS Armazenado" data-content="Laboratório Keylogger" id="button22" onclick="redirecttoPage('level22')">
    <img src="" class="buttons" draggable="false" title="XSS Armazenado" data-content="Quiz" id="button23" onclick="redirecttoPage('level23')">

    <!-- XSS Sanitizado -->
    <img src="" class="buttons" draggable="false" title="XSS Sanitizado" data-content="Quiz" id="button24" onclick="redirecttoPage('level24')">
    <img src="" class="buttons" draggable="false" title="XSS Sanitizado" data-content="Laboratório Sanitização" id="button25" onclick="redirecttoPage('level25')">
    <img src="img/robot.png" id="robot">

        </div>

        <script> 
$('.buttons').popover({
  trigger: 'hover'
})
	</script>
</body>
</html>


