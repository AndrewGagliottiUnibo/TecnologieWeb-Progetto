$(document).ready(function(){
    console.log("Hello World!");
    $("span#ciao").text("Hello World!");
    $(".anno").text("2021");
    
    /*
    //Versione JS A
    let elements = document.getElementsByClassName("anno");
    for(let i=0; i<elements.length; i++){
        elements[i].innerText = "2021";
    }
    */

    /*
    //Versione JS A
    Array.from(elements).forEach(function(item){
        item.innerText = "2021";
    });
    */
});