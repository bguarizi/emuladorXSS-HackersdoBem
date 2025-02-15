const typewriters = document.querySelectorAll('.writer');
var cursor = document.createElement('span');
cursor.id = 'cursor';
let isTyping = false; // Variável de controle para verificar se a função está sendo executada já
const transitionNext = document.getElementById('transition-next');
function typeParagraph(index) {
    if (index >= typewriters.length || isTyping) return; // Verifica se a função já está em execução e para.
    isTyping = true; // Marca como em execução 
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
                isTyping = false; 
            }, 0);
        }
    }

    typeCharacter();

}
firstRobot = document.querySelector('#first-robot');

const observer = new IntersectionObserver((entries, observer) => { 
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            if (entry.target.id === 'first-speech' && firstRobot.style.display !== 'none') {
                typeParagraph(0);
            } else if (entry.target.id === 'second-speech') {
                typeParagraph(1);
            }
        }    
    });
}, {
    root: null, // A função executa com base na tela
    rootMargin: '0px', // Zero margem para não começar a escrever antes
    threshold: 0.1 // Define que só quando 10% do balão aparecer deve começar a escrever
});

observer.observe(document.querySelector('#first-speech'));
observer.observe(document.querySelector('#second-speech'));
var errorCount = 0;
document.querySelector('#quizForm').addEventListener('submit', function(event) {
    transitionNext.style.display = 'block';
    event.preventDefault();
    let score = 0;
    const wrongSymbol = `
    <div id="wrong-symbol" class="symbol">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
    </svg>
    </div>`;

    const rightSymbol = `
        <div id="right-symbol" class="symbol">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
    </svg>
        </div>`;

    for (let question in correctAnswers) {
        const selectedOption = document.querySelector(`input[name="${question}"]:checked`);
        if (selectedOption && selectedOption.value === correctAnswers[question]) {
            score++;
        }
    }
    const errorMessages = ["Parece que há algo errado! Tente novamente.", "Uma ou mais respostas estão erradas! Tente novamente."];
    const allSymbols = document.querySelectorAll('.symbol');
    allSymbols.forEach(symbol => symbol.remove());

    const markedCorrect = document.querySelectorAll('.correct');
    markedCorrect.forEach(element => element.classList.remove('correct'));
    
    for (let question in correctAnswers) {
    const checkedOptions = document.querySelectorAll(`input[name="${question}"]:checked`);
    checkedOptions.forEach(option => {
    let parentLabel = option.parentElement;
    let brotherSpan = option.nextElementSibling;
        if (option.value === correctAnswers[question]) {
            if (!parentLabel.innerHTML.includes("<div id=\"right-symbol\" class=\"symbol\">")) {
                parentLabel.insertAdjacentHTML('afterbegin', rightSymbol); 
                brotherSpan.classList.add('correct');
            }
        } else {
            if (!parentLabel.innerHTML.includes("<div id=\"wrong-symbol\" class=\"symbol\">")) {
                parentLabel.insertAdjacentHTML('afterbegin', wrongSymbol);
            }
    option.classList.add('modified');
    }
});   
}
    if(score != 3) {
        const errorContainer = document.getElementById('error-container');
        if (errorContainer) {
                if (errorCount % 2 === 0) {
                    errorContainer.innerText = errorMessages[0];
                } else {
                    errorContainer.innerText = errorMessages[1];
                }
        errorCount++;
        }
    } else{
        document.getElementById('submit-container').innerHTML = resultsHtml;
        const typewriters = document.getElementsByClassName('writer');
        const robotFirstSpeech = document.getElementById('first-robot');  
        const robotSecondSpeech = document.getElementById('second-robot');       
        robotFirstSpeech.style.display = 'none';
        robotSecondSpeech.style.display = 'block';
        console.log(transitionNext.style.display);
    }
});

