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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <link href="../css/questionarios.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/scriptGlossario.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Quiz XSS Refletido Nível Iniciante</title>
</head>

<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral.php'; ?>
    <div class="content">
      <div class="central-box">        
      <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Para reforçarmos o conteúdo aprendido neste módulo, vamos realizar os exercícios de fixação?
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
                    As questões de fixação são uma parte importante do seu aprendizado e te preparam para os próximos desafios!
                    </p>
                </div>
            </div>
        </div>

        <div class="container-questions">

    <form id="quizForm">
    <h3 class="title-questions">Exercícios de Fixação</h3>
    <div class="question">
        <p>1. O que caracteriza um ataque XSS refletido?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. A injeção de código malicioso que é armazenado no servidor e executado por qualquer usuário que acessar a página.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. A injeção de código malicioso através de um URL que é refletido de volta pelo servidor e executado no navegador do usuário.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. A execução de código malicioso diretamente no servidor, comprometendo os dados armazenados.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Como o ataque XSS refletido é comumente iniciado?</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. Enviando um código malicioso diretamente para o servidor através de uma conexão segura.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. Inserindo código malicioso em arquivos de configuração do servidor Web.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. Induzindo o usuário a clicar em um link contendo um URL malicioso enviado por e-mail, página Web ou outras técnicas de engenharia social.
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. Por que o ataque XSS refletido é considerado não-persistente?</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. Porque o código malicioso é armazenado permanentemente no servidor.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. Porque o atacante precisa repassar o código malicioso a cada usuário para realizar o ataque, e o servidor apenas reflete de volta o ataque recebido.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="C">
            <span class="answer-text">
                c. Porque o código malicioso é executado diretamente no servidor sem a necessidade de interação do usuário.
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
    <a href="../laboratorio/laboratory.php?atividade=ref2" class="btn btn-primary transition-button" id="transition-back">
        &lt;&lt;Retornar  
    </a>
    <button class="btn btn-primary transition-button" id="transition-next" onclick="finishTask(taskNo, redirPath)">
        Prosseguir&gt;&gt;
    </button>
</div>
</div>
</div>
</div>
</div>
<script>
    var taskNo = 3;
    var redirPath = "../conteudo_teorico/intro_armazenado.php";

    const correctAnswers = {
                q1: 'B',
                q2: 'C',
                q3: 'B'
            };
        const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Refletido no Nível Iniciante.</p>`;

</script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>
</body>
</html>