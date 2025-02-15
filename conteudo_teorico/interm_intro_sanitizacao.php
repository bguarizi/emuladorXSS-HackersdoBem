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
    <title>XSS Sanitizado</title>
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
    transform: translate(15vw, 80px);
  }

.robot-speech::after {
      content: '';
      height: 25px;
      position: absolute;
      z-index: 1;
      border-bottom: 30px solid #fff; 
      border-right: 20px solid transparent; 
      top: 70px; 
      right: -17px; 
      transform: rotate(90deg); 
}

.robot-speech {
    padding-top: 20px;
    padding-bottom: 20px;
    max-width: 35vw;
    min-height: 100px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-20vw) translateY(-195px); 
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
      transform: translateX(-22vw) translateY(-190px); 
      margin-bottom: 90px;
  }
}
@media(min-width:1200px){
    .robot-speech{
      transform: translateX(-22vw) translateY(-190px); 
  }
    .container-robot{
      margin-bottom: 100px;
    }
   }
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-19vw) translateY(-190px); 
  }
   }

  .writer{
    text-align: justify;
    justify-content: left;
    margin-bottom: 0px;
  }
  .robot{
    transform: translateY(10px);
  }



</style>

<body>
<div style="display: flex; width: 100%;">



  <?php include '../menu_lateral_interm.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">Prevenção contra ataques XSS</h3>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Neste nível, pudemos entender melhor a gravidade dos ataques XSS, isso destaca a importância da prevenção destes ataques e a correção de vulnerabilidades XSS. Por isso, vamos entender então qual o conceito de sanitização?
              A seguir, em nossos laboratórios, tente explorar os campos que antes eram vulneráveis!
            </p>
            </div>

      </div>
    <div class="central-text" style="transform: translateY(-80px)">
      <div id="first-text">
        <p>
        Existem diferentes formas de se realizar a prevenção contra ataques XSS. Duas técnicas bastante utilizadas pelos desenvolvedores de páginas Web são a codificação e a validação. Ambas podem ser aplicadas de forma isolada ou sequencial, no cliente ou no servidor Web e quando o sítio recebe a entrada do usuário (entrada) ou logo antes de o site inserir a entrada em uma página (saída).
          </p>
          
        <p>
        A codificação ou escape corresponde a uma conversão de uma entrada do usuário de forma que o navegador a interprete como dados e não como código. O tipo de codificação mais utilizado é o escape em HTML; no qual um símbolo (caractere) é trocado por um código ou por um nome de entidade. Por exemplo, um caractere "&lt;" seria transformado em "&amp;#60;" ou "&amp;lt;" e dessa forma os ataques do tipo "&lt;script&gt;...&lt;/script&gt;" não seriam executados como códigos. Existe uma função denominada "encodeHtml" que realiza a troca de alguns caracteres de uma string de entrada por seus nomes de entidade correspondentes. Há também outras funções de codificação para outras linguagens.
            </p>
        <p>
        A codificação não previne contra todos os tipos de ataques XSS, pois alguns deles não envolvem o uso de caracteres especiais como o "&lt;" e o "&gt;". 
        </p>
        <p>
          A validação, também denominada filtragem, filtra a entrada do usuário de forma que a entrada é completamente rejeitada ou então as partes maliciosas da entrada são removidas. O primeiro caso denomina-se rejeição, enquanto que o segundo corresponde à sanitização ou limpeza e é o mais usual. Uma das formas mais comuns de validação corresponde a permitir alguns elementos HTML (como "&lt;em&gt;"), mas proibir outros (como "&lt;script&gt;"). Mais especificamente, pode-se trabalhar com uma lista de padrões permitidos (whitelisting) e determinar uma entrada como inválida se não corresponder a algum desses padrões. Existem alguns códigos e bibliotecas disponíveis para realizar a sanitização de páginas, tais como o OWASP Java HTML Sanitizer.
        </p>
      </div>
    </div>
  <div class="container-buttons">
      <a href="../questionarios/quiz_dom_interm.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../tutoriais_intermediario/lab1-sanitizado.php"  draggable = "false" style="color: white; text-decoration: none;">
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

