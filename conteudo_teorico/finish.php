<!DOCTYPE html>
<html lang="en">
<?php include "../glossaries.inc.php";?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/tutorial_before_lab.css" rel="stylesheet">
    <link href="../css/general_config.css" rel="stylesheet">
    <link href="../css/intro.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/scriptGlossario.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Finalização do nível Iniciante</title>
</head>
<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral.php'; ?>

<div class="content" style="margin-right: 0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
      <h3>Finalização do Nível Iniciante</h3>
                <p>
                    <strong> Parabéns! </strong>
                </p>

                <p>
                    Você concluiu o nível iniciante, foi o primeiro passo da sua jornada de aprendizado.
                </p>

                <p>
                    Se prepare, que o próximo nível será acompanhado de novas aventuras!
                </p>
        
      </div>  
    </div>


    <div class ="container-robot" style="">
            <div class="robot-speech">
                    <p class="writer mb-0" id="balloon-text">
                    Obrigado por ter chegado até aqui junto comigo. Até a próxima!
                    </p>
                </div>
                <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" id="robot-img" width=200px>
                </div>
            </div>

            <div class="container-buttons">
        <button class="btn btn-primary transition-button" id="transition-next" style="color: white; text-decoration: none;" onclick="window.location.href = '../intermediario/intro_interm.php';">
            Prosseguir&gt;&gt;
        </button>
        </div>

  </div>
</div>


<script src="../js/menuLateral.js"></script>
<script src="../js/writerTutorial.js"></script>


<script>
document.querySelectorAll('.card').forEach(card => {
    card.onclick=_=>card.classList.toggle('flip');
});
function fitText(cardsClassName) { /*Faz com que todos os cards tenham a mesma fonte: Aquela que couber no mais apertado */
    const maxFontSize = 30;
    const minFontSize = 1; 
    let fontSizeSentinela = 31;
    const cards = document.getElementsByClassName(cardsClassName);
    
    if (cards.length === 0) return;

    for (let i = 0; i < cards.length; i++) {
        let card = cards[i];
        let fontSize = maxFontSize;
        card.style.fontSize = fontSize + 'px';

        let contentWidth = card.scrollWidth;
        let contentHeight = card.scrollHeight - 20;
        let width = card.clientWidth;
        let height = card.clientHeight; 
        while ((contentHeight > height || contentWidth > width) && fontSize > minFontSize) {
            fontSize--;
            card.style.fontSize = fontSize + 'px';
            contentWidth = card.scrollWidth;
            contentHeight = card.scrollHeight;
        }
        if(fontSize < fontSizeSentinela){
          fontSizeSentinela = fontSize;
        }
        console.log(contentHeight);
    }
    for (let i = 0; i < cards.length; i++) {      
        let card = cards[i];
        if(parseInt(card.style.fontSize) > fontSizeSentinela){
            card.style.fontSize = fontSizeSentinela + 'px';
            console.log(fontSizeSentinela);
        }
    }
    
}
        window.onload = function() {
            fitText('card-back');
        };
        window.onresize= function() {
            fitText('card-back');
        };
</script>


<script>
    var javascriptCode = "<?php echo glossary($conn); ?>";
    eval(javascriptCode); 
</script>

</body>
</html>

