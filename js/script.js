// JavaScript pour la validation du formulaire de contact côté client

// Fonction de validation du formulaire
function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var errorMessages = [];

    // Vérifier si le champ nom est vide
    if (name.trim() === "") {
        errorMessages.push("Veuillez saisir votre nom.");
    }

    // Vérifier si le champ email est vide ou s'il est invalide
    if (email.trim() === "") {
        errorMessages.push("Veuillez saisir votre adresse e-mail.");
    } else if (!isValidEmail(email)) {
        errorMessages.push("Veuillez saisir une adresse e-mail valide.");
    }

    // Vérifier si le champ message est vide
    if (message.trim() === "") {
        errorMessages.push("Veuillez saisir votre message.");
    }

    // Afficher les messages d'erreur s'il y en a
    if (errorMessages.length > 0) {
        alert("Erreur(s) :\n" + errorMessages.join("\n"));
        return false; // Empêcher l'envoi du formulaire
    }

    return true; // Autoriser l'envoi du formulaire si aucune erreur
}

// Fonction pour valider une adresse e-mail
function isValidEmail(email) {
    // Expression régulière pour vérifier le format de l'adresse e-mail
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
