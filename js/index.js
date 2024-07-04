const typewriters = document.querySelectorAll('.writer');
const button = document.querySelectorAll('.button_next');

function typeParagraph(index) {
    const typewriter = typewriters[index];
    const text = typewriter.textContent;
    let charIndex = 0;
    typewriter.textContent = '';
    typewriter.style.display = 'block';

    function typeCharacter() {
        typewriter.textContent += text[charIndex];
        charIndex++;

        if (charIndex < text.length) {
            setTimeout(typeCharacter, 20); 
        } else {

            setTimeout(() => {
                if (index < typewriters.length - 1) {
                    typeParagraph(index + 1);
                } else {
                    button[0].style.display = 'block';
                }
            }, 0);
        }
    }

    typeCharacter();

    
}

typeParagraph(0);


