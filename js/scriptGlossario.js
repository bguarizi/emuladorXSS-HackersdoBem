$(document).ready(function(){
    $('[data-toggle="popover"]').popover('dispose').popover({
        trigger: 'hover',
    });
});

function activateGlossary(selector, meaning) {
    var elementos = document.querySelectorAll('.theoric-content');
    var selectorCapitalized = selector.charAt(0).toUpperCase() + selector.slice(1);
    for (var i = 0; i < elementos.length; i++) {
        if ((elementos[i].innerText.includes(selector) || elementos[i].textContent.includes(selector))) {
            var textoElemento = elementos[i].innerHTML;
            const novoHTML = textoElemento.replace(new RegExp(selector, 'i'), 
                `<span class='d-inline-block custom-popover' tabindex='0' 
                    data-toggle='popover' 
                    title='${selectorCapitalized}' 
                    data-content='${meaning}' 
                    style='color: blue;'>
                    $&
                </span>`
            );
            elementos[i].innerHTML = novoHTML;
                $('[data-toggle="popover"]').popover('dispose').popover({
                    trigger: 'hover'
                });

            return;
        }
    }
}
