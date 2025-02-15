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
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>XSS Armazenado</title>
</head>

<style>
body{
  overflow-x: hidden;
}

.container-buttons{
  margin-top: 20px;
}
.image-container img {
    height: auto;
    display: block;
  }

  .container-robot {
    border-radius: 3px;
    width: 100%;
    padding: 0;
    display: block;
    margin: auto auto;
    transform: translate(5vw, 50px);
  }

.robot-speech::after {
      content: '';
      height: 25px;
      position: absolute;
      z-index: 1;
      border-bottom: 30px solid #fff; 
      border-right: 20px solid transparent; 
      top: 30px; 
      right: -17px; 
      transform: rotate(10deg); 
}

.robot-speech {
    max-width: 25vw;
    min-height: 100px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-16vw) translateY(-190px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(50px, -10px);;
    }
    .robot-speech{
      max-width: 60%;
      transform: translateX(-16vw) translateY(-190px); 
      margin-bottom: 90px;
  }
  }
  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-18vw) translateY(-190px); 
      margin-bottom: 90px;
  }
}
  
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-15vw) translateY(-190px); 
  }
   }

  .writer{
    text-align: justify;
    justify-content: left;
    margin-bottom: 0px;
  }



</style>

<body>
<div style="display: flex; width: 100%;">



  <?php include '../menu_lateral_interm.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">Os Cookies</h3>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Anteriormente, exploramos o roubo de cookies no XSS refletido. Agora, ao usá-lo com XSS armazenado, o ataque pode ser registrado permanentemente no servidor, aumentando sua gravidade. Vamos aprofundar nosso entendimento sobre essa ameaça?              </p>
          </div>

      </div>
    <div class="central-text" style="transform: translateY(-80px)">
      <div id="first-text">
        <p>
        O HTTP é um protocolo de comunicação sem estado. Isso porque o servidor HTTP não mantém nenhuma informação sobre os clientes que fazem requisições a ele, ou seja, o servidor HTTP envia ao cliente HTTP os arquivos solicitados sem armazenar qualquer informação de estado sobre o cliente. Se um mesmo cliente requisita o mesmo objeto duas vezes, não importa o intervalo de tempo entre requisições, o servidor responde ao cliente novamente com o mesmo objeto na segunda requisição, pois já esqueceu por completo o que fez antes. Se o HTTP é um protocolo é sem estado, como uma aplicação Web sabe quem sou eu e meus hábitos de consumo, por exemplo, quando acesso um site de comércio eletrônico? A resposta é simples: a aplicação Web está usando cookies.
        </p>
          
        <p>
          Os cookies são um mecanismo usado pelo HTTP para identificar usuários. Essa identificação pode ser usada para apresentar conteúdo personalizado em função da identidade do usuário, como fazem os sites de comércio eletrônico, mas também pode ser usada pelo o servidor para restringir o acesso a um recurso como, por exemplo, uma caixa de mensagens de correio eletrônico.
        </p>
        <p>
          Os cookies possuem quatro componentes. São eles:
        </p>
      </div>
    </div>
    <div class="image-container" style="transform: translateY(-80px)">
      <img src="../img/teorico/intermediario-armazenado-pagina1.png">
    </div>
  <div class="container-buttons">
      <a href="../questionarios/quiz_refletido_interm.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./interm_intro_armazenado2.php"  draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-next">
          Prosseguir&gt;&gt;
          </div>
      </a> 
      </div>
    </div>
  </div>
</div>
<script src="../js/writerTutorial.js"></script>
<script src="../js/menuLateral.js"></script>
</body>
</html>

