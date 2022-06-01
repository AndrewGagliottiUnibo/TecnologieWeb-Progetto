//Sceglie l'elemento centrale tramite la gestione delle classi
function pick(element) {
    element.parent().children().removeClass("current");
    element.addClass("current");
}

//Mostra gli elementi: gestione tramite lista in cui si mostra
//il centrale e gli adiacenti
function show(element) {
    //Nascondo l'attuale
    element.parent().children().hide();
    //Scorro
    element.show();
    element.prev().show();
    element.next().show();
}

//Gestisce la visualizzazione
function update(element) {
    pick(element);
    show(element);
}

//Main dello script, decide cosa accade se una immagine è cliccata
//e ne gestisce il funzionamento
$(document).ready(function() {
    update($("div.slider-image").children().first());

    //Se l'immagine è cliccata
    $("div.slider-image > img").click(function(exc) {
        //La pagina non si reinderizza se si clicca più volte
        exc.preventDefault();
        update($(this));
    });
});