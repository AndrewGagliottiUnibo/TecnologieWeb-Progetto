$(document).ready(function(){
    const numero = $("input#numero");
    $("button:nth-of-type(1)").click(function(e){
        e.preventDefault();
        $("ul").append("<li>"+numero.val()+"</li>");
    });

    $("button:nth-of-type(2)").click(function(e){
        e.preventDefault();
        let somma = 0;
        
        $('ul li').each(function(){
            somma += parseInt($(this).text());
        });
        $("ul + p").text("Somma totale = " + somma);
    });
});