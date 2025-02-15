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
    <title>Quiz XSS Baseado em DOM Nível Intermediário</title>
</head>

<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral_interm.php'; ?>
    <div class="content">
      <div class="central-box">        
          <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Parabéns! Chegamos aos exercícios de fixação do módulo XSS Baseado em DOM. Vamos reforçar o seu aprendizado?
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
                    Compreender as diferenças entre os tipos de XSS é fundamental para sabermos mitigar cada tipo de vulnerabilidade. Agora, vamos praticar em nosso laboratório?
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

        <form id="quizForm">
        <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>1. Qual é a principal característica que diferencia ataques XSS baseados em DOM de ataques XSS refletidos e armazenados?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. Ataques XSS baseados em DOM manipulam o Document Object Model (DOM) no lado do cliente, enquanto ataques XSS refletidos e armazenados injetam código diretamente no HTML ou na resposta do servidor.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. Ataques XSS baseados em DOM são executados diretamente pelo servidor, enquanto ataques XSS refletidos e armazenados são executados apenas no navegador.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. Ataques XSS baseados em DOM não conseguem modificar elementos da página, ao contrário dos ataques refletidos e armazenados.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Em um ataque XSS baseado em DOM, qual elemento é geralmente explorado para injetar código malicioso?</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. O corpo do HTML da página.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. O cabeçalho HTTP.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. Parâmetros da URL.
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. Por que um script malicioso em um ataque XSS baseado em DOM frequentemente utiliza URL encoding?</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. Para permitir que o código malicioso seja executado diretamente no servidor.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. Para aumentar o tamanho do script e dificultar a detecção pelo navegador.
            </span>
        </label>
        <label class="question-label right">
            <input type="radio" name="q3" value="C" class="right">
            <span class="answer-text">
                c. Para impedir que o navegador interprete o script imediatamente, esperando até que ele seja processado e injetado dinamicamente no DOM pelo JavaScript.
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
            <a href="../laboratorio/voting_lab.php?atividade=dom_vote" class="btn btn-primary transition-button" id="transition-back">
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
    var taskNo = 17;
    var redirPath = "../conteudo_teorico/interm_intro_sanitizacao.php";
    const correctAnswers = {
        q1: 'A',
        q2: 'C',
        q3: 'C'
    };
    const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Baseado em DOM no Nível Intermediário.</p>`;

    </script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>

</body>
</html>