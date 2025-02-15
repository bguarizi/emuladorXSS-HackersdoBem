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
    <title>Introdução Sanitização</title>
</head>

<style>
body{
  overflow-x: hidden;
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
    transform: translate(12vw, 50px);
  }
.robot-speech::after {
    content: '';
    height: 25px;
    position: absolute;
    z-index: 1;
    border-bottom: 30px solid #fff; 
    border-right: 20px solid transparent; 
    top: 50px; 
    right: -12px; 
    transform: rotate(-270deg); 
}

.robot-speech {
    max-width: 30vw;
    min-height: 80px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-18vw) translateY(-180px); 
    padding-top:20px;
    padding-bottom:20px;
}


  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-20vw) translateY(-180px); 
      margin-bottom: 90px;
  }
}
  
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-17vw) translateY(-180px); 
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
      <h3 class="title">Tratamento de Entradas de Dados e Mecanismos de Sanitização</h3>
      <div id="first-text">
        <p>
        Após a apresentação no nível Intermediário dos conceitos de codificação e validação, serão apresentadas funções que podem ser utilizadas em ataques XSS e padrões e bibliotecas para proteção.        </P>
        <p>
        Algumas funções do JavaScript são mais susceptíveis a ataques XSS. Porém, de uma maneira geral, essas funções podem ser substituídas por outras mais seguras. A função "eval" avalia ou executa uma string, o que pode fazer com que códigos maliciosos sejam injetados na string e executados. Uma das soluções para esse problema corresponde à substituição da função por "Function". Já a função "innerHTML" define ou retorna o conteúdo HTML de um elemento. Essa função é usada, por exemplo, para inserir texto em uma página Web. No entanto, pode ser utilizada como um sink de um ataque XSS DOM. Para evitar essa vulnerabilidade, pode-se utilizar outras funções como a "innerText" ou a "textContent". Existem ainda outras funções inseguras como a "setInterval()", a "setTimeout()" etc.
        </p>
        <p>
        Além de outras funções "equivalentes", existem padrões e bibliotecas que podem ser usados para proteção contra ataques XSS. Um dos padrões corresponde à Política de Segurança de Conteúdo (Content Security Policy - CSP), através da qual pode-se restringir o uso do navegador de forma que ele possa carregar apenas recursos (scripts, imagens etc.) baixados de fontes confiáveis ou pode-se ainda desabilitar o uso de algumas funções como a "eval". Para utilizar o CSP, o servidor deve enviar uma resposta HTTP contendo o cabeçalho "Content‑Security‑Policy" e as políticas. Por exemplo, o código "Content-Security-Policy: default-src 'self'" somente permite que sejam carregados recursos da mesma origem da página servida. Os principais navegadores, tais como o Firefox e o Chrome proveem suporte à CSP.
        <p>
        <p>
        Já a DOMPurify é uma biblioteca escrita em JavaScript que sanitiza códigos em HTML5, SVG e MathML. Ela recebe uma string de entrada e gera uma string de saída limpa de acordo com os parâmetros utilizados na função "DOMPurify.sanitize". Por exemplo, o código "&lt;img src=x onerror=alert('XSS')//&gt;", que gera um alerta se a imagem não for encontrada, pode ser sanitizado utilizando-se "DOMPurify.sanitize('&lt;img src=x onerror=alert('XSS')//&gt;')". Dessa forma o código se torna "&lt;img src=&quot;x&quot;&gt;". A biblioteca pode ser instalada utilizando-se o gerenciador de pacotes "npm". A DOMPurify pode ser usada em diversos navegadores como o Firefox e o Chrome.
        <p>
          


      </div>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Entendendo um pouco mais sobre sanitização, vamos colocar na prática todo o conteúdo visto e aplicar estes conceitos?
              </p>
          </div>
    </div>
  <div class="container-buttons" style= "margin-top:0px">
        
      <a href="../questionarios/quiz_armazenado_avanc.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../questionarios/quiz_sanitizacao.php"  draggable = "false" style="color: white; text-decoration: none;">
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

