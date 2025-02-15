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
    width: 400px;
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
    <div class ="container-robot" style="transform: translate(50vw, 0%)">
        <div class="robot-speech ">
            <p class="writer" id="balloon-text">
            Além do ataque anterior, que tal eu te apresentar o ataque de redirecionamento?          
        </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">

        <p>Muitas vezes, também, em um ataque XSS pode acontecer o que chamamos de redirecionamento. Isto ocorre quando ao invés de um pop-up o atacante tem o objetivo de redirecionar o usuário para uma página maliciosa. Por exemplo, ao inserir um script como “&lt;script&gt;window.open("./redirecionamento_ref.html", "_self")&lt;/script&gt;” no campo de busca, o usuário é redirecionado para um site externo, potencialmente perigoso.
        </p>

        <p>É importante destacar que essas páginas maliciosas podem representar uma séria ameaça aos usuários, tendo em vista que podem roubar informações sensíveis, como credenciais de login, números de cartão de crédito e dados pessoais, utilizando técnicas de phishing sofisticadas. Além disso, é comum que contenham um malware que é automaticamente baixado e instalado no dispositivo do usuário, comprometendo gravemente a sua segurança e a privacidade. 
        </p>

        <p>Portanto, ao testar a vulnerabilidade no ambiente virtual do emulador, é importante verificar tanto o comportamento refletido do script quanto possíveis redirecionamentos para garantir uma análise completa das possíveis ameaças XSS.
        </p>


    </div>
    

  <div class="container-buttons" style="margin-top: 5vh;">
    <a href="../laboratorio/laboratory.php?atividade=ref1" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar 
        </div>
    </a> <!-- Colocar próxima página-->
    <a href="./lab2-refletido2.php"  draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-next">
        Prosseguir&gt;&gt;
        </div>
    </a> <!-- Colocar próxima página-->
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

