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
    transform: translate(9vw, 50px);
  }

.robot-speech::after {
    content: '';
    height: 25px;
    position: absolute;
    z-index: 1;
    border-bottom: 30px solid #fff; 
    border-right: 20px solid transparent; 
    top: 20px; 
    right: -17px; 
    transform: rotate(-10deg); 
}

.robot-speech {
    max-width: 25vw;
    min-height: 80px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-16vw) translateY(-170px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(90px, -10px);;
    }
    .robot-speech{
      max-width: 60%;
      transform: translateX(-16vw) translateY(-170px); 
      margin-bottom: 90px;
  }
  }
  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-18vw) translateY(-170px); 
      margin-bottom: 90px;
  }
}
  
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-15vw) translateY(-170px); 
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
      <h3 class="title">Mantendo o estado do usuário com cookies</h3>
      <div id="first-text">
        <p>
        Abaixo está ilustrado como os cookies são usados:
        </p>

      </div>
    </div>
    <div class="image-container">
      <img src="../img/teorico/intermediario-armazenado-pagina2.png">
    </div>
    <div class="central-text">
      <div id="second-text">
        <p>
        Como exemplo, podemos pensar que o Hacker Good, nosso amigo de jornada, quer comprar um Box Anti Hacker, na loja Hackers do Bem, que custa R$ 50,00. O Hacker Good digita em seu navegador o endereço da loja e seu navegador envia, então, uma requisição HTTP ao servidor HTTP da loja Hackers do Bem. Essa é a primeira vez que o Hacker Good acessa a loja Hackers do Bem e, por isso, não tem nenhum registro dessa loja em seu arquivo de cookies. Ao receber essa requisição, o servidor da loja Hackers do Bem verifica que não há nenhuma informação de identificação na mensagem e, por isso, assume que essa mensagem foi enviada por um novo usuário. Sendo assim, a aplicação Web cria um novo identificador para esse usuário em seu banco de dados de apoio e adiciona uma linha de cabeçalho contendo esse identificador, chamada de Set-cookie, na mensagem de resposta enviada ao navegador do Hacker Good. Ao receber a mensagem de resposta, o navegador do Hacker Good cria uma linha de entrada em seu arquivo de cookies, relacionando o identificador recebido no cabeçalho da mensagem de resposta ao nome do servidor que enviou a resposta. Depois de mais alguns cliques, o Hacker Good conclui a compra do Box Anti Hacker. No dia seguinte, porém, o Hacker Good decide comprar mais um item da Loja Hackers do Bem: um cofre de senhas que custa R$ 30,00. Ele, então, digita novamente o endereço da loja Hackers do Bem no seu navegador que, por sua vez, consulta o arquivo de cookies armazenado localmente. Como agora há uma entrada neste arquivo com o identificador do Hacker Good para a loja Hackers do Bem, a mensagem de requisição é enviada com uma linha de cabeçalho, chamada Cookie, que contém esse identificador. Assim, ao receber a requisição, o servidor da loja Hackers do Bem sabe que ela foi enviada pelo Hacker Good e consegue identificá-lo. A loja pode, então, personalizar o acesso do usuário, sugerir produtos e monitorá-lo, por exemplo.
        </p>

      </div>
    </div>


    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Compreendendo melhor o funcionamento dos cookies, vamos entender, também, diferentes tipos de payload?
              </p>
          </div>

    </div>
  <div class="container-buttons">
      <a href="./interm_intro_armazenado.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./interm_intro_armazenado3.php"  draggable = "false" style="color: white; text-decoration: none;">
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

