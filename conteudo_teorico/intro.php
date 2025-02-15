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
    <title>Introdução</title>
</head>
<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral.php'; ?>

<div class="content" style="margin-right: 0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
        <h3 class="title" >Motivação</h3>
        <p class="theoric-content"> As aplicações Web são uma parte essencial do dia-a-dia das pessoas. No entanto, as vantagens oferecidas pelas aplicações Web também são acompanhadas de riscos para os seus usuários. Cerca de 70% das aplicações Web são desenvolvidas com brechas de segurança severas e 30% estão vulneráveis a alguma das 10 categorias de ataques mais realizados e identificados pela Open Worldwide Application Security Project (OWASP). Dentre os ataques mais realizados, encontra-se o Cross-Site Scripting (XSS) e sua primeira identificação data de aproximadamente 1996. Os ataques XSS passaram a serem vistos como uma preocupação da comunidade de segurança quando a rede social MySpace foi atacada e mais de um milhão de usuários foram infectados no período de 24 horas.
        </p>
        <p>
        O objetivo desta ferramenta é apresentar os principais conceitos sobre ataques XSS e apresentar medidas de prevenção durante o desenvolvimento de aplicações Web para torná-las mais seguras.
        </p>
      </div>
      <div id="second-text">
        <h3 class="title" >O que é um ataque XSS?</h3>
        <p>
        Os ataques XSS pertencem à categoria de ataques denominada ataques de injeção de código. Nessa categoria de ataque, um usuário malicioso injeta o código malicioso através de campos de entrada existentes no sistema. No caso de ataques XSS, o usuário malicioso explora os campos de entrada da página Web para injetar códigos maliciosos em JavaScript em uma aplicação Web legítima. O código malicioso injetado na página Web legítima é executado no navegador Web do usuário legítimo. Dessa forma, o usuário malicioso utiliza a página Web legítima como um canal confiável do usuário legítimo para executar o seu ataque. Os ataques XSS podem ser classificados em três categorias. Confira os detalhes abaixo:        
        </p>
      </div>  
    </div>

    <div id = "container-cards">
      <div class="card" id='card1'>
      <div class="card-inner">
        <div class="card-front">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="symbol bi bi-symmetry-vertical" viewBox="0 0 16 16">
            <path d="M7 2.5a.5.5 0 0 0-.939-.24l-6 11A.5.5 0 0 0 .5 14h6a.5.5 0 0 0 .5-.5zm2.376-.484a.5.5 0 0 1 .563.245l6 11A.5.5 0 0 1 15.5 14h-6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .376-.484M10 4.46V13h4.658z"/>
          </svg>
          <h3 style="margin: 0px">XSS Refletido</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
          </div>
        <div class="card-back">
          <p class="back-text theoric-content">No ataque XSS refletido, o atacante gera um URL que contém um código malicioso que fará parte da requisição HTTP. O código malicioso é inserido em campos de entrada da aplicação Web, como barras de busca, seções de comentários e caixas de texto de autenticação. Ao receber a resposta HTTP do servidor e executá-la em seu navegador, o usuário legítimo executa um código malicioso presente no URL que foi enviado pelo atacante.
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
            <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
          </svg>
        </div>

      </div>
      </div>

      <div class="card" id='card2'>
        <div class="card-inner">
          <div class="card-front">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"  class="symbol bi-floppy" viewBox="0 0 16 16">
              <path d="M11 2H9v3h2z"/>
              <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
            </svg>
            <h3 style="margin: 0px">XSS Armazenado</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
            </div>
          <div class="card-back">
            <p class="back-text">No XSS armazenado, o atacante gera um código malicioso que será armazenado persistentemente em um servidor vulnerável, geralmente através de um banco de dados. Um exemplo deste tipo de ataque pode ser encontrado em aplicações Web que servem como fóruns de discussão ou redes sociais. Este tipo de ataque não necessita que o usuário use um URL contendo código malicioso para que o ataque seja executado e pode afetar um número maior de usuários, visto que qualquer usuário que navegue pela aplicação Web poderá executar o código malicioso servido pela página comprometida. 
            </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="card" id='card3'>
        <div class="card-inner">
          <div class="card-front">
            <svg  xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"  class="symbol bi bi-file-code" viewBox="0 0 16 16">
              <path d="M6.646 5.646a.5.5 0 1 1 .708.708L5.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708zm2.708 0a.5.5 0 1 0-.708.708L10.293 8 8.646 9.646a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708z"/>
              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
            </svg>
            <h3 style="margin: 0px">XSS Baseado em DOM</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
            </div>
          <div class="card-back">
            <p class="back-text theoric-content">
              No XSS baseado em DOM, o atacante também usa um URL para inserir o código malicioso. Entretanto, o URL neste tipo de ataque altera dinamicamente a estrutura dos objetos que compõem a página HTML para adaptar seu comportamento apenas no lado do cliente; por exemplo, modificando o DOM com dados não confiáveis adicionados ao URL.
            <!--No XSS baseado em DOM, o atacante também usa um URL para inserir o código malicioso. Entretanto, o URL neste tipo de ataque altera dinamicamente a estrutura dos objetos que compõem a página HTML para inserir duas novas estruturas, uma fonte e um sorvedouro. A estrutura de objetos alterada na página HTML só ocorre no momento que a página é processada pelo navegador do usuário legítimo, sem que o servidor da página HTML esteja ciente da modificação. Com a página Web alterada, o elemento fonte inserido recupera informações sensíveis do usuário legítimo e as direciona ao elemento sorvedouro, no qual o atacante coleta as informações sensíveis.-->
            </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
            </svg>

          </div>
        </div>
      </div>
    </div>
    <div class="central-text" id="third-text">
      <p>
        Neste curso, será possível entender as vulnerabilidades que permitem a realização de um ataque XSS, quais são os diferentes tipos de ataques XSS, os detalhes de como são executados e os potenciais problemas que podem causar.      </p>
    </div>

    <div class ="container-robot">
            <div class="robot-speech">
                <p class="writer central-text" id="balloon-text">
                Vamos juntos trabalhar nesta jornada?            
                  </p>
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
    </div>
    </div>
    <div class="container-buttons">
        <a href="./intro_refletido.php" class="btn btn-primary transition-button" id="transition-next">
            Prosseguir&gt;&gt; 
        </a>
    </div>
  </div>
</div>
</div>
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
var glossaryData = <?php echo glossary($conn); ?>;
glossaryData.forEach(entry => {
    activateGlossary(entry.word, entry.meaning);
});
</script>

</body>
</html>

