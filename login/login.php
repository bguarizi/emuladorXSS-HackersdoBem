<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/levels_selection.css" rel="stylesheet">
    <link href="../css/index_general.css" rel="stylesheet">
    <link href="../css/tutorial_lab.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/scriptGlossario.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min4.5.js"></script>
    <title>Login</title>
</head>

<body>

    <div class="container pt-3" style="text-align:center; padding-top:80px;">

    <div class ="container-robot">
            <div class="robot-speech">
                <p class="writer central-text mb-0" id="balloon-text">
                Olá! Escolha ou crie um usuário para iniciar sua jornada de aprendizado.          
                  </p>
            </div>
            <div class="robot d-inline-flex align-items-center justify-content-center">
                <img src="../img/robot.png" alt="robot-icon" width="200px" height="200px">
            </div>
    </div>



    <ul style="padding-bottom: 30px;" id="user-list">
    </ul>

    <div class="buttons-user ">
    <button class="btn transition-button login-button create-button py-3" id="create-user-btn">Criar Novo Usuário <img src="../img/add_user.png" alt=""> </button>
    </div>
    <div class="buttons-user" style="padding-bottom: 60px;">
    <button class="btn transition-button login-button clear-button py-3" id="wipe-user-btn">Apagar Progresso do Usuário Atual <img src="../img/remove_user.png" alt="" width=25px></button>
    </div>

    </div>

    <script>

        const userListElement = document.getElementById('user-list');
        const createUserBtn = document.getElementById('create-user-btn');
        const wipeUserBtn = document.getElementById('wipe-user-btn');

        function renderUserList(users) {
            userListElement.innerHTML = '';
            users.forEach(user => {
                const button = document.createElement('button');
                button.className = 'btn transition-button login-button select-button py-3'; // Adiciona a classe ao botão
                button.style.cursor = 'pointer';

                const li = document.createElement('li');
                button.textContent = user;

                const img = document.createElement('img');

                img.src = '../img/user.png';

                button.appendChild(img)
                
                li.appendChild(button);
                
                button.addEventListener('click', () => {
                    document.cookie = `username=${user}; path=/`;
                    alert(`Logado como ${user}!`);
                    window.location.href = '../conteudo_teorico/levels_selection.php';
                });
                userListElement.appendChild(li);
            });
        }

        function getUsers() {
            fetch('../php/getUsers.php')
                .then(response => response.json())
                .then(users => {
                    renderUserList(users);
                })
                .catch(error => {
                    console.error('Não foi possível encontrar usuários:', error);
                });
        }

        createUserBtn.addEventListener('click', () => {
            const newUser = prompt("Insira o nome de usuário desejado:");
            if (newUser) {
                fetch('../php/createUser.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `login=${encodeURIComponent(newUser)}`
                })
                .then(response => response.text())
                .then(result => {
                    alert(result);
                    getUsers();
                })
                .catch(error => {
                    console.error('Erro ao criar usuário:', error);
                });
            }
        });

        wipeUserBtn.addEventListener('click', () => {
            const username = getCookie('username');

            if (!username) {
                username = 'Convidado'
            }

            fetch('../php/wipeUserProgress.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `user=${encodeURIComponent(username)}`
            })
            .then(response => response.text())
            .then(result => {
                alert(`Progresso apagado para o usuário ${username}.`);
                window.location.href = '../conteudo_teorico/levels_selection.php';
            })
            .catch(error => {
                console.error('Erro ao apagar progresso:', error);
            });
        });

        getUsers();

        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }




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


<script>
    var javascriptCode = "<?php echo glossary($conn); ?>";
    eval(javascriptCode); 
</script>
</body>
</html>
