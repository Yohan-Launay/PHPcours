<?php
include 'component/_head.php';
include 'component/_menu.php';

// Inscription de l'utilisateur
// Connexion à la base de données

// Session
session_start();

require_once 'includes/connect.php';

// Global connect
global $pdo;

if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête préparée pour empêcher les injections SQL
    $req = $pdo->prepare('INSERT INTO utilisateur (nom, prenom, pseudo, email, password) VALUES (:nom, :prenom, :pseudo, :email, :password)');
    $req->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

}

// Si le formulaire est soumis redirection avec la page connection
if (isset($_POST['submit'])) {
    header('Location: connection.php');
}

?>
<div class="container">
    <form method="POST" class="w-25">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

