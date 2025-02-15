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
    margin-left: auto;
    margin-right: auto;
    margin-top: 10vw;
    align-self: center;
}

.robot-speech {
    width: 270px;
    margin-left: auto;
    margin-right: auto;
    z-index: 10;
}

.robot-speech::after{
  bottom: -10px; 
  right: -10px; 
  transform: rotate(140deg); 
}


.container-robot {
    padding: 0;
    z-index: 10;
    height: 10vw;
    align-self: center;
}


.container-buttons{
    margin-top: 7vw;
}

.container{
        text-align: center;
    }
.robot{
    margin-left: -50px;
    margin-top: 20px;
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content">
    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">

        <p>Como visto no módulo de XSS Refletido, é possível, também, realizar o ataque de redirecionamento. Ao inserir um script como “&lt;script&gt;window.open("./redirecionamento_arm.html", "_self")&lt;/script&gt;” no campo vulnerável ao XSS Armazenado, ele será executado. 
        </p>

        <p>Ao executar este ataque neste módulo, será possível observar que, no caso do XSS armazenado, sempre que a página for carregada, os ataque persistirá, redirecionando todos os usuários que acessarem a página comprometida.
        </p>

        <p>Reconhecer e prevenir ataques de redirecionamento são ações cruciais para proteger informações pessoais, evitar a disseminação de malware, manter a confiança dos usuários e garantir conformidade com normas de segurança.
        </p>


    </div>
    <div class ="container-robot" style="transform: translate(50vw, 0%)">
        <div class="robot-speech ">
            <p class="writer" id="balloon-text">
            Vamos revisitar o ataque de redirecionamento?        
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>

  <div class="container-buttons" style="margin-top: 5vh;">
    <a href="../laboratorio/laboratory.php?atividade=arm1" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar 
        </div>
    </a> 
    <a href="lab2-armazenado2.php"  draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-next">
        Prosseguir&gt;&gt;
        </div>
    </a>
  </div>
</div>
</div>


<script>
let caso = 'ES';

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

