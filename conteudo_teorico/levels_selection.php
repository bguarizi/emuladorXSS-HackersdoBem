<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/levels_selection.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min4.5.js"></script>
        
    <title>Seleção de Nível - Hackers do Bem</title>

</head>
<body>

    <div style="display: flex; width: 100%;">

        <?php include '../menu_lateral.php'; ?>
        
        <div id="content" class="content">
            
            <div class="container px-4 py-3 text-center" id="">
                <div class="page-title" id="page-title"></div>        
                <!-- <h2 class="title mb-0">Olá, user!</h2> -->

       <!-- <div class="speech d-inline-flex">Meu nome é Hacker Good e estarei te acompanhando nessa jornada!</div>
        -->

        <div class ="container-robot">
            <div class="robot-speech">
                <p class="writer central-text mb-0" id="balloon-text">
                Meu nome é Hacker Good e estarei te acompanhando nessa jornada!         
                  </p>
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
    </div>
    
        <div class="pt-2">

            <a style="text-decoration: none;" href="./intro.php">
                <button class="btn button_level m-5" id="btn_init_level" type="button">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img id="img_init_level" src="../img/icon_level_init_blue.png" width="35px" height="35px" alt="">
                    </div>
                    
                    <p class="level_title">Iniciante</p>
                    <p class="text_level text_init_level"> Neste nível você verá: <br>Conceitos iniciais de XSS </p>
                
                </button>
            </a>
            
            <a style="text-decoration: none;" href="../intermediario/intro_interm.php">
            <button class="btn button_level m-5" id="btn_interm_level" type="button">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <img id="img_interm_level" src="../img/icon_level_interm_blue.png" width="35px" height="35px" alt="">
                </div>
                
                <p class="level_title">Intermediário</p>
                <p class="text_level text_interm_level"> Neste nível você verá: <br>Análises de código para identificar a vulnerabilidade </p>
            
            </button>
            </a>
            <a style="text-decoration: none;" href="../conteudo_teorico/intro_avanc.php">
            <button class="btn button_level m-5" id="btn_avanc_level" type="button">
            
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <img id="img_avanc_level" src="../img/icon_level_avanc_blue.png" width="35px" height="35px" alt="">
                </div>
                
                <p class="level_title">Avançado</p>
                <p class="text_level text_avanc_level"> Neste nível você verá: <br>Implementações de código seguro para evitar esta vulnerabilidade </p>
            
            </button>
            </a>

            <p class="text_ mt-3 mb-2">Selecione nos botões acima qual nível será acessado.</p>
        </div>
      </div>


        </div>

    </div>
    
    
    <script src="../js/menuLateral.js"></script>
</body>

<script>
    const btn_init_level = document.getElementById('btn_init_level');
    const text_init_level = document.querySelector('.text_init_level');

    const btn_interm_level = document.getElementById('btn_interm_level');
    const text_interm_level = document.querySelector('.text_interm_level');

    const btn_avanc_level = document.getElementById('btn_avanc_level');
    const text_avanc_level = document.querySelector('.text_avanc_level');

    function removeClassesMargin(){
        btn_init_level.classList.remove("mx-5");
        btn_interm_level.classList.remove("mx-5");
        btn_avanc_level.classList.remove("mx-5");

        btn_init_level.classList.add("mx-3");
        btn_interm_level.classList.add("mx-3");
        btn_avanc_level.classList.add("mx-3");
    }

    function addClassesMargin(){
        btn_init_level.classList.add("mx-5");
        btn_interm_level.classList.add("mx-5");
        btn_avanc_level.classList.add("mx-5");

        btn_init_level.classList.remove("mx-3");
        btn_interm_level.classList.remove("mx-3");
        btn_avanc_level.classList.remove("mx-3");
    }

    btn_init_level.addEventListener('mouseover', function() {
        text_init_level.style.display = 'block';
        document.getElementById('img_init_level').src = "../img/icon_level_init_white.png";
        btn_init_level.style.color = "#FFFFFF";

    });

    // Remove o estilo quando o mouse sai do elemento ativador
    btn_init_level.addEventListener('mouseout', function() {
        text_init_level.style.display = 'none';
        document.getElementById('img_init_level').src = "../img/icon_level_init_blue.png";
        btn_init_level.style.color = "#1B1464";

    });

    
    btn_interm_level.addEventListener('mouseover', function() {
        text_interm_level.style.display = 'block';
        document.getElementById('img_interm_level').src = "../img/icon_level_interm_white.png";
        btn_interm_level.style.color = "#FFFFFF";

    });

    // Remove o estilo quando o mouse sai do elemento ativador
    btn_interm_level.addEventListener('mouseout', function() {
        text_interm_level.style.display = 'none';
        document.getElementById('img_interm_level').src = "../img/icon_level_interm_blue.png";
        btn_interm_level.style.color = "#1B1464";
 
    });


    
    btn_avanc_level.addEventListener('mouseover', function() {
        text_avanc_level.style.display = 'block';
        document.getElementById('img_avanc_level').src = "../img/icon_level_avanc_white.png";
        btn_avanc_level.style.color = "#FFFFFF";

    });

    // Remove o estilo quando o mouse sai do elemento ativador
    btn_avanc_level.addEventListener('mouseout', function() {
        text_avanc_level.style.display = 'none';
        document.getElementById('img_avanc_level').src = "../img/icon_level_avanc_blue.png";
        btn_avanc_level.style.color = "#1B1464";
       
    });

const typewriters = document.querySelectorAll('.writer');
//const button = document.querySelectorAll('.button_next');
var cursor = document.createElement('span');
cursor.id = 'cursor';

function typeParagraph(index) {
    const typewriter = typewriters[index];
    const text = typewriter.textContent;
    let charIndex = 0;
    typewriter.textContent = '';
    typewriter.style.display = 'block';

    function typeCharacter() {
        typewriter.textContent += text[charIndex];
        typewriter.appendChild(cursor);
        charIndex++;

        if (charIndex < text.length) {
            setTimeout(typeCharacter, 30); 
        } else {

            setTimeout(() => {
                if (index < typewriters.length - 1) {
                    typeParagraph(index + 1);
                } else {
                    //button[0].style.display = 'block';
                }
            }, 0);
        }
    }

    typeCharacter();

    
}

typeParagraph(0);

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function customTitle() {
    const username = getCookie('username');
    const titleDiv = document.getElementById('page-title');

    if (username) {
         titleDiv.innerHTML = `<h2 class="title mb-0">Olá, ${username}!</h2>`;
    } 
    else {
        titleDiv.innerHTML = '<h2 class="title mb-0">Olá, user!</h2>';
    }
}

window.onload = customTitle();

</script>
<script src="../js/menuLateral.js"></script>
<script src="../js/writerTutorial.js"></script>


<script>
document.querySelectorAll('.card').forEach(card => {
    card.onclick=_=>card.classList.toggle('flip');
});
function fitText(cardsClassName) { /*Faz com que todos os cards tenham a mesma fonte: Aquela que couber no mais apertado */
    const maxFontSize = 30;
    const minFontSize = 1; 
    let fontSizeSentinela = 31;
    const cards = document.getElementsByClassName(cardsClassName);
    
    if (cards.length === 0) return;

    for (let i = 0; i < cards.length; i++) {
        let card = cards[i];
        let fontSize = maxFontSize;
        card.style.fontSize = fontSize + 'px';

        let contentWidth = card.scrollWidth;
        let contentHeight = card.scrollHeight - 20;
        let width = card.clientWidth;
        let height = card.clientHeight; 
        while ((contentHeight > height || contentWidth > width) && fontSize > minFontSize) {
            fontSize--;
            card.style.fontSize = fontSize + 'px';
            contentWidth = card.scrollWidth;
            contentHeight = card.scrollHeight;
        }
        if(fontSize < fontSizeSentinela){
          fontSizeSentinela = fontSize;
        }
        console.log(contentHeight);
    }
    for (let i = 0; i < cards.length; i++) {      
        let card = cards[i];
        if(parseInt(card.style.fontSize) > fontSizeSentinela){
            card.style.fontSize = fontSizeSentinela + 'px';
            console.log(fontSizeSentinela);
        }
    }
    
}
        window.onload = function() {
            fitText('card-back');
        };
        window.onresize= function() {
            fitText('card-back');
        };
</script>


</html>