$(document).ready(function() {
    var carregar = $("#conteudo"),
            li = $('#menu li');

    $('#menu li').click(function(e) {
        active(li, ($(this)));
    });

    $('#menu li a').click(function(e) {
        loadPagina($(this).attr('href'), carregar);
    });
})

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
