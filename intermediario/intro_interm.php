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
    <link href="../css/intro.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Introdução</title>
    <style>
      .robot-speech {
        max-width: 30%;
        transform: translateX(-160%) translateY(110px); 
      }
      #balloon-text{
        margin-left: 7px;
        margin-right: 7px;
      }
    </style>
</head>
<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral_interm.php'; ?>

<div class="content" style="margin-right: 0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
        <h3 class="title" >Introdução</h3>
        <p class="theoric-content">
        Com o crescimento das aplicações web, as vulnerabilidades de segurança tornaram-se uma preocupação constante para desenvolvedores e administradores de sistemas. Entre essas vulnerabilidades, o Cross-Site Scripting (XSS) se destaca como uma das técnicas mais exploradas por atacantes. No nível iniciante, abordamos os fundamentos dos ataques XSS, ilustrando exemplos simples como alertas e redirecionamentos. Este conhecimento inicial permitiu entender como scripts maliciosos podem ser inseridos em páginas web e executados no navegador de usuários legítimos.
        </p>
        <p class="theoric-content">
          Agora, neste nível intermediário, avançaremos para técnicas mais sofisticadas de XSS, como o roubo de cookies e a manipulação de votos. Os conteúdos e exemplos práticos apresentados nos módulos deste curso oferecerão uma compreensão mais aprofundada sobre as diversas formas de XSS — Refletido, Armazenado e Baseado em DOM — e mostrarão como identificar e explorar vulnerabilidades com maior precisão. Ao longo dos módulos, destacaremos as particularidades do protocolo HTTP, o uso de cookies e as estratégias de sanitização, permitindo detectar e mitigar riscos XSS de maneira eficaz e segura.        
        </p>
      </div>  
    </div>
    </div>

    <div class ="container-robot">
            <div class="robot-speech">
                <p class="writer central-text" id="balloon-text">
              Fico feliz de te ver por aqui! Vamos iniciar mais uma jornada de aprendizado?
              </p>
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
    </div>

    <div class="container-buttons">
      <a href="../conteudo_teorico/levels_selection.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Início 
          </div>
      </a> 
      <a href="../conteudo_teorico/interm_intro_refletido.php"  draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-next">
          Prosseguir&gt;&gt;
          </div>
      </a> 
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

