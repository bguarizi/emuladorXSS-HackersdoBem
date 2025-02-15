<!DOCTYPE html>
<html lang="pt-br">
<body>
    <nav class='navbar navbar-expand-lg'>
        <div class='container-fluid'>
            
            <a class='navbar-brand' href='#'><img src='../img/logo_oficial_branca.svg' alt='' style='width: 150px; height: auto;'></a>
            
           
            
            <div class='collapse navbar-collapse div_search px-2' id='navbarTogglerDemo03'>
             <!-- 
            <ul class='navbar-nav mb-5 mb-lg-0'>
                <li class='nav-item'>
                <a class='nav-link text-light active' aria-current='page' href='#'>Início</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link text-light' href='#'>Sobre</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link text-light' href='#'>Meus Produtos</a>
                </li>
            </ul>
            -->
            <?php
            $param = getParameterByName('atividade');

            echo "<form class='d-flex py-3 px-5' role='search' action='' method='get' style='width: 85%;'>
                <input type='hidden' name='atividade' value='". $param ."'>
                <input class='search_input border-0' type='search' placeholder='Busque por um produto' aria-label='Search' name='produto'>
                <button class='search_button btn-light border-0' type='submit'><img class='icon_find' src='../img/busca.png'></button>
            </form>
            <ul class='navbar-nav mb-2 mb-lg-0'>
              <li class='nav-item'>";

                // Definir o arquivo PHP a ser incluído com base no parâmetro
                if ($param === 'intermediario') {
                    echo "<a class='nav-link text-light active' aria-current='page' href='./xss2.php?atividade=intermediario'><img class='icon_buy' src='../img/buy.png'></a>";
                } else {
                    echo "<a class='nav-link text-light active' aria-current='page' href='./xss2.php?atividade=". $param ."'><img class='icon_buy' src='../img/buy.png'></a>";
                }
              ?>

              
              </li>
            </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>