
var openButton = document.querySelector('.btn-menu-hidden');
var closeButton = document.querySelectorAll('.close-btn');
var menu = document.getElementById('menu-lateral');

openButton.style.display = "None";

var content = document.getElementById("content");

openButton.addEventListener('click', function () {
    openButton.style.display = "None";
    menu.style.display = "inline-block";
});

function close_menu(){
    openButton.style.display = "block";
    menu.style.display = "None";
}





// Função para remover a classe 'ativo' de todos os subitens
function removeAtivoFromSubitems() {
    document.querySelectorAll('.itens-submenu li').forEach(function(submenuItem) {
        submenuItem.classList.remove('ativo');
    });
}

// Adiciona o evento de clique a cada item do submenu
document.querySelectorAll('.itens-submenu li').forEach(function(item) {
    item.addEventListener('click', function() {
        // Remove a classe 'ativo' de todos os subitens
        removeAtivoFromSubitems();
        // Adiciona a classe 'ativo' apenas ao item de submenu clicado
        this.classList.add('ativo');
    });
});

// Adiciona o evento de clique a cada item do menu principal
document.querySelectorAll('.item-menu').forEach(function(item) {
    item.addEventListener('click', function() {
        // Remove a classe 'ativo' de todos os subitens
        removeAtivoFromSubitems();
    });
});

//>>> Abrir e fechar o menu lateral
var menuItem = document.querySelectorAll('.item-menu');

function selectLink(){
    menuItem.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

// Adiciona o evento de clique a cada item do sub-menu
document.querySelectorAll('.itens-submenu').forEach(function(item) {
    item.addEventListener('click', selectLink);
});

// Adiciona o evento de clique a cada item do menu
document.querySelectorAll('.item-menu').forEach(function(item) {
    item.addEventListener('click', selectLink);
});

//>>> Expansão do menu
var btnExp = document.querySelector('#btn-exp');
var menuSide = document.querySelector('.menu-lateral');
var menuItems = document.querySelectorAll('.itens-submenu');

btnExp.addEventListener('click', function () {
    if (menuSide.classList.contains('expandir')) {
        menuItems.forEach(function(item) {
            item.style.opacity = '0'; // Oculta os itens do menu
        });
        menuSide.classList.remove('expandir'); // Remove a classe 'expandir' para recolher o menu
    } else {
        menuSide.classList.add('expandir'); // Adiciona a classe 'expandir' para expandir o menu
        menuItems.forEach(function(item) {
            item.style.opacity = '1'; // Torna os itens do menu visíveis
        });
    }
});

//>>> Expansão do submenu
// Função para alternar a visibilidade do submenu
function toggleSubMenu(event) {
    var subMenu = event.currentTarget.nextElementSibling;
    subMenu.classList.toggle('expand');
}

//>>> Visualização de conteúdo
document.addEventListener('DOMContentLoaded', function() {
    var linkPaginaInicial = document.getElementById('link-pagina-inicial'); // Seleciona o link "Página Inicial"
    var linkIndex = document.getElementById('xss-intro-index'); // Seleciona o link "Tópico 1" de XSS Introdução
    var linkIntro_topico_1 = document.getElementById('xss-intro-topico-1'); // Seleciona o link "Tópico 2" de XSS Introdução
    var linkIntro_topico_2 = document.getElementById('xss-intro-topico-2'); // Seleciona o link "Tópico 3" de XSS Introdução
    var linkReflected_topico_1 = document.getElementById('xss-refletido-topico-1'); // Seleciona o link "Tópico 1" de XSS Refletido
    var linkReflected_topico_2 = document.getElementById('xss-refletido-topico-2'); // Seleciona o link "Tópico 2" de XSS Refletido
    
    var conteudo = document.getElementById('conteudo');

    linkPaginaInicial.addEventListener('click', function(event) {
        // Impede o comportamento padrão de seguir o link
        event.preventDefault();
        
        // Faz uma requisição HTTP GET para o arquivo "inicio.html"
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'inicio.html', true);

        // Define a função de callback para quando a requisição for concluída
        xhr.onload = function() {
            // Verifica se a requisição foi bem-sucedida (código de status 200)
            if (xhr.status === 200) {
                // Insere o conteúdo da resposta no elemento de conteúdo
                conteudo.innerHTML = xhr.responseText;
            } else {
                // Se a requisição falhar, exibe uma mensagem de erro
                conteudo.innerHTML = 'Erro ao carregar o conteúdo.';
            }
        };

        // Envia a requisição
        xhr.send();
    });

    linkIndex.addEventListener('click', function(event) {
        // Impede o comportamento padrão de seguir o link
        event.preventDefault();
        
        // Faz uma requisição HTTP GET para o arquivo "index.html"
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'index.html', true);

        // Define a função de callback para quando a requisição for concluída
        xhr.onload = function() {
            // Verifica se a requisição foi bem-sucedida (código de status 200)
            if (xhr.status === 200) {
                // Insere o conteúdo da resposta no elemento de conteúdo
                conteudo.innerHTML = xhr.responseText;
            } else {
                // Se a requisição falhar, exibe uma mensagem de erro
                conteudo.innerHTML = 'Erro ao carregar o conteúdo.';
            }
        };

        // Envia a requisição
        xhr.send();

        // Chama o arquivo index.js
        var script = document.createElement('script');
        script.src = "index.js";
        document.head.appendChild(script);
    });

    linkIntro_topico_1.addEventListener('click', function(event) {
        // Impede o comportamento padrão de seguir o link
        event.preventDefault();
        
        // Faz uma requisição HTTP GET para o arquivo "xss_1.html"
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'xss_1.html', true);

        // Define a função de callback para quando a requisição for concluída
        xhr.onload = function() {
            // Verifica se a requisição foi bem-sucedida (código de status 200)
            if (xhr.status === 200) {
                // Insere o conteúdo da resposta no elemento de conteúdo
                conteudo.innerHTML = xhr.responseText;
            } else {
                // Se a requisição falhar, exibe uma mensagem de erro
                conteudo.innerHTML = 'Erro ao carregar o conteúdo.';
            }
        };

        // Envia a requisição
        xhr.send();
    });

    linkIntro_topico_2.addEventListener('click', function(event) {
        // Impede o comportamento padrão de seguir o link
        event.preventDefault();
        
        // Faz uma requisição HTTP GET para o arquivo "xss_2.html"
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'xss_2.html', true);

        // Define a função de callback para quando a requisição for concluída
        xhr.onload = function() {
            // Verifica se a requisição foi bem-sucedida (código de status 200)
            if (xhr.status === 200) {
                // Insere o conteúdo da resposta no elemento de conteúdo
                conteudo.innerHTML = xhr.responseText;
            } else {
                // Se a requisição falhar, exibe uma mensagem de erro
                conteudo.innerHTML = 'Erro ao carregar o conteúdo.';
            }
        };

        // Envia a requisição
        xhr.send();
    });

    linkReflected_topico_1.addEventListener('click', function(event) {
        // Impede o comportamento padrão de seguir o link
        event.preventDefault();
        
        // Faz uma requisição HTTP GET para o arquivo "xss_2.html"
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'xss_refletido_1.html', true);

        // Define a função de callback para quando a requisição for concluída
        xhr.onload = function() {
            // Verifica se a requisição foi bem-sucedida (código de status 200)
            if (xhr.status === 200) {
                // Insere o conteúdo da resposta no elemento de conteúdo
                conteudo.innerHTML = xhr.responseText;
            } else {
                // Se a requisição falhar, exibe uma mensagem de erro
                conteudo.innerHTML = 'Erro ao carregar o conteúdo.';
            }
        };

        // Envia a requisição
        xhr.send();
    });

    linkReflected_topico_2.addEventListener('click', function(event) {
        // Impede o comportamento padrão de seguir o link
        event.preventDefault();
        
        // Faz uma requisição HTTP GET para o arquivo "xss_2.html"
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'tutorial_store_front_end/index.html', true);

        // Define a função de callback para quando a requisição for concluída
        xhr.onload = function() {
            // Verifica se a requisição foi bem-sucedida (código de status 200)
            if (xhr.status === 200) {
                // Insere o conteúdo da resposta no elemento de conteúdo
                conteudo.innerHTML = xhr.responseText;
            } else {
                // Se a requisição falhar, exibe uma mensagem de erro
                conteudo.innerHTML = 'Erro ao carregar o conteúdo.';
            }
        };

        // Envia a requisição
        xhr.send();
    });

});

