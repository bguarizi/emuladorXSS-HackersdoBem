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
    margin-left: auto;
    margin-right: auto;
    margin-top: 10vw;
    align-self: center;
}

.robot-speech {
    min-width:750px;
    margin-left: auto;
    z-index: 10;
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


.container-buttons{
    margin-top: 7vw;
}

.robot img{
    width:220px;
    height:220px;
    transform: translate(-30px, -10px);
}
</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content" style="margin: 0px">
            <div class="image-container">
                <img src="../img/tutorial/refletido1-pagina2.png" alt="">
            </div>
    
    <div class ="container-robot" style="transform: translate(9vw, -58vw) scale(1);">
        <div class="robot-speech ">
            <p class="writer central-text" id="balloon-text">
            Esse é o nosso ambiente de laboratório! Esse local é destinado à praticarmos tudo o que você aprendeu.
            Tenha muita atenção aos próximos passos.  Primeiramente irei demonstrar como o XSS Refletido funciona e, posteriormente, você estará livre para testá-lo!
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>
  <div class="container-buttons" style="margin-top: 5vh;">
  <button class="btn btn-primary transition-button" id="transition-back" style="color: white; text-decoration: none;" onclick="window.location.href = 'lab1-refletido1.php';">
            &lt;&lt;Retornar 
        </button>
    <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="window.location.href = 'lab1-refletido3.php';">
            Prosseguir&gt;&gt;
        </button>
  </div>
</div>
</div>


<script>
let caso = 'DS';
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
transformRobotForMenuState(0, 8.5);
</script>
</body>
</html>

