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
    <title>XSS Armazenado</title>
</head>

<style>

.robot-speech {
  width: 45%;
  margin-right: auto;
  transform: translateX(20%) translateY(-110px); 
  z-index:10;
  overflow-wrap: break-word;
}
.robot-speech::after{
    top: -10px; 
    right: -10px; 
    transform: rotate(45deg);  
}
#robot-image{
  transform: translateX(45%);  
}
@media (max-width: 800px){
  .robot-speech{
    width: 65%;
    transform: translateX(-10px) translateY(-110px) !important; 
  }
}

@media(max-width: 1080px){
  .robot-speech{
    width: 65%;
    transform: translateX(15%) translateY(-110px); 
  }
  #robot-image{
  transform: translateX(5%);  
  margin-left: auto;
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
        <h3 class="title" >Como funciona o ataque XSS Armazenado</h3>
        <p>
        Como visto anteriormente, o ataque XSS Refletido é assim denominado, pois o servidor Web reflete de volta o ataque recebido. Também é denominado não-persistente, pois o atacante precisa repassar o código malicioso a cada usuário para realizar o ataque. 
        </p>
        <p>
        No XSS armazenado, também conhecido como XSS persistente, o atacante gera um código malicioso que será armazenado persistentemente em um servidor vulnerável, geralmente através de um banco de dados.
        </p>
        </div>

    </div>

    <div class="image-container">
      <img src="../img/teorico/stored-image1.png">
    </div>

      <div class="central-text" id="second-text">
        <p>
        Um exemplo deste tipo de ataque pode ser encontrado em aplicações Web que servem como fóruns de discussão ou redes sociais. Este tipo de ataque não necessita um URL para que seja executado e pode afetar um número maior de usuários, visto que qualquer usuário que navegue pela aplicação Web pode executar o código malicioso servido pela página comprometida.
        </p>
        <p>A necessidade de repasse do código do XSS Refletido implica que o impacto desse tipo de XSS é geralmente menos severo do que o do XSS armazenado.  
        </p>
      </div>  

      <div class ="container-robot">
            <div class="robot d-inline-flex align-items-center justify-content-center">
            <img src="../img/robot.png" alt="robot-icon" id ="robot-image" width="200px" height="200px">
            </div>
        <div class="robot">
            <div class="robot-speech">
                <p class="writer" id="balloon-text">
                No XSS refletido, os dados maliciosos são enviados ao servidor e imediatamente refletidos de volta ao navegador do usuário. Em contraste, no XSS armazenado, os dados maliciosos são permanentemente armazenados no servidor e executados quando os usuários acessam o conteúdo comprometido.
                </p>
            </div>
        </div>
      </div>


<div class="container-buttons">
      <a href="../questionarios/quiz_refletido.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
    <a href="./intro_armazenado2.php" class="btn btn-primary transition-button" id="transition-next">
     Prosseguir&gt;&gt;
     </a>
</div>

</div>
</div>
</div>

<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
</body>
</html>

