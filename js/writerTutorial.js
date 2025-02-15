const typewriters = document.querySelectorAll('.writer');
var cursor = document.createElement('span');
cursor.id = 'cursor';
let isTyping = false; // Variável de controle para verificar se a função está sendo executada já

function typeParagraph(index) {
    if (index >= typewriters.length || isTyping) return; // Verifica se a função já está em execução e para.
    isTyping = true; // Marca como em execução 
    //Função que já estava pronta
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
                isTyping = false; // Marca como concluído
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

const observer = new IntersectionObserver((entries) => { 
    entries.forEach((element) => {
      if (element.isIntersecting) {
            typeParagraph(0);
        }    
      });
}, {
    root: null, //Aqui estabelece que a função deve executar de forma padrão, ou seja, baseado na tela
    rootMargin: '0px', //Zero margem para não começar a escrever antes
    threshold: 0.1 //Define que só quando 10% do balão aparecer deve começar a escrever.
});

observer.observe(document.querySelector('.writer')); //Chama a função para ficar de olho no "writer" 

function robotPosition(caso) {
    let speechList = document.getElementsByClassName("robot-speech");
    let robotList = document.getElementsByClassName("robot");
    let containerList = document.getElementsByClassName("container-robot");

    let speech = speechList[0];
    let robot = robotList[0];
    let container = containerList[0];

    adjustContainer();

    switch (caso) {
        case "ES":
            robot.style.top = (speech.offsetTop + speech.offsetHeight - 115) + "px";
            robot.style.left = (speech.offsetLeft + speech.offsetWidth - 10) + "px";
            break;
        case "DS":
            robot.style.top = (speech.offsetTop + speech.offsetHeight - 80) + "px";
            robot.style.left = (speech.offsetLeft - 90) + "px";
            break;
        case "EI":
            robot.style.top = (speech.offsetTop - 110) + "px";
            robot.style.left = (speech.offsetLeft + speech.offsetWidth - 40) + "px";
            break;
        case "DI":
            robot.style.top = (speech.offsetTop - 170) + "px";
            robot.style.left = (speech.offsetLeft - 50) + "px";
            break;
        case "EMI":
            robot.style.top = (speech.offsetTop - 160) + "px";
            robot.style.left = (speech.offsetLeft + speech.offsetWidth - 180) + "px";
            break;
        case "MI":
            robot.style.top = (speech.offsetTop - 175) + "px";
            robot.style.left = (speech.offsetLeft + 50) + "px";
            break;
        case "EIA":
            robot.style.top = (speech.offsetTop - 180) + "px";
            robot.style.left = (speech.offsetLeft + speech.offsetWidth - 80) + "px";
            break;
        default:
            console.warn(`Unknown case: ${caso}`);
            break;
    }

    scaleContainer();
}

  function scaleContainer() { 
    const container = document.querySelector('.container-robot');
    const originalWidth = 800; // Largura original da viewport
    let scale = 1; // Valor padrão de escala
    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;
    let centralize = false;
    
    // Verifica se o container .image-container existe
    const imageContainer = document.querySelector('.image-container');
    const sideImageContainer = document.querySelector('.side-image-container');

    if (imageContainer) { // tutoriais_iniciante com imagem de pc
        const imageWidth = imageContainer.offsetWidth;
        scale = (imageWidth / originalWidth); // Valor arbitrário
    } else if (sideImageContainer) {
        centralize = true;
            scale = viewportWidth / originalWidth * 0.6;
        if (scale > 1) scale = 1;
    } else{ // Tutorial com só texto e robozinho
        centralize = true;
        if (viewportWidth < 1050 ){
            scale = viewportWidth / originalWidth * 0.7;
            if (viewportWidth < 800) {
                scale = 0.6;
            }
        }
    }
    const containerStyle = container.style;
    let transform = containerStyle.transform || '';

    if (transform === '' || transform === 'none') {
        transform = "translate(0px, 0px) scale(1)";
    }
    let translateX = 0, translateY = 0; 
    const translateMatch = transform.match(/translate\(([^,]+)vw, ([^,]+)vw\)/);
    if (translateMatch) {
        translateX = parseFloat(translateMatch[1]);
        translateY = parseFloat(translateMatch[2]);
    }
    container.style.transform = `translate(${translateX}vw, ${translateY}vw) scale(${scale})`;
    if(centralize === false){
    container.style.transformOrigin = 'top left';
    }
    //console.log(container.style.transformOrigin);
}


function adjustContainer(){ //Ajusta o container do robo de forma a considerar o tamanho dos dois (necessário porque são absolutes)
  const containerList = document.getElementsByClassName("container-robot");
  let container = containerList[0];
  const speech = document.getElementsByClassName("robot-speech")[0];
  const robot = document.getElementsByClassName("robot")[0];
  container.style.height = (speech.offsetHeight + robot.offsetHeight)+"px";
}

function transformContainer(containerStyle, translateXChange, translateYChange){
    let transform = containerStyle.transform || '';
    console.log(transform);
    if (transform === '' || transform === 'none') {
        transform = "translate(0px, 0px) scale(1)";
    }
    let translateX = 0, translateY = 0, scale = 1; 
    const translateMatch = transform.match(/translate\(([^,]+)vw, ([^,]+)vw\)/);
    const scaleMatch = transform.match(/scale\(([^)]+)\)/);

    if (translateMatch) {
        translateX = parseFloat(translateMatch[1]);
        translateY = parseFloat(translateMatch[2]);
    }
    if (scaleMatch) {
        scale = parseFloat(scaleMatch[1]);
    }
    containerStyle.transform = `translate(${translateX + translateXChange}vw, ${translateY + translateYChange}vw) scale(${scale})`;
}
