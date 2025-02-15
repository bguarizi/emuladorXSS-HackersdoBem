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
    <link href="../css/teoricos.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>XSS Baseado em DOM</title>
</head>

<style>

.robot-speech {
  max-width: 30%;
  margin-left: auto; 
  transform: translateX(-80%) translateY(100px); 
  z-index:10;
  text-align: left;
  overflow-wrap: break-word;
}
.container-robot{
  padding: 0;
  transform: translateY(-20%);
  display:block;
  margin:auto auto;
  margin-top:10px;
}
.robot-speech::after{
  bottom: -10px; 
  left: -10px; 
  transform: rotate(-110deg); 
}

.robot{
  transform: translateX(-36%);  
}

@media(max-width:650px){
  .writer{
    font-size: 16px;
  }
  .container-robot{
    transform: scale(0.8) translateY(-100px);;
  }
  .robot-speech{
    max-width: 60%;
    transform: translateX(-10%) translateY(100px);

  }
}
@media(min-width:768px) and (max-width: 991px){
  #card3{
    transform: translateX(54%);;
  }
}

@media(max-width:768px){
  .container-robot{
    transform: scale(0.8) translateY(-100px);;
  }
  .image-container {
    width: 90%;
    margin-bottom:20px;
}
  .robot-speech{
    max-width: 60%;
    transform: translateX(-10%) translateY(100px);
  }
}
</style>

<body>
<div style="display: flex; width: 100%;">

<?php include '../menu_lateral.php'; ?>

<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <div id="first-text">
        <h3 class="title" >Como ocorrem os diferentes tipos de ataques XSS</h3>
        <p>Quando uma vulnerabilidade a um ataque XSS existe em um site Web, qualquer código malicioso pode ser usado em um campo de entrada neste site. O código malicioso pode ser processado pelo lado cliente, isto é, o usuário legítimo, ou pelo lado servidor, isto é, o responsável por servir a página Web. Compreenda melhor as diferenças:
        </p>
      </div>

    </div>
 <div class="container-cards mt-4">
  <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
      <div class="card" id='card1'>
        <div class="card-inner">
          <div class="card-front">
          <div class="icon-text-container">

            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="symbol bi bi-symmetry-vertical" viewBox="0 0 16 16">
              <path d="M7 2.5a.5.5 0 0 0-.939-.24l-6 11A.5.5 0 0 0 .5 14h6a.5.5 0 0 0 .5-.5zm2.376-.484a.5.5 0 0 1 .563.245l6 11A.5.5 0 0 1 15.5 14h-6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .376-.484M10 4.46V13h4.658z"/>
            </svg>
            <h3 class="icon-text-heading" style="margin: 0px">XSS Refletido</h2>
            </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
                <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
              </svg>
            </div>
          <div class="card-back">
            <p class="back-text">O código malicioso é enviado ao servidor através de uma solicitação e refletido imediatamente de volta ao navegador do usuário, ativando o script.
              </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
              <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
              </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card" id='card2'>
          <div class="card-inner">
            <div class="card-front">
            <div class="icon-text-container">

              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"  class="symbol bi bi-floppy" viewBox="0 0 16 16">
                <path d="M11 2H9v3h2z"/>
                <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
              </svg>
              <h3  class="icon-text-heading" style="margin: 0px">XSS Armazenado</h3>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
                <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
              </svg>
              </div>
            <div class="card-back">
              <p class="back-text">O código malicioso é permanentemente armazenado no servidor, sendo executado sempre que o conteúdo comprometido é acessado por qualquer usuário.
              </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
              </svg>
            </div>
          </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="card" id='card3'>
          <div class="card-inner">
            <div class="card-front">
            <div class="icon-text-container">
              <svg  xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"  class="symbol bi bi-file-code" viewBox="0 0 16 16">
                <path d="M6.646 5.646a.5.5 0 1 1 .708.708L5.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708zm2.708 0a.5.5 0 1 0-.708.708L10.293 8 8.646 9.646a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
              </svg>
              <h3  class="icon-text-heading" style="margin: 0px">XSS Baseado em DOM</h2>
              </div>

              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-hand-index-thumb" viewBox="0 0 16 16">
                <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
              </svg>
              </div>
            <div class="card-back">
              <p class="back-text">O código malicioso é inserido diretamente no DOM do navegador, sem a necessidade de comunicação com o servidor, explorando vulnerabilidades no lado do cliente.
              </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bottom-symbol bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
              </svg>

            </div>
          </div>
        </div>
    </div>
  </div>  
</div>


    <div class ="container-robot">
        <div class="robot-speech">
            <p class="writer" id="balloon-text">
            Em nosso último laboratório deste nível, veremos na prática como aplicar o ataque XSS Baseado em DOM. Vamos nessa?          
              </p>
        </div>
        <div class="robot d-inline-flex align-items-center justify-content-center">
        <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
        </div>
  </div>
  <div class="container-buttons">
        <a href="./intro_dom.php" class="btn btn-primary transition-button" id="transition-back">
        &lt;&lt;Retornar  
        </a>
        <a href="../tutoriais_iniciante/lab1-dom1.php" class="btn btn-primary transition-button" id="transition-next">
            Tutorial&gt;&gt;
        </a> 
  </div>

</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.card').forEach(card => {
    card.onclick = () => {
      card.classList.toggle('flip');
    };
  });
});
</script>


<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
</body>
</html>

