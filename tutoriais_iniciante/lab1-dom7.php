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

    <title>Tutorial XSS DOM</title>
</head>

<style>


.robot-speech {
    width: 460px;
    margin-left: auto;
    margin-right: auto;
    z-index: 10;
    transform: translate(-40px, -40px);
}

.robot-speech::after{
  top: 40px; 
  right: -13px; 
  transform: rotate(100deg); 
}


.container-robot {
    padding: 0;
    z-index: 10;
    height: 10vw;
    align-self: center;
}


.container-buttons{
    margin-top: 2vw;
}

.container{
        text-align: center;
    }
.robot{
    margin-left: -50px;
    margin-top: 20px;
}
.writer{
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 25px;
    padding-bottom: 25px;
}

.code{
    text-align:left;
    padding-left: 90px;
    margin-top: 110px;
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
    <div class="content">
    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">

    <p>Neste tutorial, foi possível observar que um atacante pode usar um ataque XSS Baseado em DOM aproveitando-se da manipulação do DOM no lado do cliente para executar scripts maliciosos. Diferentemente dos demais tipos de XSS vistos, o XSS DOM é executado inteiramente no lado do cliente, sem necessidade de interação direta com o servidor.
    </p>

    <p>Este ataque permite que a página em si (a resposta HTTP) não seja alterada, mas o código do lado do cliente contido na página é executado de maneira diferente devido às modificações maliciosas que ocorreram no ambiente DOM.
    </p>

    <!--

    <p>O uso da  codificação URL (URL encoding) foi necessária para converter caracteres em um formato que possa ser transmitido de forma segura pela URL. Pois, assim, é possível inserir um payload na URL de uma página vulnerável e garantir que a URL seja válida, evitando que caracteres especiais sejam interpretados de maneira incorreta pelo navegador ou pelo servidor.
    </p>

-->

    <p>Em casos como este, um atacante poderia alterar o conteúdo da página do carrinho ou redirecionar o usuário para uma página falsa, pois o link parece legítimo, mas contém um fragmento de URL malicioso que será processado pelo JavaScript vulnerável na página.
    </p>



    </div>
    <div class ="container-robot" style="transform: translate(50vw, 0%)">
        <div class="robot-speech ">
            <p class="writer central-text" id="balloon-text">
            Agora é a sua vez! Explore o ataque XSS Baseado em DOM em nosso Laboratório.        
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>

  <div class="code" style="margin-top: 3px">

    <p>Copie o código abaixo e cole-o ao final da URL na barra de pesquisa do navegador na página acessível pelo carrinho de compras no menu do laboratório.</p>

    <div id="codeBlock">
    <code>?data=alert("XSSAttack")</code>
    </div>
    <button class="copyButton" id="copyButton">Copiar Código</button>
    <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>

    </div>

    <div class="container-buttons">
        <a href="./lab1-dom6.php" draggable = "false" style="color: white; text-decoration: none;">
            <div class="btn btn-primary transition-button" id="transition-back">
                &lt;&lt;Retornar 
            </div>
        </a>
        <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="finishTask(taskNo, redirPath)">
                    Laboratório&gt;&gt;
                </button>
 
            </div>
            </div>
            </div>
</div>



<script>
var taskNo = 7;
var redirPath = "../laboratorio/laboratory.php?atividade=dom1";
let caso = 'EI';
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

