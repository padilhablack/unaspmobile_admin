$(document).ready(function() {
    
    var carregar = $(".conteudo"),
            li = $('.nav li');

    $('.nav li').click(function(e) {
        active(li, ($(this)));
    });

    $('.nav li a').click(function(e) {
        loadPagina($(this).attr('href'), carregar);
    });
})

//funções

function loadPagina(href, content) {
    var resp = href.substr(1);
    $(content).load(resp);
}


function active(elemento, atual) {
    if ($(elemento).hasClass("active")) {
        $(elemento).removeClass("active");
    }
    $(atual).addClass("active");

}
