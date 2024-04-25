<?php
// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Vérifiez si l'adresse e-mail existe dans la base de données
    // Code de vérification non fourni, vous devrez le mettre en place
    
    // Générez et envoyez un lien magique à l'adresse e-mail de l'utilisateur
    // Code de génération et d'envoi de lien magique non fourni, vous devrez le mettre en place
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="email">Adresse e-mail:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Envoyer le lien de connexion">
    </form>
</body>
</html>
