//Seção de Comentários
const commentForm = document.getElementById('comment-form');
const commentInput = document.getElementById('comment-input');
const commentsContainer = document.getElementById('comments-container');
commentForm.addEventListener('submit', function (event) {
    const commentText = commentInput.value.trim();
    if (commentText != '') {
        addComment(commentText);
        // commentInput.value = ''; Razao do Erro
    }
});


//Adicionando à seção de comentarios o texto

function addComment(text) {
    const commentElement = document.createElement('div');
    commentElement.classList.add('comment');

    const starsSymbols = document.createElement('strong');
    starsSymbols.textContent = '★★★★ 4.0'
    starsSymbols.classList.add('comment-stars');

    const now = new Date();
    const formattedDate = formatDate(now);
    const commentDate = document.createElement('p');
    commentDate.textContent = formattedDate;
    commentDate.classList.add('comment-date');


    const commentContent = document.createElement('p');
    commentContent.textContent = text;
    commentContent.classList.add('comment-content');


    commentElement.appendChild(starsSymbols); // Adiciona o número de estrelas e os símbolos de estrela ao lado do comentário
    commentElement.appendChild(commentDate);
    commentElement.appendChild(commentContent);
    commentElement.appendChild(document.createElement('br'));

    commentsContainer.appendChild(commentElement);
}


//Formatando a data
function formatDate(date) {
    const months = ['jan.', 'fev.', 'mar.', 'abr.', 'mai.', 'jun.', 'jul.', 'ago.', 'set.', 'out.', 'nov.', 'dez.'];
    const day = date.getDate().toString().padStart(2, '0');
    const month = months[date.getMonth()];
    return `${day} ${month}`;
}

//Barras de Avaliacao
const ratings = [27, 4, 3, 2, 1]; // Valores arbitrários para preencher as barras
let somadeUsuarios = 0;
for (let i = 0; i < ratings.length; i++) {
    somadeUsuarios += ratings[i];
}

const bars = document.querySelectorAll('.progress-bar');
const progressBarContainer = document.querySelector('.progress-bar-container');
;


bars.forEach((bar, index) => {
    bar.style.width = `${(ratings[index] * 100) / somadeUsuarios}%`;
});

//Coracao
const heartSymbol = document.getElementById('heart-symbol');
let isRed = false;

heartSymbol.addEventListener('click', function () {
    if (isRed) {
        heartSymbol.src = 'img/heart_symbol.png';
        isRed = false;
    } else {
        heartSymbol.src = 'img/red_heart_symbol.png';
        isRed = true;
    }
});

//Reajuste de posicao da porcao inferior do primeiro cartao
function resizing() {
    if (bananaImage.offsetHeight < titleText.offsetHeight + 74) {
        container.style.position = "relative";
    } else {
        container.style.top = "50%"
        container.style.position = "absolute";
    }
}
let container = document.querySelector('.inferior-card')
let bananaImage = document.querySelector('#banana-image')
let titleText = document.querySelector('.card-title')
window.addEventListener('resize', resizing)
if (bananaImage.offsetHeight < titleText.offsetHeight + 30) {
    container.style.position = "relative";
} else {
    container.style.position = "absolute";
    container.style.top = "50%";
}
