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
    <title>Quiz XSS Armazenado Nível Intermediário</title>
</head>

<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral_interm.php'; ?>
    <div class="content">
      <div class="central-box">        
          <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Com base no que foi aprendido sobre cookies e payload, vamos reforçar seu aprendizado?
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
                    Estes exercícios reforçam o quanto que o XSS Armazenado pode ser perigoso!  
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

        <form id="quizForm">
        <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>1. Como o uso de cookies em uma aplicação web pode ser explorado em ataques XSS armazenado?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. Cookies permitem que scripts maliciosos redirecionem usuários automaticamente para páginas falsas.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. Cookies armazenam identificadores que podem ser roubados por meio de payloads XSS, permitindo que o atacante se passe pelo usuário em sessões futuras.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. Cookies impedem que scripts maliciosos tenham acesso a informações de autenticação do usuário.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Qual das alternativas descreve um payload XSS que aproveita os cookies para obter acesso não autorizado a dados sensíveis do usuário?</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. Payload de registro do teclado, que monitora as ações do usuário para obter informações sensíveis.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. Payload de roubo de cookies, que extrai o cookie de sessão do usuário e envia ao servidor do atacante.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. Payload de redirecionamento, que leva o usuário para uma página falsa.
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. Como um payload XSS armazenado em um servidor pode afetar múltiplas vítimas em uma aplicação web?</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. Ao ser ativado, ele redireciona apenas o primeiro usuário para uma página falsa e ignora os demais.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. Ele permite que o atacante controle o servidor diretamente, afetando o acesso dos usuários à aplicação.
            </span>
        </label>
        <label class="question-label right">
            <input type="radio" name="q3" value="C" class="right">
            <span class="answer-text">
                c. Como o payload fica armazenado no servidor, ele é executado sempre que qualquer usuário acessa a página vulnerável, impactando todos os usuários que visualizam o conteúdo infectado.
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
            <a href="../laboratorio/cart.php?atividade=arm_cookie" class="btn btn-primary transition-button" id="transition-back">
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
    var taskNo = 15;
    var redirPath = "../conteudo_teorico/interm_intro_dom.php";
    const correctAnswers = {
        q1: 'B',
        q2: 'B',
        q3: 'C'
    };
    const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Armazenado no Nível Intermediário.</p>`;

    </script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>

</body>
</html>