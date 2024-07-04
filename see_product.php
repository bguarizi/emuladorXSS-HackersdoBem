<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='./css/bootstrap.min.css' rel='stylesheet'>
    <link href='./css/index_general.css' rel='stylesheet'>
    <script src='./js/jquery.js'></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

    <title>Loja Hackers do Bem</title>
</head>
<body>

  <nav class='navbar navbar-expand-lg'>
      <div class='container-fluid'>
          
          <a class='navbar-brand' href='#'><img src='./img/logo_oficial_branca.svg' alt='' style='width: 150px; height: auto;'></a>
          
          <button style='margin-right: 20px;' class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation' onclick='toggleMenu()'>
          <span class='navbar-toggler-icon'></span>
          </button>
          
          <div class='collapse navbar-collapse div_search' id='navbarTogglerDemo03'>
            
          <ul class='navbar-nav mb-2 mb-lg-0'>
              <li class='nav-item'>
              <a class='nav-link text-light active' aria-current='page' href='./index.php'>Início</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link text-light' href='#'>Sobre</a>
              </li>
              <li class='nav-item'>
              <a class='nav-link text-light' href='./xss2.html'>Ver seus produtos</a>
              </li>
          </ul>
          <form class='d-flex w-100 p-3' role='search' action='index.php' method='get'>
              <input class='search_input border-0' type='search' placeholder='Busque por um produto' aria-label='Search' name='produto'>
              <button class='search_button btn-light border-0' type='submit'><img class='icon_find' src='./img/busca.png'></button>
          </form>
          </div>
      </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Hello World!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Seja bem-vindo(a) ao nosso tutorial!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>

      </div>
    </div>
  </div>

  <?php include 'getProducts.php'; ?>

  <button type="button" class="btn btn-flutuante" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <span class="d-inline-block btn-flutuante" tabindex="0" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover focus" data-bs-content="Acesse o tutorial aqui" data-bs-placement="top">
      <img src="./img/robot.png" alt="Robô" style="width: 100px;">
    </span>
  </button>


</body>

<script>

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
