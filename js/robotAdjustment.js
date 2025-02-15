
const containerStyle = document.querySelector('.container-robot').style;
let imgSource = closeButton[0].querySelector('img');

function positionRobotForMenuState(){
    if(stateMenu == 'closed'){
    robotPosition(caso); 
    scaleContainer();
}
openButton.addEventListener('click', function () {
    robotPosition(caso); 
    scaleContainer();
});
imgSource.addEventListener('click', function () {
    robotPosition(caso); 
    scaleContainer();
});
}

function transformRobotForMenuState(changeX, changeY){
    if(stateMenu == 'closed'){
        transformContainer(containerStyle, -changeX, -changeY); 
        scaleContainer();
    }
    
    openButton.addEventListener('click', function () {
        transformContainer(containerStyle, changeX, changeY); 
        scaleContainer();
    });
    
    let imgSource = closeButton[0].querySelector('img');
    imgSource.addEventListener('click', function () {
        transformContainer(containerStyle, -changeX, -changeY); 
        scaleContainer();
    });
}


document.querySelectorAll('.btn').forEach(element => {
    element.ondragstart = function() { 
        return false; 
    };
});