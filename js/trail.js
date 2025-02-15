

//Dicionário do posicinamento dos botões - Importante manter nomenclatura
const buttonsInfo = [
    { buttonId: 'button1',  originalX: 0, originalY: 515, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button2',  originalX: 180, originalY: 457, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button3', originalX: 380, originalY: 420, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button4',  originalX: 490, originalY: 500, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button5',  originalX: 670, originalY: 570, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button6', originalX: 860, originalY: 460, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button7',  originalX: 1000, originalY: 410, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button8',  originalX: 1170, originalY: 380, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button9', originalX: 1350, originalY: 530, originalWidth: 95, originalHeight: 95 },
    /*{ buttonId: 'button10',  originalX: 1005, originalY: 225, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button11',  originalX: 1135, originalY: 400, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button12', originalX: 1170, originalY: 670, originalWidth: 95, originalHeight: 95 },
    { buttonId: 'button13', originalX: 1350, originalY: 480, originalWidth: 95, originalHeight: 95 }*/
]; 

function updateLevelPhases(progressData) {
    // Filter and map task_ids less than or equal to 9
    console.log(progressData);  

    var completedTasks = progressData
        .map(item => parseInt(item.task_id))
        .filter(taskId => taskId <= 9);

    console.log(completedTasks);  
    var levels = Object.keys(levelPhaseStatus);
    var minNotLevel = null;
    for (var i = 0; i < levels.length; i++) {
        var levelKey = levels[i];
        var levelNumber = parseInt(levelKey.replace('level', '')); 
        if (completedTasks.includes(levelNumber)) {
            levelPhaseStatus[levelKey].status = 'done';
            //console.log(levelPhaseStatus[levelKey]);

        } else if (levelPhaseStatus[levelKey].status === 'not'){
            var levelNumber = parseInt(levelKey.replace('level', ''));
            if (minNotLevel === null || levelNumber < minNotLevel) {
                minNotLevel = levelNumber;
            }
        }
    }
    if (minNotLevel !== null) {
        var minNotLevelKey = 'level' + minNotLevel;
        levelPhaseStatus[minNotLevelKey].status = 'available';
    }


}

//Dicionário como alternativa enquanto não há integração com o banco de dados.

//Se status = not, não foi feito e não pode ser acessado
//Se status = availabe, não foi feito, mas pode ser acessado
//Se status = done, foi feito e ainda pode ser acessado
var levelPhaseStatus = {
    level1: { phase: './tutoriais_iniciante/lab1-refletido1', status: 'not', typeButton: 'skull' },
    level2: { phase: './tutoriais_iniciante/lab2-refletido1', status: 'not', typeButton: 'skull' },
    level3: { phase: './questionarios/quiz_refletido', status: 'not', typeButton: 'book' },
    level4: { phase: './tutoriais_iniciante/lab1-armazenado1', status: 'not', typeButton: 'skull' },
    level5: { phase: './tutoriais_iniciante/lab2-armazenado1', status: 'not', typeButton: 'skull' },
    level6: { phase: './questionarios/quiz_armazenado', status: 'not', typeButton: 'book' },
    level7: { phase: './tutoriais_iniciante/lab1-dom1', status: 'not', typeButton: 'skull' },
    level8: { phase: './tutoriais_iniciante/lab2-dom1', status: 'not', typeButton: 'skull' },
    level9: { phase: './questionarios/quiz_dom', status: 'not', typeButton: 'medal' }
    /*level10: { phase: 'fase10', status: 'done', typeButton: 'goldenSkull' },
    level11: { phase: 'fase11', status: 'done', typeButton: 'book' },
    level12: { phase: 'fase12', status: 'done', typeButton: 'paper' },
    level13: { phase: 'fase13', status: 'not', typeButton: 'medal' }*/
};

/*Não utilizada no momento */
function toggleBar() {
    var topBar = document.querySelector('.top-bar');
    topBar.style.display = (topBar.style.display === 'none') ? 'flex' : 'none';
}

//Atualizando progresso 

function updateProgressBar() {
    var totalLevels = Object.keys(levelPhaseStatus).length;
    var completedLevels = Object.values(levelPhaseStatus).filter(level => level.status === 'done').length; 
    var progressPercentage = (completedLevels / totalLevels) * 100;

    var progressBarFill = document.querySelector('.progress-fill');
    progressBarFill.style.width = `${progressPercentage}%`;
}
window.addEventListener('load', updateProgressBar);

//Dicionário de estados para atualização da imagem
var imageButton = {
    skull: { not: 'images/trail/Buttons/normal-skull.png', done: 'images/trail/Buttons/done-normal-skull.png', available: 'images/trail/Buttons/available-skull.png' },
    goldenSkull: { not: 'images/trail/Buttons/golden-skull.png', done: 'images/trail/Buttons/done-golden-skull.png', available: 'images/trail/Buttons/available-skull.png' },
    book: { not: 'images/trail/Buttons/book.png', done: 'images/trail/Buttons/done-book.png', available: 'images/trail/Buttons/available-book.png'},
    medal: { not: 'images/trail/Buttons/medal.png', done: 'images/trail/Buttons/done-medal.png', available: 'images/trail/Buttons/available-medal.png'},
    paper: { not: 'images/trail/Buttons/paper.png', done: 'images/trail/Buttons/done-paper.png', available:  'images/trail/Buttons/available-paper.png'}
}


//Posicionando os botões
function positionButton(buttonId, originalX, originalY, originalWidth, originalHeight){
    const baseImage = document.getElementById('base-image');
    const buttonImage = document.getElementById(buttonId);

    const originalImgWidth = 1440;
    const originalImgHeight = 1024;

    const containerWidth = baseImage.clientWidth;
    const containerHeight = baseImage.clientHeight;

    const scaleX = containerWidth / originalImgWidth;
    const scaleY = containerHeight / originalImgHeight;

    const newButtonX = originalX * scaleX;
    const newButtonY = originalY * scaleY;
    const newButtonWidth = originalWidth * scaleX;
    const newButtonHeight = originalHeight * scaleY;
   
    if (buttonImage) {
        buttonImage.style.left = `${newButtonX}px`;
        buttonImage.style.top = `${newButtonY}px`;
        buttonImage.style.width = `${newButtonWidth}px`;
        buttonImage.style.height = `${newButtonHeight}px`;
        buttonImage.style.opacity = 1;
        const level = `level${buttonId.replace('button', '')}`;
        updateButtonImage(buttonId, level);
    }
    var DonebuttonId =  getLastAvailableElementPosition();
    if (DonebuttonId === buttonId){
    RobotPosition(newButtonX, newButtonY, newButtonWidth, newButtonHeight);
    }
}

//Posicionando todos os botões + o robô 
function positionAllButtons() {
    buttonsInfo.forEach(info => {
        positionButton(info.buttonId, info.originalX, info.originalY, info.originalWidth, info.originalHeight);
    });
    const buttons = document.querySelectorAll('.buttons'); 
    buttons.forEach(button => {
    button.style.opacity = 1; 
     });
    const container = document.querySelector('#trail-container')
    container.style.opacity = 1;
}

window.addEventListener('load', positionAllButtons);
window.addEventListener('resize', positionAllButtons);

//Atualizando imagem dos botões segundo dicionário de estados
function updateButtonImage(buttonId, level) {
    const buttonImage = document.getElementById(buttonId);
    const status = levelPhaseStatus[level].status; 
    const typeButton = levelPhaseStatus[level].typeButton;

    if (buttonImage && status && typeButton) {
        let imageUrl; 

        if (status === 'done') {
            imageUrl = imageButton[typeButton].done;
        } else if (status === 'available') {
            imageUrl = imageButton[typeButton].available;
        } else {
            imageUrl = imageButton[typeButton].not;
        }


        buttonImage.src = imageUrl;
    }
}



//Função aplicada individualmente à cada botão para acesso à fase desejada por meio do clique
function redirecttoPage(level) {
    const levelInfo = levelPhaseStatus[level];
    const page = `${levelInfo.phase}.php`;
    window.location.href = page; 
}

//Posicionando o robô
function getLastAvailableElementPosition() {
    let lastAvailableLevel = null;
    let previousLevel = null;
    let levels = Object.keys(levelPhaseStatus);
    for (let i = 0; i < levels.length; i++) {
        let level = levels[i];
        if (levelPhaseStatus[level].status === 'available') {
            lastAvailableLevel = level;
            previousLevel = i > 0 ? levels[i - 1] : null; 
        }
    }
    if (previousLevel) {
        let buttonId = `button${previousLevel.replace('level', '')}`;
        let button = document.querySelector(`#${buttonId}`);  
        if (button) {
            return buttonId;
        } else {
            console.error(`Botão com ID '${buttonId}' não encontrado.`);
        }
    } else if (lastAvailableLevel){
        return null;
    } else {
        lastAvailableLevel = null;
        for (let level in levelPhaseStatus) {
            if (levelPhaseStatus[level].status === 'done') {
                lastAvailableLevel = level;
            }
        }
        if (lastAvailableLevel) {   
            let buttonId = `button${lastAvailableLevel.replace('level', '')}`;
            let button = document.querySelector(`#${buttonId}`);  
            if (button) {
                return buttonId;
            } else {
                console.error(`Botão com ID '${buttonId}' não encontrado.`);
            }
        }
        return null;
    }
    return null;
}

//Setando imagem do Robo com base nessa posição.
function RobotPosition(ButtonX, ButtonY, ButtonWidth, ButtonHeight){
    var robot = document.getElementById('robot');
    robot.style.left = `${ButtonX + ((ButtonWidth/2) - (ButtonWidth * 0.9)/2)}px`;
    robot.style.top = `${ButtonY - (ButtonHeight/5)}px`;
    robot.style.width = `${ButtonWidth * 0.9}px`;
    robot.style.height = `${ButtonHeight * 0.9}px`;
    robot.style.opacity = "1";
    robot.style.zIndex = "3";
    console.log(robot);
}

    function returnMenu() {
        window.location.href = './conteudo_teorico/levels_selection.php';
    }