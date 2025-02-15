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
    <link href="../css/copy_button.css" rel="stylesheet">
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
    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">

    <p>Quando carregamos uma página que possui um payload de XSS refletido, o usuário acessa um URL que contém um parâmetro malicioso, e este é enviado através de uma requisição. O servidor Web recebe essa requisição e processa o parâmetro fornecido sem sanitizá-lo ou validá-lo adequadamente, fazendo com que esse parâmetro seja, então, refletido na resposta do servidor.

    </p>

    <p>Com isso, o servidor envia de volta uma página HTML que inclui o parâmetro malicioso na sua resposta. Esse conteúdo malicioso pode ser um script, assim como fizemos anteriormente.

    </p>

    <p>Dessa forma, o navegador interpreta e executa o script como se fosse parte legítima da página e, como o script malicioso é executado no contexto de segurança da página Web, ele possui acesso a qualquer dado acessível pela página, como cookies, sessão do usuário etc.

    </p>

    <p>Um atacante poderia enviar um link como esse que vimos para uma vítima e, dependendo da intenção do ataque, o script poderia realizar várias ações prejudiciais ao usuário.
    </p>

    <p>Copie o código abaixo e insira-o na barra de busca do laboratório na próxima página.</p>

    <div id="codeBlock">
    <code>&lt;script&gt;alert("XSSAttack")&lt;/script&gt;</code>
    </div>
    <button class="copyButton" id="copyButton">Copiar Código</button>
    <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>


    </div>
    <div class ="container-robot" style="transform: translate(50vw, 0%)">
        <div class="robot-speech ">
            <p class="writer" id="balloon-text">
            Agora é a sua vez! Conforme realizamos anteriormente, explore o ataque XSS Refletido em nosso Laboratório.         
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>

    <div class="container-buttons">
        <a href="./lab1-refletido5.php"  draggable = "false" draggable = "false" style="color: white; text-decoration: none;">
            <div class="btn btn-primary transition-button" id="transition-back">
                &lt;&lt;Retornar 
            </div>
        </a>
        <button class="btn btn-primary transition-button" draggable = "false" id="transition-next" style="color: white; text-decoration: none;" onclick="finishTask(taskNo, redirPath)">
            Laboratório&gt;&gt;
        </button>
    </div>
</div>
</div>
</div>


<script>
var taskNo = 1;
var redirPath = "../laboratorio/laboratory.php?atividade=ref1";
let caso = 'ES';
</script>
<script src ="../js/robotUpdate.js"></script>
<script src="../js/copy_button.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>
positionRobotForMenuState();
</script>
</body>
</html>

