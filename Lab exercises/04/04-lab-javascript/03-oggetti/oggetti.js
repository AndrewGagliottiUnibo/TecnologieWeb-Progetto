/*------------------------------------------------------------*/
//Computer - finta classe
class Computer {
        constructor(processor, disk, ram) {
        this.processor = processor;
        this.disk = disk;
        this.ram = ram;
    }
}

Computer.prototype.infoComputerConsole = function() {
    console.log("Processore: " + this.processor 
            + "; Disco: " + this.disk
            + "; RAM: " + this.ram);
}

Computer.prototype.infoComputerDOM = function(id) {
    //document.querySelector("#" + id)
    //Inserimento dei dati nel documento HTML
    document.getElementById(id).innerHTML = `
        <p>Processore: ${this.processor}<p/>
        <p>Disco: ${this.disk}<p/>
        <p>RAM: ${this.ram}<p/>
        `;
}

//Il mio pc
const myPC = new Computer("I9009K", "2TB + 512GB", "36GB DDR4");

//Stampa
myPC.infoComputerConsole();
myPC.infoComputerDOM("miopc");