//Wait for document to be loaded
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    document.getElementsByClassName('btn-add')[0].addEventListener('click', purchaseClicked)
}


function purchaseClicked() {
    alert('pippo')
}