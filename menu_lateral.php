<?php include '../php/calculateScore.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<style>
.clear-button{

background-color: #00d600;
padding: 10px 40px;
border: none;
color: white;
border-radius: 20px;
margin-top: 30px;
width: 100%;
margin-top: 30px;

}

</style>
<body>
    <div class="menu-lateral" id="menu-lateral">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../img/levels.png" alt="">Iniciante
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button" onclick="window.location.href='../intermediario/intro_interm.php'">Intermediário</button> <!-- onclick="window.location.href='../intermediario/intro_interm.php'" -->
                <button class="dropdown-item" type="button" onclick="window.location.href='../conteudo_teorico/intro_avanc.php'">Avançado</button>
            </div>
        </div>

        <hr class="levels_line mt-1 mb-3">

        <button type="button" class="close-btn">
            <img src="../img/close-btn.png" onclick="close_menu()"></img>
        </button>

        <div class="img-div">
            <img src="../img/logo_oficial_branca.svg" class="img-logo"></img>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item py-2">
                <a class="nav-link" href="../conteudo_teorico/levels_selection.php" style="color:white;">Página Inicial</a>
            </li>

            <li class="nav-item py-2">
                <a class="nav-link" href="../Trail.php" style="color:white;">Trilha de Progresso</a>
            </li>

            <li class="nav-item py-2">
                <a class="nav-link" href="../conteudo_teorico/intro.php" style="color:white;">Introdução</a>
            </li>
            <li class="nav-item py-2" type="button" data-toggle="collapse" data-target="#XssRef" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" style="color:white;">XSS Refletido</a>
            </li>
            <ul class="collapse ul-subitem" id="XssRef">
                <li class="nav-subitem">
                <a href="../conteudo_teorico/intro_refletido.php">Introdução</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../tutoriais_iniciante/lab1-refletido1.php">Laboratório 1</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../tutoriais_iniciante/lab2-refletido1.php">Laboratório 2</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../questionarios/quiz_refletido.php">Perguntas</a><br>
                </li>
            </ul>
            <li class="nav-item py-2" type="button" data-toggle="collapse" data-target="#xssarm" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" style="color:white;">XSS Armazenado</a>
            </li>
            <ul class="collapse ul-subitem" id="xssarm">
                <li class="nav-subitem">
                <a href="../conteudo_teorico/intro_armazenado.php">Introdução</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../tutoriais_iniciante/lab1-armazenado1.php">Laboratório 1</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../tutoriais_iniciante/lab2-armazenado1.php">Laboratório 2</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../questionarios/quiz_armazenado.php">Perguntas</a><br>
                </li>
            </ul>
            <li class="nav-item py-2" type="button" data-toggle="collapse" data-target="#xssdom" aria-expanded="false" aria-controls="opcoes">
                <a class="nav-link active" aria-current="page" style="color:white;">XSS DOM</a>
            </li>
            <ul class="collapse ul-subitem" id="xssdom">
                <li class="nav-subitem">
                <a href="../conteudo_teorico/intro_dom.php">Introdução</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../tutoriais_iniciante/lab1-dom1.php">Laboratório 1</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../tutoriais_iniciante/lab2-dom1.php">Laboratório 2</a><br>
                </li>
                <li class="nav-subitem">
                <a href="../questionarios/quiz_dom.php">Perguntas</a><br>
                </li>
            </ul>
        </ul>

        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <?php echo "<div class='progress-bar bg-success' style='width:".$calculatedPercentageBasic."%'>".$calculatedPercentageBasic."%</div>" ?>
        </div>

        <p class="pontuacao">Pontuação: <?php echo $calculatedScoreBasic; ?> XP</p>

        <div class="login-info" id="login-info"></div>
        <a href="../login/login.php">Trocar de Usuário</a><br>

        <div class="medalhas">

            <img class="medalha_iniciante" id="medalha_iniciante" src="<?php echo $medalha; ?>" alt="" width="60px">
            <img class="medalha_intermediario" id="medalha_intermediario" src="<?php echo $medalha_interm; ?>" alt="" width="60px">
            <img class="medalha_avancado" id="medalha_avancado" src="<?php echo $medalha_avanc; ?>" alt="" width="60px">

        </div>

        <button id='comment-delete' name='comment-delete' class='clear-button'>Limpar Comentários</button>
    </div>

<div class="menu-lateral-closed btn-menu-hidden" style="text-align: center;"><img src="../img/mobile.png" alt=""></div>

</body>

<script>

const wipeCommentsBtn = document.getElementById('comment-delete');
wipeCommentsBtn.addEventListener('click', () => {
    fetch('../php/wipeComments.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
    .then(response => response.text())
    .then(result => {
        alert('Comentários apagados para todos os níveis.');
         window.location.reload(); 
    })
    .catch(error => {
        console.error('Erro ao apagar comentários:', error);
    });
});


function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function populateUserInfo() {
    const username = getCookie('username');
    const loginInfoDiv = document.getElementById('login-info');

    if (!username) {
        username = 'Convidado'
    }

    loginInfoDiv.innerHTML = `Logado como ${username}`;
}

window.onload = populateUserInfo();

</script>

