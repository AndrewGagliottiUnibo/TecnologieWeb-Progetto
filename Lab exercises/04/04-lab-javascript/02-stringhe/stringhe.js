/*-------------------------------------------------------------------*/
const res = document.querySelector("div");

//Testo upper
//const upperTag = document.querySelector("input:first-of-type");
//const upperTag = document.querySelector("input:nth-child(1)");
const upperTag = document
    .querySelector("input[value = 'Testo uppercase']")
    .addEventListener("click", function() {
        let text = res.innerHTML;
        text = text.toUpperCase();
        res.innerHTML = text;
});

/*-------------------------------------------------------------------*/
//Testo lower
const lowerTag = document
    .querySelector("input:nth-child(2)")
    .addEventListener("click", function() {
        let text = res.innerHTML;
        text = text.toLowerCase();
        res.innerHTML = text;
});

/* Call by reference!
 *
function handlerLowecase() {
    console.log("Bottone lowecase");
}

document
    .querySelector("input:nth-child(2)")
    .addEventListener("click", handlerLowecase);
 *
*/

/*-------------------------------------------------------------------*/
//Testo substring
const subTag = document
    .querySelector("input:last-of-type")
    .addEventListener("click", function() {
        let text = res.innerHTML;
        text = text.slice(5) + text.slice(0, 5);
        res.innerHTML = text;

        //Prende dal primo carattere non separatore fino al prossimo carattere separatore
        //res.innerText = text;
});