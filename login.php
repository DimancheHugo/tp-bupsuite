<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier les informations d'identification
    if ($username == 'admin' && $password == 'admin_password') {
        // Crée une session pour l'administrateur
        $_SESSION['user'] = 'admin'; // Définit l'utilisateur comme admin
        $_SESSION['admin'] = true; // Drapeau pour indiquer que c'est un admin
        header("Location: index.php"); // Redirige vers la page d'accueil
        exit;
    } elseif ($username == 'wiener' && $password == 'peter') {
        // Crée une session pour l'utilisateur normal
        $_SESSION['user'] = 'wiener'; // Définit l'utilisateur comme normal
        $_SESSION['admin'] = false; // Drapeau pour indiquer que ce n'est pas un admin
        header("Location: index.php"); // Redirige vers la page d'accueil
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe invalide.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion à l'administration</h2>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Connexion</button>
    </form>
</body>
</html>
