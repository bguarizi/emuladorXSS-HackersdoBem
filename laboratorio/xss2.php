<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/levels_selection.css" rel="stylesheet">
    <link href="../css/tutorial_before_lab.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Bem vindo Membro, realize o LOGIN.</title>
</head>

<style>

    .container{
        text-align: center;
    }

    .buttons{
        margin-top: 60px;
    }

    .btn{
        margin-right: 50px;
        padding: 5px 20px;
        color: white;
    }

    .robot{
        margin-left: -50px;
        margin-top: 20px;
    }


</style>

<body>
    
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
        } else {
            include '../menu_lateral.php';
        }
    ?>
        
<div class="container content">

    <div class="central-text" style="text-align: justify; padding-top: 40px; padding-left: 90px; padding-right: 90px;">

        <div class="container-buttons" style="margin-top: 5vh;">
            <div class="btn btn-primary transition-button" id="transition-back" onclick="window.history.back();">
                &lt;&lt;Retornar 
            </div>
        </div>
        
        <h2>Bem vindo Cliente.</h2>
        <p>Clique no link abaixo para ver o produto pedido.</p>

        <?php
            $param = getParameterByName('atividade');

            // Definir o arquivo PHP a ser incluído com base no parâmetro
            if ($param === 'intermediario') {
                echo "<a class='nav-link active' style='text-decoration:underline blue; color:blue;' aria-current='page' href='./cart.php?atividade=intermediario'>Ver meu produto agora!</a>";
            } else {
                echo "<a class='nav-link active' style='text-decoration:underline blue; color:blue;' aria-current='page' href='./cart.php?atividade=iniciante'>Ver meu produto agora!</a>";
            }
        ?>

    </div>

</div>
</div>


<script>
const typewriters = document.querySelectorAll('.writer');
//const button = document.querySelectorAll('.button_next');
var cursor = document.createElement('span');
cursor.id = 'cursor';

window.onload = function() {
            // Extração do parâmetro 'data' da URL
            var userData = new URLSearchParams(window.location.search).get('data');
            if(userData) {
                // Execução insegura do conteúdo de 'data' como código
                eval(userData);
            }


        }

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




</script>
<script src="../js/menuLateral.js"></script>
</body>
</html>