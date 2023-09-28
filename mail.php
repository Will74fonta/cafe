<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $destinataire = "contact@artydesign.fr"; 

    // Sujet de l'e-mail
    $sujet = "Nouveau message de $nom";

    // Corps de l'e-mail
    $corpsMessage = "Nom: $nom\n";
    $corpsMessage .= "Adresse e-mail: $email\n";
    $corpsMessage .= "Message:\n$message";

    // Envoi de l'e-mail
    $headers = "From: $email";

    if (mail($destinataire, $sujet, $corpsMessage, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi de l'e-mail. Veuillez réessayer plus tard.";
    }
} else {
    echo "Accès non autorisé au script.";
}
?>