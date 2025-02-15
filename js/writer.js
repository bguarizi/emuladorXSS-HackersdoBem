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