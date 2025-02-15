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

    <title>Votação XSS Refletido</title>
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
            Aqui você irá direto para o laboratório para testar as vulnerabilidades, está pronto?
            </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
  </div>


        <div class="code" style="margin-top: 250px;">

        <p>O primeiro laboratório consiste em um sistema de votação, você irá injetar scripts maliciosos para burlar a votação garantindo que o seu produto favorito 
            receba mais votos. Siga as instruções e teste suas habilidades.</p>

        <p>Copie o código abaixo e cole-o na barra de busca por comentários na página a seguir, em seguida, teste a funcionalidade de votos.</p>

        <div id="codeBlock">
        <code>&lt;script&gt;document.querySelector("#candidate2 button").setAttribute("onclick", "vote(2); setTimeout(function() { document.querySelector('#candidate1 button').click(); }, 100);");&lt;/script&gt;</code>
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
var redirPath = "../laboratorio/voting_lab.php?atividade=ref_vote";


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

