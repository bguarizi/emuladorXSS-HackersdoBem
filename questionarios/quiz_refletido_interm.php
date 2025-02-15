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
    <link href="../css/questionarios.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/scriptGlossario.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Quiz XSS Refletido Nível Intermediário</title>
</head>

<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral_interm.php'; ?>
    <div class="content">
      <div class="central-box">        
          <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Chegamos aos exercícios de fixação do módulo de XSS Refletido! Lembrando o que foi aprendido sobre HTTP, vamos reforçar o seu aprendizado?
                    </p>
                </div>
                <div class="robot d-inline-flex align-items-center justify-content-center">
                    <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
                </div>
            </div>
            <div class ="container-robot" id="second-robot">
                <div class="robot d-inline-flex align-items-center justify-content-center">
                    <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
                </div>
            <div class="robot">
                <div class="robot-speech" id="second-speech">
                    <p class="writer">
                    Com estes exercícios, pudemos reforçar ainda mais o conteúdo visto sobre HTTP no último módulo!
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

        <form id="quizForm">
        <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>1. Qual das alternativas abaixo descreve corretamente a função de um cliente HTTP?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. Enviar respostas e receber requisições para visualizar as páginas Web.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. Estabelecer conexões e enviar requisições ao servidor para acessar conteúdos Web.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. Processar diretamente as mensagens de erro do protocolo HTTP.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Qual é o papel principal do servidor HTTP em uma comunicação via protocolo HTTP?</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. Servir requisições enviadas pelo cliente, respondendo com conteúdo apropriado ou mensagens de erro.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. Estabelecer conexões diretas com outros servidores para redirecionar conteúdo.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. Enviar apenas mensagens de erro caso a requisição do cliente não seja válida.
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. Como o protocolo HTTP possibilita a exploração de vulnerabilidades por ataques de XSS refletido em aplicações Web?</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. Ao permitir que um servidor envie códigos maliciosos diretamente no cabeçalho da resposta HTTP.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. Ao possibilitar que o conteúdo enviado na requisição HTTP seja refletido na resposta, permitindo que scripts maliciosos sejam executados no navegador do usuário.
            </span>
        </label>
        <label class="question-label right">
            <input type="radio" name="q3" value="C" class="right">
            <span class="answer-text">
                c. Ao exigir que o cliente HTTP execute automaticamente todo o código presente na resposta do servidor.
            </span>
        </label>
    </div>

    <div id="submit-container">            
        <div id="error-container">
        </div>
        <button class="btn btn-primary" type="submit" id="submit-button" value="Checar Respostas">Submeter questões!</button>
    </div>

</form>
        </div>        
        <div class="container-buttons">
            <a href="../laboratorio/cart.php?atividade=ref_cookie" class="btn btn-primary transition-button" id="transition-back">
                &lt;&lt;Retornar  
            </a>
            <button class="btn btn-primary transition-button" id="transition-next" onclick="finishTask(taskNo, redirPath)">
                Prosseguir&gt;&gt;
            </button>
        </div>
      </div>
    </div>
  </div>

<script>
    var taskNo = 12;
    var redirPath = "../conteudo_teorico/interm_intro_armazenado.php";
    const correctAnswers = {
        q1: 'B',
        q2: 'A',
        q3: 'B'
    };
    const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Refletido no Nível Intermediário.</p>`;

    </script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>

</body>
</html>