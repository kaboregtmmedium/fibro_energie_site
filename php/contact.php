<?php
// Script PHP pour gérer le formulaire de contact

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Envoyer un e-mail de notification
    $to = "votre-email@exemple.com"; // Remplacer par l'adresse e-mail à laquelle vous souhaitez recevoir les messages
    $subject = "Nouveau message de contact de FibroEnergie";
    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Envoyer l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
