<?php
include 'component/_head.php';
include 'component/_menu.php';
// Connexion de l'utilisateur

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    require_once 'src/includes/connect.php';

    global $pdo;

    // Requête préparée pour empêcher les injections SQL
    $req = $pdo->prepare('SELECT * FROM utilisateur WHERE email = :email');
    $req->execute([
        'email' => $email
    ]);

    $user = $req->fetch();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: index.php');
        } else {
            echo "Mauvais identifiants";
        }
    } else {
        echo "Mauvais identifiants";
    }
}

// Si le formulaire est soumis redirection avec la page index
if (isset($_POST['submit'])) {
    header('Location: index.php');
}

?>
<div class="container">
    <form class="w-25" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
