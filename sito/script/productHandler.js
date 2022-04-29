//Wait for document to be loaded
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

//Loading file e listener per messaggio
function ready() {
    document.getElementsByClassName('btn-not-log').addEventListener('click', purchaseFailed())
    document.getElementsByClassName('btn-add').addEventListener('click', purchaseClicked())
    document.getElementsByClassName('delete').addEventListener('click', purchaseDelete())
}


function purchaseFailed() {
    alert('Non hai effettuato il login. Accedi o Registrati ora per usufruire al meglio dell\'esperienza di Cacplus')
}

function purchaseClicked() {
    alert('Aggiunto al carrello')
}

function purchaseDelete() {
    alert('Rimosso dal carrello!')
}