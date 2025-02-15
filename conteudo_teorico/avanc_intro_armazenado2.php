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

.container-buttons{
  margin-top: 20px;
}
.image-container {
    width: 100%;
    height: auto;
    overflow: hidden; 
    max-width: none;
    margin-bottom: 20px;
}
.image-container img {
    width: 100%;
    height: auto;
    align-self: center;

}
.list{
  margin-left: 50px;
  list-style-type: disc;
}
</style>

<body>
<div style="display: flex; width: 100%;">



<?php include '../menu_lateral_avanc.php'; ?>
<div class="content" style="margin-right:0px">
  <div class="central-box" >
    <div class="central-text">
      <h3 class="title">JavaScript e DOM</h3>
      <div id="first-text">
        <p>
        Através do DOM, o JavaScript pode adicionar, acessar e alterar todos os elementos HTML de uma página web dinamicamente. As páginas HTML são estáticas, isto é, a estrutura da página é apresentada para o usuário exatamente como é armazenada no servidor. O código JavaScript é embutido em páginas HTML, justamente, para torná-las dinâmicas. Durante a interpretação da página pelo navegador para construção da árvore do DOM, ao encontrar um código JavaScript, o navegador irá executá-lo e, em seguida, irá formatar o conteúdo para ser exibido ao usuário baseado na lógica do código. 
        </p>
        <p>
        Todos os elementos HTML são definidos como objetos no DOM. Os métodos do DOM são ações que podem ser executadas nos elementos HTML. As propriedades do DOM são valores dos elementos HTML que podem ser definidos e alterados. Um exemplo de código JavaScript embutido no HTML para manipular o DOM é o seguinte:
        </p>
      </div>
      </div>

      <div class="image-container">
        <img src="../img/teorico/avancado-armazenado-pagina2.png" draggable="false">
      </div>
    <div class="central-text">
      <div id="third-text">
        <p>
        Nesse exemplo, o código JavaScript altera o conteúdo do elemento &lt;p&gt; identificado por “mensagem”. O método e a propriedade usados no exemplo são o getElementById e a innerHTML, respectivamente. O método encontra e acessa um elemento HTML através do seu identificador, id, para em seguida definir a sua propriedade, innerHTML.         </p>
        <p>
        A manipulação do DOM por código JavaScript pode introduzir vulnerabilidades. Como visto no nível iniciante, o ataque XSS baseado em DOM ocorre quando o código JavaScript aceita a entrada de um usuário, fonte, e passa essa entrada para outra função que exibe os resultados de volta para a página,  sorvedouro, sem nenhum tipo de verificação da entrada antes de ser exibida novamente em tela. Lembre-se, portanto, que os ataques baseados em DOM não são armazenados ou manipulados pelo servidor web, mas sim, no navegador web do usuário.
        </p>
        <p>
        As fontes de ataques são propriedades ou funções do JavaScript que aceitam entradas de usuário de qualquer lugar da página web. Um exemplo de fonte é a propriedade location.search porque ela lê uma entrada a partir do conjunto de caracteres de requisição (query string). Mais exemplos de fontes são:
        </p>

        <ul class="list">
          <li>document.URL
          </li>
          <li>document.documentURI
          </li>
          <li>document.URLUnencoded
          </li>
          <li>document.baseURI
          </li>
          <li>location.search
          </li>
          <li>document.cookie
          </li>
          <li>document.referrer
          </li>
        </ul>

        <p>
        Um sorvedouro é uma função JavaScript que causa efeitos indesejados para o usuário se o atacante controla os dados passados para essa função. Se tal função retorna a entrada para a tela como saída sem nenhuma verificação de segurança, ela é considerada um sorvedouro. Um exemplo de sorvedouro é a propriedade innerHTML, que altera o conteúdo de um objeto para o valor que for fornecido a ela. Mais exemplos de sorvedouros são:
        </p>
        <ul class="list">
          <li>document.write()</li>
          <li>document.writeln()</li>
          <li>document.domain</li>
          <li>element.innerHTML</li>
          <li>element.outerHTML</li>
          <li>element.insertAdjacentHTML</li>
          <li>element.onevent</li>
        </ul>


      </div>
    </div>

  <div class="container-buttons">
      <a href="./avanc_intro_armazenado1.php" draggable = "false" style="color: white; text-decoration: none;">
          <div class="btn btn-primary transition-button" id="transition-back">
              &lt;&lt;Retornar 
          </div>
      </a> 
      <a href="./avanc_intro_armazenado3.php"  draggable = "false" style="color: white; text-decoration: none;">
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

