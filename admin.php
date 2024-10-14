<?php
session_start();

// Vérifie si l'utilisateur est connecté et est un administrateur
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: index.php"); // Redirige vers la page d'accueil si pas admin
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
</head>
<body>
    <h1>Page d'Administration</h1>
    <p>Bienvenue sur la page d'administration !</p>

    <h2>Actions possibles :</h2>
    <ul>
        <li><a href="#">Afficher tous les utilisateurs</a></li>
        <li><a href="#">Modifier les paramètres</a></li>
        <li><a href="#">Supprimer un utilisateur</a></li>
    </ul>

    <button onclick="window.location.href='index.php'">Retour à l'accueil</button>
    <a href="logout.php">Se déconnecter</a> <!-- Lien de déconnexion -->
</body>
</html>
