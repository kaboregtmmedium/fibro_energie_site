<?php
if (isset($_POST['submit'])) {
    extract($_POST);

    // Valider les données
    if (!empty($Nom) && !empty($Email) && !empty($Message)){
        // Informations de l'email
        $to = "jmbfreemanx@gmail.com"; // Remplacez par votre adresse email
        $from= $Email;

        $header = "From:\"$name\"<$from>\n";
        $header .= "Replay-To:$from\n"; 
        $header .= "Content-Type:text/html; charset=\"iso-8859-1\""; 

        // Envoyer l'email
    if (mail($to, $Nom, $Message, $header)){
            echo "Message envoyé avec succès!";
            } 
        else {
            echo "Erreur lors de l'envoi du message, réessayez.";
             }
    } 
} 
?>

