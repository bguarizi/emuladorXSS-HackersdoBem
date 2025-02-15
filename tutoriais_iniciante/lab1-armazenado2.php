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
    width: 150px;
    margin-left: auto;
    margin-right: auto;
    z-index: 10;
    transform: translateY(-80px);

}

.robot-speech::after{
  bottom: -10px; 
  left: -10px; 
  transform: rotate(-115deg); 
}
.robot img{
    transform: translateY(-80px);
}

.container-robot {
    padding: 0;
    z-index: 10;
    height: 10vw;
    align-self: center;
}

.container-buttons{
    margin-top: 0vw;
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

    <p>Conforme aprendido, o ataque XSS Armazenado, também conhecido como persistente, acontece quando o script malicioso é armazenado no servidor e posteriormente exibido para outros usuários que acessam a página vulnerável. Como o script é salvo no servidor, ele pode afetar qualquer usuário que visualize a página com os dados maliciosos. Devido ao seu potencial para infectar múltiplos usuários ao mesmo tempo, o XSS Armazenado é considerado mais grave que o ataque Refletido.
    </p>

    <p>Tanto no XSS Refletido quanto no XSS Armazenado, os mesmos tipos de scripts maliciosos podem ser usados. A principal diferença entre os dois ataques não está na natureza dos scripts em si, mas na forma como eles são entregues e executados.
    </p>

    <p>Da mesma maneira como foi realizado no tutorial do XSS Refletido, neste tutorial, é sugerido usar um script similar ao que foi aprendido anteriormente: "&lt;script&gt;alert("XSSAttack")&lt;/script&gt;".
    </p>

    <p>Será possível observar que qualquer usuário que acesse a página contendo o script armazenado terá o script executado no seu navegador automaticamente, sem que haja a necessidade de que o usuário interaja com um link ou formulário específico.
    </p>

    </div>
    <div class ="container-robot" style="transform: translate(50vw, 0%)">
        <div class="robot-speech ">
            <p class="writer" id="balloon-text">
            Vamos ver na prática?            
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>

  <div class="container-buttons" style="margin-top: 5vh;">
    <a href="./lab1-armazenado1.php" draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-back">
            &lt;&lt;Retornar 
        </div>
    </a> 
    <a href="lab1-armazenado3.php"  draggable = "false" style="color: white; text-decoration: none;">
        <div class="btn btn-primary transition-button" id="transition-next">
        Prosseguir&gt;&gt;
        </div>
    </a> 
  </div>
</div>
</div>


<script>
let caso = 'DS';

</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
positionRobotForMenuState();
</script>
</body>
</html>

