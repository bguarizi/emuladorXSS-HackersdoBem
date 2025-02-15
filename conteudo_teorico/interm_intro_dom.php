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
    <link href="../css/modifiable_code.css" rel="stylesheet">

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>XSS DOM</title>
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
    transform: translate(9vw, 50px);
  }

.robot-speech::after {
    content: '';
    height: 25px;
    position: absolute;
    z-index: 1;
    border-bottom: 30px solid #fff; 
    border-right: 20px solid transparent; 
    top: 60px; 
    right: -12px; 
    transform: rotate(-220deg); 
}

.robot-speech {
    max-width: 30vw;
    min-height: 80px;
    margin-right: auto; 
    margin-left: auto;
    transform: translateX(-18vw) translateY(-200px); 
}

@media(max-width:830px){
    .robot{
      transform: scale(0.8) translate(90px, -10px);;
    }
    .robot-speech{
      max-width: 60%;
      transform: translateX(-18vw) translateY(-200px); 
      margin-bottom: 90px;
  }
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
  .code{
    margin-bottom:20px;
  }

</style>

<body>
<div style="display: flex; width: 100%;">



  <?php include '../menu_lateral_interm.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">Diferenças entre os ataques XSS</h3>
      <div id="first-text">
        <p>
        Na seção anterior, exploramos como os payloads de Cross-Site Scripting (XSS) podem variar desde scripts simples até ataques mais sofisticados. Observamos também que tanto os ataques XSS refletidos quanto os armazenados empregam tipos similares de payloads. No entanto, existe uma distinção crucial entre esses ataques e o XSS baseado em DOM: cada um explora mecanismos específicos para injeção e execução de código, influenciando diretamente a forma como o código malicioso é inserido e processado.
        </p>
        <p>
        Em ataques XSS refletidos e armazenados, o código malicioso é incorporado diretamente ao conteúdo HTML ou à resposta do servidor. Esse código é executado pelo navegador imediatamente ao carregar a página ou quando um elemento específico é ativado. Por exemplo, considere o seguinte script que modifica um botão na página com o identificador <strong>`id="candidate2"`</strong>. O script adiciona um evento <strong>`onclick`</strong> para invocar a função <strong>`vote(2)`</strong> e, utilizando um atraso implementado via <strong> `setTimeout`</strong>, simula um clique em outro botão, <strong>`candidate1`</strong>. Esse comportamento exemplifica como os ataques XSS refletidos e armazenados permitem que um atacante injete scripts maliciosos diretamente, que são então processados pelo navegador como parte do conteúdo HTML.
        </p>
        <p>
        Observe abaixo o script utilizado:  
        </p>
      </div>
    </div>
    <div class="code">
            <div class="modify-container">
                <div class="modify-header">
                    <span class="terminal-symbol">>_</span>
                </div>
                <div class="modify-code">
                <span class="pink-highlight"> &lt;script&gt; </span> <br>
                document.querySelector("#<span class="highlight">candidate2</span>  button").setAttribute("<span class="highlight">onclick</span> ", "<span class="highlight">vote(2)</span> ; <span class="highlight">setTimeout(</span> function() { document.querySelector('<span class="highlight">#candidate1</span> button').click(); }, 100<span class="highlight">)</span>;");
                <br> <span class="pink-highlight"> &lt;/script&gt;</span>         

</div>
            </div>
      </div>
    <div class="central-text">
      <div id="second-text">
        <p>
        Por outro lado, ataques XSS baseados em DOM não inserem o script diretamente no conteúdo HTML. Em vez disso, o código malicioso é injetado por meio da manipulação do Document Object Model (DOM) no lado do cliente, tipicamente explorando a URL ou seus parâmetros que o site processa. Nesse cenário, o script é codificado utilizando URL encoding e pode ser passado como um parâmetro na URL (por exemplo, <strong>`https://site.com/page?query=...`</strong>). O JavaScript no lado do cliente lê esse parâmetro da URL e o insere dinamicamente no DOM, onde é executado.        
        </p>
        <p>
        O script, codificado em URL encoding (onde “<strong>%27</strong>” representa aspas simples e "<strong>%20</strong>” representa espaços), impede que o navegador o interprete imediatamente. O código é executado apenas se o site processar o parâmetro diretamente e o injetar no DOM sem a devida validação. O atacante injeta o código malicioso como uma string dentro da URL para desencadear a execução sem que o script esteja presente diretamente no conteúdo HTML da página.
        </p>
      </div>
    </div>
    <div class="code">
            <div class="modify-container">
                <div class="modify-header">
                    <span class="terminal-symbol">>_</span>
                </div>
                <div class="modify-code">
                <span class="pink-highlight">&amp;query</span>=query=document.querySelector(%27%23<span class="highlight">candidate2</span>%20button%27).setAttribute(%27<span class="highlight">onclick</span>%27,%20%27<span class="highlight">vote(2)</span>;%20<span class="highlight">setTimeout(</span>function()%20{%20document.querySelector(%22%23<span class="highlight">candidate1</span>%20button%22).click();%20},%20100<span class="highlight">)</span>;%27);                
                </div>
            </div>
      </div>
    <div class="central-text">
      <div id="third-text">
        <p>
        Essa abordagem evidencia as diferenças sutis, porém significativas, na forma como os ataques XSS baseados em DOM operam em comparação com os ataques XSS refletidos e armazenados. Compreender essas distinções é essencial para o desenvolvimento de estratégias eficazes de mitigação para cada tipo de ataque.
        </p>

      </div>
    </div>


    <div class ="container-robot">
          <div class="robot d-inline-flex align-items-center justify-content-center">
              <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
          </div>
          <div class="robot-speech">
              <p class="writer">
              Estes conceitos são importantes para entendermos a diferença de cada tipo de ataque e como as formas de tratamento dessas vulnerabilidades podem variar!
              </p>
          </div>

    </div>
  <div class="container-buttons">
      <a href="../questionarios/quiz_armazenado_interm.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="../tutoriais_intermediario/lab1-dom1.php"  draggable = "false" style="color: white; text-decoration: none;">
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

