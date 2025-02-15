<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/index_general.css" rel="stylesheet">
    <link href="../css/tutorial_lab.css" rel="stylesheet">
    <link href="../css/render.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <script src="../js/progress.js"></script>
    <title>Laboratório de Sanitização</title>
</head>

<style>

    p.pontuacao{
        color:white;
    }

</style>

<body>

	<div style="display: flex; width: 100%;">

		<?php include '../menu_lateral_avanc.php'; ?>

		<div id="content" class="content" >
			
			<h1> &lt;/&gt; Renderizador de Código &lt;/&gt; </h1>

            <div class="content-elements" style="display: flex; width: 100%;">

            <div id="" class="content-text" >

           
        <div class ="container-robot" style="width: 100%;">
            <div class="robot-speech">
                <p class="writer central-text mb-0" id="balloon-text">
                Vamos colocar a mão na massa?
                Nesta atividade você poderá treinar tudo o que aprendeu para se prevenir contra ataques XSS!         
                  </p>
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
    </div>

    		<p>Use o código ao lado para gerar uma página web. Nesta atividade, você deverá aplicar os métodos de sanitização aprendidos anteriormente.</p>
    		<p>Realize as modificações necessárias e, em seguida, clique no botão para visualizar sua página sanitizada.</p>

</div>


            <div id="" class="content-code" >
    		<form action="../php/saveCode.php" method="POST">
            <div class="code">
                  
                  <div class="modify-container">
                      <div class="modify-header">
                          <span class="terminal-symbol">>_</span>
                      </div>
        		<textarea name="htmlContent">

&lt;form id="comment-form" action="" method="post" autocomplete="off" style="margin-top: 10px;"&gt;
    &lt;textarea id="comment" name="message" class="textarea-comments-sanitizado" placeholder="Escreva aqui o seu comentário e teste a sanitização aplicada no código!"&gt;&lt;/textarea&gt;
    &lt;button id="comment-button" name="comment-submit" type="submit" class="vote-search-button btn-light border-0" style="color:white;"&gt;Salvar Comentário&lt;/button&gt;
&lt;/form&gt;

&lt;?php 	
    if (isset($_POST['comment-submit'])) {
        $comment = trim($_POST['message']);

        if (!empty($comment)) {
            $file = fopen("comentarios.txt", "a");
            chmod("comentarios.txt", 0666);
            fwrite($file, $comment . "\n");
            fclose($file);
            echo "Comentário salvo!";
        }

        echo "&lt;script&gt;window.location.replace(window.location.href);&lt;/script&gt;";
        exit();
    }
?&gt;

</textarea>

</div>
</div>
        		
    
        		<button class="render-button" type="submit">Gerar Página</button>
    		</form>
            </div>

            <button type="button" class="btn btn-flutuante" id="btn-flutuante">
    <span style="bottom: 60px;" class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
      <img src="../img/robot.png" alt="Robô" style="width: 100px;">
    </span>
  </button>

  <div class="container-buttons">
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
     Prosseguir&gt;&gt;
     </a>
  </div>


  <div class="container-buttons">
              <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-back-lab" style="bottom: 20px; left: 23vw; right: auto;">
              &#60&#60Retornar
              </a>
            </div>


</div>
</div>
</body>
<script src="../js/menuLateral.js"></script>
<script src="../js/next_activity.js"></script>
</html>
