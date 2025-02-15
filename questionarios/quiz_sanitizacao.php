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
    <title>Quiz Sanitização</title>

<style>
	.correct { color: green; }
    .incorrect { color: red; }
</style>

</head>

<body>

<div style="display: flex; width: 100%;">
<?php include '../menu_lateral_avanc.php'; ?>
    <div class="content">
      <div class="central-box">        
          <div class ="container-robot" id="first-robot">
                <div class="robot-speech" id="first-speech">
                    <p class="writer">
                    Sobre sanitização, responda
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
                    Com estes exercícios, pudemos reforçar ainda mais o conteúdo visto no último módulo!  
                    </p>
                </div>
            </div>
            </div>


        <div class="container-questions">

        <form id="questionnaireForm">
        <h3 class="title-questions">Exercícios de Fixação</h3>

    <div class="question">
        <p>Qual das opções a seguir corretamente sanitiza um código?</p>
        <label class="question-label">
            <input type="radio" name="q1" value="A">
            <span class="answer-text">
                a. O uso da função htmlspecialchars() nos dados recebidos no back end.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="B">
            <span class="answer-text">
                b. O uso de urlencode() na solicitação enviada.
            </span>
        </label>
        <label class="question-label">
            <input type="radio" name="q1" value="C">
            <span class="answer-text">
                c. O uso de prepared statements no back end.
            </span>
        </label>
    </div>


    <div id="submit-container">            
        <div id="error-container">
        </div>
        <button class="btn btn-primary" type="submit" id="submit-button" value="Checar Respostas">Submeter questões!</button>
    </div>

</form>

	<div id="results"></div>

        <div class="container-buttons" style="width:100%;">
            <a href="../conteudo_teorico/avanc_intro_sanitizado1.php" class="btn btn-primary transition-button" id="transition-back">
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
    var taskNo = 24;
    var redirPath = "../tutoriais_avancado/lab1-sanitizado1.php";

    var sanitizedPage = "#";   
    
    document.getElementById('questionnaireForm').addEventListener('submit', function(event) {
    	event.preventDefault();
        transitionNext.style.display = 'block';
    	let resultsHtml = '<br><h5>Resultados</h5>';

    	const selectedAnswer = document.querySelector('input[name="q1"]:checked').value;

    	if (selectedAnswer === 'A') {
        	resultsHtml += '<p class="correct">Correto! A função htmlspecialchars(), quando usada no back end, vai garantir que caracteres especiais como "/" sejam codificados de maneira a impedir a execução de um script.</p>';
        	sanitizedPage = "../laboratorio/pag_sanitizada01A.php"
    	} 
    	else if (selectedAnswer === 'B') {
        	resultsHtml += '<p class="incorrect">Não. A função urlencode() servirá para mandar dados de forma segura por uma url, mas não impedirá que o script seja executado ao chegar no back end.</p>';
        	sanitizedPage = "../laboratorio/pag_sanitizada01B.php"
    	}
    	else if (selectedAnswer === 'C') {
        	resultsHtml += '<p class="incorrect">Não. O uso de prepared statements deixará o banco de dados mais robusto, protegendo contra ataques de SQL injection, mas não impedirá a execução de scripts no back end.</p>';
        	sanitizedPage = "../laboratorio/pag_sanitizada01C.php"
    	}

        resultsHtml += `<p>`;

        document.getElementById('results').innerHTML = resultsHtml;
        window.open(sanitizedPage, "_blank");
    });

    </script>
<script src="../js/progress.js"></script>
<script src="../js/menuLateral.js"></script>
<script src="../js/quiz.js"></script>

</body>
</html>