   
document.getElementById('copyButton').addEventListener('click', function() {
    const codeBlock = document.getElementById('codeBlock').innerText;
    navigator.clipboard.writeText(codeBlock).then(() => {
        document.getElementById('copyButton').style.display = 'None';
        document.getElementById('copied').style.display = 'Block';
    }).catch(err => {
        alert('Erro ao copiar: ', err);
    });
});


const copyButton2 = document.getElementById('copyButton2');
if (copyButton2) {
    copyButton2.addEventListener('click', function() { 
        const codeBlock = document.getElementById('codeBlock2').innerText;
        navigator.clipboard.writeText(codeBlock).then(() => {
            copyButton2.style.display = 'None';
            document.getElementById('copied2').style.display = 'Block';
        }).catch(err => {
            alert('Erro ao copiar: ', err);
        });
    });
}