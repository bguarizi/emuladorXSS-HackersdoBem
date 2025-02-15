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
    <title>Linguagens de Programação</title>
</head>

<style>
body{
  overflow-x: hidden;
}

.image-container {
    width: 100%;
    height: auto;
    overflow: hidden; 
    max-width: none;
    display: flex;
    justify-content: center; 
    align-items: center; 
    margin-bottom: 30px;
}
.image-container img {
    height: auto;
}
#first-image{
  width: 50%;
}
#second-image{
  width: 70%;
}
  .container-robot {
    border-radius: 3px;
    width: 100%;
    padding: 0;
    display: block;
    margin: auto auto;
    transform: translate(13vw, 50px);
  }

.robot-speech::after {
      content: '';
      height: 25px;
      position: absolute;
      z-index: 1;
      border-bottom: 30px solid #fff; 
      border-right: 20px solid transparent; 
      top: 40px; 
      right: -17px; 
      transform: rotate(90deg); 
}

.robot-speech {
  padding-top: 15px;
  padding-bottom: 15px;
    max-width: 35vw;
    min-height: 70px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-21.7vw) translateY(-170px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(50px, -10px);;
    }
    .robot-speech{
      max-width: 35vw;
      transform: translateX(-20.7vw) translateY(-170px); 
      margin-bottom: 90px;
  }
  }
  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-21.7vw) translateY(-170px); 
  }
}
  
   @media(min-width:2200px){
    .robot-speech{
      transform: translateX(-20.7vw) translateY(-170px); 
  }
   }
   @media(min-width:2800px){
    .robot-speech{
      transform: translateX(-19.7vw) translateY(-170px); 
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



<?php include '../menu_lateral_avanc.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">O JavaScript</h3>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Inicialmente, aprendemos um pouco sobre o HTML. Agora, veremos como funciona a interação do HTML com o JavaScript. Vamos lá?
            </p>
            </div>

      </div>
    <div class="central-text">
      <div id="first-text" style="margin-bottom: 0px">
        <p>
        O JavaScript é uma linguagem interpretada, assim como o HTML. Porém, diferentemente do HTML, é uma linguagem de programação, com características básicas de orientação a objetos e programação dirigida por eventos. O código-fonte JavaScript fica embutido na página HTML e é interpretado pelo navegador web.        </p>
          
        <p>
        Com o uso do JavaScript, a interface gráfica  pode lidar com interações do usuário. É possível acionar alterações em uma página web e exibir novas informações, manipular imagens embutidas em uma página web, ler e escrever o estado do cliente em cookies, alterar características do documento, controlar o comportamento do navegador e conteúdo de formulários HTML, etc. O JavaScript, no entanto, não possibilita escrever ou ler arquivos e não possui capacidade de desenho.
        </p>
        <p>
        Há três	 formas de incluir um código JavaScript em uma página web: 
        <ol>
          <li>
            com a tag &lt;script&gt;&lt;/script&gt;;  
          </li>
          <li>
            com a seleção de um link; 
          </li>
          <li>
            com a associação a um evento.
          </li>
        </ol>
        </p>


        <p>
        Na primeira forma, a tag &lt;script&gt; pode aparecer em qualquer lugar da página, inclusive na área de cabeçalho, dentro da tag HTML &lt;head&gt; &lt;/head&gt;. Um detalhe: os códigos JavaScript são executados na ordem em que aparecem na página web. Por isso, quando a tag &lt;script&gt; é incluída no cabeçalho HTML, o código JavaScript é executado antes que a página web seja totalmente carregada. Pelo mesmo motivo, um código JavaScript não pode fazer referência a elementos HTML que ainda não foram definidos na página web até o seu momento de execução. A estrutura de um código JavaScript é exemplificada a seguir:
        </p> 

      </div>
    </div>

    <div class="image-container" style="width:100%">
      <img id="first-image" src="../img/teorico/avancado-armazenado-pagina1-1.png" draggable="false">
    </div>
    <div class="central-text">
      <div id="second-text">
        <p>
        É possível também não escrever o código JavaScript diretamente na página HTML, colocando-o em um arquivo separado. Nesse caso, usa-se o atributo SRC do HTML para indicar o nome do arquivo no qual o código JavaScript está escrito. Por exemplo:
        </p>
      </div>
    </div>

    <div class="image-container" style="width:100%">
      <img id="second-image" src="../img/teorico/avancado-armazenado-pagina1-2.png" draggable="false">
    </div>

    <div class="central-text" >
      <div id="third-text">
        <p>
        Na segunda forma, o link, ao ser selecionado, executa o código JavaScript indicado – &lt;a href=&quot;javascript: ...&quot;&gt; .... &lt;/a&gt; – e na terceira forma, quando associada a um evento, a sintaxe usada é &lt;tag-html onEvento=&quot; &quot;&gt;.
        </p>
        

      </div>
    </div>

  <div class="container-buttons">
      <a href="../questionarios/quiz_refletido_avanc.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./avanc_intro_armazenado2.php" draggable = "false" style="color: white; text-decoration: none;">
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

