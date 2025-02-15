
var openButton = document.querySelector('.btn-menu-hidden');
var closeButton = document.querySelectorAll('.close-btn');
var menu = document.getElementById('menu-lateral');
var conteudo = document.querySelector('.content');
var back = document.getElementById('transition-back-lab');
openButton.style.display = "None";

conteudo.style.marginLeft = "21vw";

const stateMenu = localStorage.getItem('state');

if (stateMenu === 'closed') {
    openButton.style.display = "block";
    menu.style.display = "None";
    conteudo.style.marginLeft = "5vw";
    if (back != null){
        back.style.left = "7vw";
    }
    conteudo.style.marginRight = "0px";
}

openButton.addEventListener('click', function () {
    openButton.style.display = "None";
    menu.style.display = "inline-block";
    conteudo.style.marginLeft = "21vw";
    if (back != null){
        back.style.left = "23vw";
    }
    localStorage.setItem('state', 'open');   
});

function close_menu(){
    openButton.style.display = "block";
    menu.style.display = "None";
    conteudo.style.marginLeft = "5vw";
    if (back != null){
        back.style.left = "7vw";
    }
    conteudo.style.marginRight = "0px";
    localStorage.setItem('state', 'closed');

}

