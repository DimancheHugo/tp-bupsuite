<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur le site</h1>
    <p>Vous êtes sur la page d'accueil. Vous n'avez pas accès à la page d'administration sauf si vous êtes admin.</p>

    <!-- Bouton pour se connecter -->
    <button onclick="window.location.href='login.php'">Se connecter</button>

    <?php
    // Vérifier si l'utilisateur est un administrateur
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
        // Si l'utilisateur est admin, afficher le bouton pour accéder à la page admin
        echo '<button onclick="window.location.href=\'admin.php\'">Accéder à la page d\'administration</button>';
    }
    ?>

    <!-- Bouton de déconnexion visible pour tous -->
    <button onclick="window.location.href='logout.php'">Se déconnecter</button>

</body>
</html>
