<!-- login.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="login.php" method="post">
        <label for="identifiant">Identifiant:</label>
        <input type="text" id="identifiant" name="identifiant" required>
        <label for="motdepasse">Mot de passe:</label>
        <input type="password" id="motdepasse" name="motdepasse" required>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>

<?php
// Vérification des identifiants
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifiant = $_POST["identifiant"];
    $motdepasse = $_POST["motdepasse"];

    // Vérification factice (vous devrez utiliser une vérification plus sécurisée)
    if ($identifiant === "votre_identifiant" && $motdepasse === "votre_motdepasse") {
        // Redirection vers la page "text.html" si les identifiants sont corrects
        header("Location: text.html");
        exit();
    } else {
        // Afficher un message d'erreur si les identifiants sont incorrects (ou rediriger vers une page d'erreur)
        echo "<p>Mauvais identifiant ou mot de passe.</p>";
    }
}
?>