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
    <title>Quiz XSS Refletido Nível Avançado</title>
</head>

<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral_avanc.php'; ?>
    <div class="content">
      <div class="central-box">        
          <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Parabéns! Chegamos aos exercícios de fixação do nível avançado. Vamos reforçar o seu aprendizado?
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
                    Agora você reforçou ainda mais o conteúdo visto sobre HTML no último módulo!
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

        <form id="quizForm">
        <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>1. Qual é a função dos atributos em uma tag HTML?
</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. Marcar o início e o fim de um conteúdo em negrito.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. Definir o corpo principal da página HTML.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. Adicionar parâmetros adicionais a uma tag, como o URL de uma imagem.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Qual é o objetivo da biblioteca Jsoup e da classe Whitelist no contexto da segurança em HTML?
</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. Permitir o uso de tags de script sem restrições.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. Filtrar e remover tags e atributos potencialmente perigosos para evitar ataques XSS.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. Codificar tags HTML para melhorar o desempenho da página.
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. Qual das seguintes ferramentas, acessível pelo navegador Firefox, permite visualizar os elementos HTML e experimentar mudanças locais de uma página Web sem alterar a versão original do servidor?
</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. Console de desenvolvimento
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. Debugger de scripts
            </span>
        </label>
        <label class="question-label right">
            <input type="radio" name="q3" value="C" class="right">
            <span class="answer-text">
                c. Ferramenta de Inspeção
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
            <a href="../laboratorio/laboratory.php?atividade=avancado_cookie" class="btn btn-primary transition-button" id="transition-back">
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
    var taskNo = 21;
    var redirPath = "../conteudo_teorico/avanc_intro_armazenado1.php";
    const correctAnswers = {
        q1: 'C',
        q2: 'B',
        q3: 'C'
    };
    const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Refletido no Nível Avançado.</p>`;

    </script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>

</body>
</html>