<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/index_general.css" rel="stylesheet">
    <link href="../css/tutorial_lab.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <script src="../js/progress.js"></script>
        
    <title>Loja Hackers do Bem</title>

</head>

<style>

    ul li.nav-item{
        padding-left: 0px !important;
    }

</style>


<body>
    <!-- Modal -->
  <div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModalLabel" aria-hidden="true" style="align-items: center; display: none;">
    <div style="height: 100vh; display: flex; align-items: center;">
      <div style="width: 100vw; display: flex; flex-direction:column; align-items: center; justify-content: center;">
        <div class="modal-dialog" style="display: flex;">
                  <div class="text-tutorial">
                      <p>Esse é o nosso ambiente de laboratório! Esse local é destinado à praticarmos tudo o que você aprendeu.
        Tenha muita atenção aos próximos passos.  Primeiramente irei demonstrar como o XSS Refletido funciona e, posteiormente, você estará livre para testá-lo! </p>
                  </div>
        
                  <div class="img-tutorial"><img src="../img/robot.png" alt="" style="width: 170px;"></div>

        </div>
        
        <button type="button" class="close btn-modal" onclick="closeModal()" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">Entendi</span>
        </button> 

      </div>
      
        
      </div>  
  </div>

  <button type="button" class="btn btn-flutuante" id="btn-flutuante">
    <span style="bottom: 60px;" class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
      <img src="../img/robot.png" alt="Robô" style="width: 100px;">
    </span>
  </button>

  <div class="container-buttons">
    <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-next" style="bottom: 20px;">
     Prosseguir&gt;&gt;
     </a>
  </div>

  


  <div style="display: flex; width: 100%;">


  <?php
        function getParameterByName($name) {
            if (!isset($_GET[$name])) {
                return null;
            }
            return $_GET[$name];
        }

        $param = getParameterByName('atividade');

        // Definir o arquivo PHP a ser incluído com base no parâmetro
        if ($param === 'intermediario') {
            include '../menu_lateral_interm.php';
        } else if (strpos($param, 'avancado') !== false){
            include '../menu_lateral_avanc.php';
        } else {
          include '../menu_lateral.php';
        }
    ?>

        <div id="content" class="content p-0">
          
          <?php include './header.php'; ?>
            
            <?php include './getProducts.php'; ?>


            <div class="container-buttons">
              <a href="#" class="btn btn-primary transition-button btn-flutuante" id="transition-back-lab" style="bottom: 20px; left: 23vw; right: auto;">
              &#60&#60Retornar
              </a>
            </div>

        </div>

    </div>
</body>
<script src="../js/menuLateral.js"></script>
<script src="../js/next_activity.js"></script>

</html>