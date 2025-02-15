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
    <title>Introdução ao HTML</title>
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
    top: 70px; 
    right: -12px; 
    transform: rotate(-270deg); 
}

.robot-speech {
    max-width: 30vw;
    min-height: 110px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-18vw) translateY(-200px); 
    padding-top:20px;
    padding-bottom:20px;
}


  
  @media(max-width:1300px){
    .robot-speech{
      transform: translateX(-20vw) translateY(-200px); 
      margin-bottom: 90px;
  }
}
  
   @media(min-width:2400px){
    .robot-speech{
      transform: translateX(-17vw) translateY(-200px); 
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
      <h3 class="title">Como tornar o HTML mais seguro a Ataques XSS?</h3>
      <div id="first-text">
        <p>
        Diversas tags e atributos do HTML são explorados para a inserção de código malicioso em ataques XSS. Idealmente, não se deve permitir que usuários consigam inserir tags de marcação em um campo de entrada da página Web. Entretanto, o uso de algumas tags pode ser desejado para o propósito da página Web. Por exemplo, um blog pode desejar o uso de tags para a postagem de comentários estilizados.
        </P>
        <p>
        Uma abordagem para tratar esse problema pode ser a de filtrar potenciais tags prejudiciais e o uso de JavaScript nos campos de entrada da página Web. Por exemplo, a biblioteca Jsoup utilizada como analisador HTML provê uma ferramenta para a limpeza de tags HTML para prevenir ataques XSS, chamada “Whitelist”. A figura abaixo mostra um exemplo de uso da biblioteca e do Whitelist para limpar uma escrita HTML potencialmente perigosa.
        </p>
      </div>
    </div>
    <div class="image-container" style="width:100%">
      <img src="../img/teorico/avancado-refletido-pagina4.png" draggable = "false">
    </div>
    <div class="central-text">
      <div id="second-text">
        <p>
        Para realizar a limpeza a classe Whitelist da biblioteca Jsoup provê um método denominado “clean()” que possui como argumentos a string potencialmente perigosa e o conjunto de tags e atributos considerados seguros. A classe possui um conjunto de tags e atributos predefinidos que podem ser utilizados baseando-se no nível de tolerância desejado:
        </p>
        <ul style="list-style-type: disc; margin-left: 20px;">
          <li>
            Whitelist.none() → Não permite nenhum tipo de tag ou atributo na entrada. A saída resultante será somente texto.
          </li>
          <li>
            Whitelist.simpleText() → Permite somente tags de formatação textual básicas, como &lt;b&gt;, &lt;em&gt;, &lt;u&gt;, &lt;i&gt; e &lt;strong&gt;.
          </li>
          <li>
            Whitelist.basic() → Permite um conjunto maior de tags de formatação textual, incluindo o conjunto do Whitelist.simpleText() mais o seguinte conjunto: &lt;a&gt;, &lt;blackquote&gt;, &lt;br&gt;, &lt;cite&gt;, &lt;code&gt;, &lt;dd&gt;, &lt;dl&gt;, &lt;dt&gt;, &lt;li&gt;, &lt;ol&gt;, &lt;p&gt;, &lt;pre&gt;, &lt;q&gt;, &lt;small&gt;, &lt;strike&gt;, &lt;sub&gt;, &lt;sup&gt; e &lt;ul&gt;. A tag &lt;a&gt; pode fazer referência para http, https, ftp e mailto com o atributo “rel” preenchido com o valor “nofollow”.
          </li>
          <li>
            Whitelist.basicWithImages() → Permite o mesmo conjunto do Whitelist.basic(), mas também permite o uso da tag &lt;img&gt; com o atributo “src” podendo fazer referência somente ao http e https.
          </li>
          <li>
            Whitelist.relaxed() → Permite o uso completo de tags de formatação de texto e estrutural do corpo HTML.
          </li>
        </ul>
        <p>
        Além das predefinições, a classe Whitelist conta com os métodos “addTags()” e “addAttributes()” para realizar personalizações.
        </p>
      </div>
    </div>
    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Conhecendo melhor sobre o HTML poderemos entender melhor o contexto do tratamento de campos de entrada para a prevenção de ataques XSS. A seguir, veremos também como a inspeção de páginas poderá nos auxiliar na identificação destes tipos de ataque.
              </p>
          </div>
    </div>
  <div class="container-buttons" style= "margin-top:0px">
        
      <a href="./avanc_intro_refletido3.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./avanc_intro_refletido5.php"  draggable = "false" style="color: white; text-decoration: none;">
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

