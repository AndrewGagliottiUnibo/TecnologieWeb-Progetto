//Stampa su console
console.log("Hello world!");

/*----------------------------------------------------*/
//Ora mostro la stringa sulla pagina HTML nello span con ID ciao
const varHello = document.getElementById("ciao");
//const varHello = document.querySelector("span.ciao");

//Verifico operazione
console.log(varHello);

//Cambio il testo della pagina HTML
varHello.innerHTML = "Hello world";

/*----------------------------------------------------*/
//Stampa di 2021
const varYear = document.getElementsByClassName("anno")[0];
//const varYear = document.querySelector("p.anno");
console.log(varYear);
varYear.innerHTML = "2021";

/*Variante:
 *
const varYear = document.getElementsByClassName("anno");
console.log(varYear);
varYear[0].innerHTML = "2021";
*/
