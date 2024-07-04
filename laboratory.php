<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/menu.css" rel="stylesheet">
    <link href="./css/fonts.css" rel="stylesheet">
    <link href="./css/index_general.css" rel="stylesheet">
    <link href="./css/tutorial_lab.css" rel="stylesheet">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    <title>Loja Hackers do Bem</title>

</head>
<body>

    <?php include './header.html'; ?>

    <!-- Modal -->
  <div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModalLabel" aria-hidden="true" style="align-items: center; display: none;">
    <div style="height: 100vh; display: flex; align-items: center;">
      <div style="width: 100vw; display: flex; flex-direction:column; align-items: center; justify-content: center;">
        <div class="modal-dialog" style="display: flex;">
                  <div class="text-tutorial">
                      <p>Esse é o nosso ambiente de laboratório! Esse local é destinado à praticarmos tudo o que você aprendeu.
        Tenha muita atenção aos próximos passos.  Primeiramente irei demonstrar como o XSS Refletido funciona e, posteiormente, você estará livre para testá-lo! </p>
                  </div>
        
                  <div class="img-tutorial"><img src="./img/robot.png" alt="" style="width: 170px;"></div>

        </div>
        
        <button type="button" class="close btn-modal" onclick="closeModal()" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">Entendi</span>
        </button> 

      </div>
      
        
      </div>  
  </div>



  <button type="button" class="btn btn-flutuante" id="btn-flutuante">
    <span class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
      <img src="./img/robot.png" alt="Robô" style="width: 100px;">
    </span>
  </button>

    <div style="display: flex; width: 100%;">

    <div class="menu-lateral" id="menu-lateral">
    	<div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="./img/levels.png" alt="">Iniciante
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Intermediário</button>
                <button class="dropdown-item" type="button">Avançado</button>
            </div>
        </div>

        <hr class="levels_line mt-1 mb-3">

        <button type="button" class="close-btn">
            <img src="./img/close-btn.png" onclick="close_menu()"></img>
        </button>

        <div class="img-div">
        	<img src="./img/logo_oficial_branca.svg" class="img-logo"></img>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Introdução</a>
            </li>
            <li class="nav-item" type="button" data-toggle="collapse" data-target="#XssRef" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" href="#">XSS Refletido</a>
            </li>
            <ul class="collapse ul-subitem" id="XssRef">
                <li class="nav-subitem">
                <a href="#">Introdução</a><br>
                </li>
                <li class="nav-subitem">
                <a href="#">Como funciona</a><br>
                </li>
                <li class="nav-subitem">
                <a href="./laboratory.php">Laboratório</a><br>
                </li>
            </ul>
            <li class="nav-item" type="button" data-toggle="collapse" data-target="#xssarm" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" href="#">XSS Armazenado</a>
            </li>
            <ul class="collapse ul-subitem" id="xssarm">
                <li class="nav-subitem">
                    <a href="#">Introdução</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="#">Como funciona</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="./laboratory.php">Laboratório</a><br>
                    </li>
            </ul>
            <li class="nav-item" type="button" data-toggle="collapse" data-target="#xssdom" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" href="#">XSS DOM</a>
            </li>
            <ul class="collapse ul-subitem" id="xssdom">
                <li class="nav-subitem">
                    <a href="#">Introdução</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="#">Como funciona</a><br>
                    </li>
                    <li class="nav-subitem">
                    <a href="./laboratory.php">Laboratório</a><br>
                    </li>
            </ul>
        </ul>

        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width: 25%"></div>
        </div>
    </div>

    <div class="menu-lateral-closed btn-menu-hidden"><img src="./img/mobile.png" alt=""></div>

        <div id="content" class="content">
            
            <?php include 'getProducts.php'; ?>

        </div>

    </div>
    
    
    <script src="./js/menuLateral.js"></script>
</body>

<script>

var referrer = document.referrer;
var path = new URL(referrer).pathname;

var btnF = document.getElementById('btn-flutuante');
var modal = document.getElementById('meuModal');

function closeModal(){
    modal.style.display = "None";
    $('#meuModal').modal('hide');
}

function openModal(){
    modal.style.display = "Flex";
    $('#meuModal').modal('show');
}

btnF.addEventListener('click', function () {
    openModal();
});

$(document).ready(function(){
    if (path == "/menu.html"){
      console.log(path);
      openModal();
    }
});

const items = document.querySelectorAll('.carousel-item');
let currentIndex = 0;
let lastIndex = 0;

function restartInterval() {

  clearInterval(intervalId);

  intervalId = setInterval(nextSlide, 4000);
}


function updateCarousel() {

    items[lastIndex].classList.remove("active");
    
    items[currentIndex].classList.add("active");
  
    restartInterval();

}

function nextSlide() {

  lastIndex = currentIndex;
  if (currentIndex == items.length-1){
    currentIndex = 0;
  } else {
    currentIndex = currentIndex + 1;
  }
  
  updateCarousel();
  
}

let intervalId = setInterval(nextSlide, 4000);

function prevSlide() {
  lastIndex = currentIndex;
  if (currentIndex == 0){
    currentIndex = items.length-1;
  } else {
    currentIndex = currentIndex - 1;
  }
  
  updateCarousel();
  
}

function toggleMenu() {
  var navbarNav = document.getElementById("navbarTogglerDemo03");
  navbarNav.classList.toggle("show");
}

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

</script>

</html>