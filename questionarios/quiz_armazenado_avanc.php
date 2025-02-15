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
    <title>Quiz XSS Armazenado Nível Avançado</title>
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
                    Estes exercícios reforçam os aprendizados adquiridos ao longo deste módulo! 
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

        <form id="quizForm">
        <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>1. Qual das opções abaixo descreve corretamente a diferença entre front-end e back-end em uma aplicação web?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. O front-end é responsável por processar dados de entrada, enquanto o back-end cuida da exibição gráfica da aplicação.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. O front-end lida com a interface gráfica acessada pelo usuário, enquanto o back-end processa dados e realiza operações no servidor.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. O front-end funciona no servidor e interage diretamente com o banco de dados, enquanto o back-end opera apenas no navegador do usuário.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Qual linguagem é usada para dinamizar páginas web ao modificar a estrutura do DOM de forma programática, adicionando ou alterando elementos em tempo de execução?</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. PHP
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. CSS
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. JavaScript
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. Por que funções do JavaScript, como document.URL, location.search e document.cookie, são consideradas fontes de ataques XSS baseados em DOM?</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. Porque essas funções permitem manipular diretamente o conteúdo do servidor, tornando o ataque persistente.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. Porque essas funções são responsáveis por exibir o resultado final na interface gráfica do usuário, sendo diretamente vulneráveis a ataques.
            </span>
        </label>
        <label class="question-label right">
            <input type="radio" name="q3" value="C" class="right">
            <span class="answer-text">
                c. Porque essas funções aceitam entradas fornecidas pelo usuário sem validação, permitindo que dados maliciosos sejam usados na manipulação do DOM.
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
            <a href="../laboratorio/checkout.php" class="btn btn-primary transition-button" id="transition-back">
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
    var taskNo = 23;
    var redirPath = "../conteudo_teorico/avanc_intro_sanitizado1.php";
    const correctAnswers = {
        q1: 'B',
        q2: 'C',
        q3: 'C'
    };
    const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Armazenado no Nível Avançado.</p>`;

    </script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>

</body>
</html>