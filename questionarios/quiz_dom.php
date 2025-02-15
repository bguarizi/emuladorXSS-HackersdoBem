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
    <title>Quiz XSS Baseado em DOM Nível Iniciante</title>
</head>

<body>
<div style="display: flex; width: 100%;">
<?php include '../menu_lateral.php'; ?>
    <div class="content">
      <div class="central-box">        
      <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Você chegou ao fim! Para reforçar todo o conteúdo visto no nível Iniciante, vamos para os exercícios de fixação?
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
                    Parabéns pelo caminho percorrido! Você finalizou o nosso nível Iniciante. Vamos para o nível Intermediário?
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

    <form id="quizForm">
    <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>1. Qual é a principal característica do ataque XSS baseado em DOM?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. O código malicioso altera dinamicamente a estrutura dos objetos da página HTML no lado do cliente, sem que o servidor esteja ciente da modificação.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. O código malicioso é armazenado no servidor e executado quando a página comprometida é acessada.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. O código malicioso é refletido de volta ao navegador do usuário a partir do servidor em uma resposta imediata.
            </span>
        </label>
    </div>

    <div class="question">
        <p>2. Como o XSS baseado em DOM difere do XSS Refletido e Armazenado em termos de execução?</p>
        <label class="question-label">
            <input type="radio" name="q2" value="A">
            <span class="answer-text">
                a. O XSS baseado em DOM altera o conteúdo da resposta HTTP do servidor.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="B">
            <span class="answer-text">
                b. O XSS baseado em DOM é executado inteiramente no lado do cliente, enquanto o XSS Refletido e Armazenado envolvem interação com o servidor.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q2" value="C">
            <span class="answer-text">
                c. O XSS baseado em DOM é armazenado permanentemente no servidor para execução futura.
            </span>
        </label>
    </div>

    <div class="question">
        <p>3. O que pode ocorrer se um atacante utilizar um payload XSS baseado em DOM em um URL?</p>
        <label class="question-label">
            <input type="radio" name="q3" value="A">
            <span class="answer-text">
                a. O código malicioso altera o conteúdo da página do servidor permanentemente.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="B">
            <span class="answer-text">
                b. O código malicioso é executado apenas no servidor, sem afetar o lado do cliente.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q3" value="C">
            <span class="answer-text">
                c. O código malicioso modifica o DOM da página no navegador, permitindo ações como redirecionamento para uma página falsa.
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
            <a href="../laboratorio/xss2.php" class="btn btn-primary transition-button" id="transition-back">
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
    var taskNo = 9;
    var redirPath = "../conteudo_teorico/finish.php";
        const correctAnswers = {
                q1: 'A',
                q2: 'B',
                q3: 'C'
            };
        const resultsHtml = `<p id="congratulations"> Parabéns! <br> Você concluiu o Módulo de XSS Baseado em DOM no Nível Iniciante.</p>`;
</script>

<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>
</body>
</html>