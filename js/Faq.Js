// Seleziona tutte le domande e la rispettiva risposta
var domande = document.querySelectorAll('.Domanda');

// Aggiungi un evento di click a ciascuna domanda
domande.forEach(function(domanda) {
    domanda.addEventListener('click', function() {
        // Trova la risposta relativa a questa domanda
        var risposta = this.nextElementSibling;
        
        // Toggle dello stato di visualizzazione della risposta
        if (risposta.style.display === 'none' || risposta.style.display === '') {
            risposta.style.display = 'block';
        } else {
            risposta.style.display = 'none';
        }
    });
});

