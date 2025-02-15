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
    <title>XSS Baseado em DOM</title>
</head>

<style>
.img{
  background-image: url('img/teorico/reflected-image1.png');
}
.robot-speech {
  max-width: 40%;
  margin-left: auto; 
  transform: translateX(-120%) translateY(100px); 
  z-index:10;
  overflow-wrap: break-word;
}
.container-robot{
  padding: 0;
  transform: translateY(-20%);
  display:block;
  margin:auto;
  margin-top:10px;
}
.robot-speech::after{
  bottom: -10px; 
  right: -10px; 
  transform: rotate(135deg); 
}
.robot{
  transform: translateX(30%);  
}
@media(max-width:1200px){
  .robot-speech{
    max-width: 55%;
    transform: translateX(-80%) translateY(110px); 
  }
}
@media(max-width:800px){
  .writer{
    font-size: 16px;
  }
  .container-robot{
    transform: scale(0.9) translateY(-20%);
  }
  .container-buttons{
    transform: translateY(-100%);
  }
  .robot-speech{
    text-align: left;
  }
  .image-container {
    width: 90%;
    margin-bottom:20px;
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
            <h3 class="title" >Como funciona o ataque XSS baseado no Modelo de Documento por Objetos (DOM)</h3>
          <p>  
          No XSS baseado em DOM, o atacante também usa um URL para inserir o código malicioso. Entretanto, o URL neste tipo de ataque altera dinamicamente a estrutura dos objetos que compõem a página HTML para inserir duas novas estruturas, uma fonte e um sorvedouro.
          </p> 
          <p>  
          A estrutura de objetos alterada na página HTML só ocorre no momento que a página é processada pelo navegador do usuário legítimo, sem que o servidor da página HTML esteja ciente da modificação. Com a página Web alterada, o elemento fonte inserido recupera informações sensíveis do usuário legítimo e as direciona ao elemento sorvedouro, no qual o atacante coleta as informações sensíveis.      </p> 
          </div>

        </div>

        <div class="image-container">
          <img src="../img/teorico/DOM-image1.png" id="image-central">
        </div>

          <div class="central-text" id="second-text">
            <p>
            No XSS baseado em DOM, o atacante (1) insere o script malicioso ao alterar dinamicamente a estrutura dos objetos que compõem a página HTML para que seja possível inserir novas estruturas que não estejam originalmente presentes. Em seguida, usuário (2) realiza uma requisição HTTP legítima ao servidor Web. O servidor Web (3) responde a requisição HTTP com a página que possui a vulnerabilidade DOM ao usuário. O usuário (4) recebe a resposta HTTP do servidor Web e processa a página ao modificar o DOM da página HTML e executa o código malicioso.
            </p>
            <p>
            No XSS baseado em DOM, o atacante pode gerar um URL para inserir o código malicioso, como ocorre no XSS Refletido, ou utilizar a persistência de um banco de dados, como ocorre no XSS Armazenado. Em ambos os casos, o ataque ocorre quando o navegador do usuário processa a página Web enviada pelo servidor. 
          </p>
            <p>
            Este tipo de ataque pode ser facilmente confundido com o XSS Refletido quando executado, contudo, o XSS Refletido apenas adiciona novos elementos na visualização da página legítima ou adiciona um redirecionamento para um novo URL, enquanto o XSS DOM possui a característica de modificar toda a estrutura de elementos da página HTML que é acessada pelo usuário, desse modo, mesmo o acesso sendo realizado ao URL legítimo, a página visualizada pelo usuário é completamente diferente da página verídica.
          </p>

          </div>  

        <div class ="container-robot">
            <div class="robot-speech">
                <p class="writer central-text" id="balloon-text">
                As diferenças entre XSS refletido, armazenado e baseado em DOM residem na forma como o código malicioso é inserido e executado, entenda mais a seguir!            
                  </p>
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
      </div>
      <div class="container-buttons">
      <a href="../questionarios/quiz_armazenado.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
        <a href="./intro_dom2.php" class="btn btn-primary transition-button" id="transition-next">
        Prosseguir&gt;&gt; 
        </a>
    </div>
  </div>
</div>

<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
</body>
</html>

