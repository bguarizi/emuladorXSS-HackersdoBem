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

    .container{
        display: flex; 
        text-align: center;
        align-items: center;
        justify-content: center;
        flex-direction: column; 

    }


    .container-buttons{
        flex: 1;
        width:100% !important;
    }
    .side-image-container{
        flex: 1.2;
        height:50%;

    }
    .side-image-container img{
        object-fit: contain;
        width: 100%;
        pointer-events: none;
    }
    .inferior-container{
        display: flex;
        width: 80%;
         height: 70%;
    }

.robot-speech {
    width: 200px;
    z-index: 10;
    margin-left: auto;
    margin-right: auto;
    transform: translate(40px, 0px);
}
.robot-speech::after{
  bottom: -10px; 
  left: -10px; 
  transform: rotate(-110deg); 
}

.container-robot {
    flex: 1.2;
    height: 10vw;
}


.container-buttons{
    margin-top: 4vw;
}

.robot{
    margin-left: -50px;
    margin-top: 20px;
    transform: translate(10px, -40px);

}
.robot img{
    width: 250px;
    height: 250px;
}
</style>

<body>
    
    <div style="display: flex; width: 100%;">
    
    <?php include '../menu_lateral.php'; ?>
<div class="content" style="margin-right:0px">

<div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">

    <p>Durante a navegação na loja virtual, será possível observar que na parte superior da  página, há a presença de um filtro de busca.
    </p>

    <p>Como estudado anteriormente, o XSS Refletido se manifesta quando a aplicação Web vulnerável recebe um valor qualquer e o reflete, sem antes validá-lo de forma correta.
    </p>

    <p>No ambiente virtual do emulador, essa vulnerabilidade poderá ser identificada no campo de busca de produtos, 
        onde é possível inserir um script como "&lt;script&gt;alert("XSSAttack")&lt;/script&gt;" e observar este script sendo refletido.</p>


</div>
<div class = "inferior-container">

    <div class ="container-robot">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Vamos explorar essa vulnerabilidade?
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" id="robot-img">
        </div>
    </div>

    <div class="side-image-container">
    <img src="../img/tutorial/refletido1-pagina2.png" alt="">
    </div>
</div>

<div class="container-buttons">
    <a href="../tutoriais_iniciante/lab1-refletido2.php" class="btn btn-primary transition-button" draggable="false" id="transition-back">
        &lt;&lt;Retornar  
    </a> 
    <a href="../tutoriais_iniciante/lab1-refletido4.php" class="btn btn-primary transition-button" draggable="false" id="transition-next">
        Prosseguir&gt;&gt;
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

