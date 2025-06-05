<?php
// Vérifier que le formulaire est envoyé en POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Nettoyer les données envoyées pour éviter les failles XSS
    $nom = strip_tags(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $sujet = strip_tags(trim($_POST['sujet']));
    $message = strip_tags(trim($_POST['message']));

    // Valider les données essentielles
    if (empty($nom) || empty($email) || empty($sujet) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si problème, afficher un message d'erreur
        echo "Veuillez remplir tous les champs correctement.";
        exit;
    }

    // Destinataire = email du magasin
    $to = "sialoumarket75@gmail.com";

    // Sujet du mail
    $subject = "Nouveau message depuis la page Contact : " . $sujet;

    // Corps du message
    $body = "Vous avez reçu un nouveau message via la page Contact.\n\n";
    $body .= "Nom : $nom\n";
    $body .= "Email : $email\n";
    $body .= "Sujet : $sujet\n\n";
    $body .= "Message :\n$message\n";

    // En-têtes du mail (important pour que la réponse revienne à l'expéditeur)
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoyer le mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès. Merci de nous avoir contactés !";
    } else {
        echo "Une erreur est survenue, veuillez réessayer.";
    }
} else {
    // Si on arrive sur la page sans passer par le formulaire, on redirige ou affiche un message
    echo "Accès direct non autorisé.";
}
?>
