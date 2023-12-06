<?php
// Obtenez le chemin du dossier racine du projet
$rootPath = "http://localhost/PHPcours/blog/";

if(session_status() == PHP_SESSION_NONE && !isset($_SESSION)) {
    session_start();
}

if(isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_unset();
    session_destroy();
    header("location: connection.php");
    exit;
}
?>
<header class="pb-3 mb-4 border-bottom">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between w-100" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo $rootPath; ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $rootPath; ?>rechercher.php">Rechercher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $rootPath; ?>register.php">S'inscrire</a>
                    </li>
                </ul>
                <span class="navbar-text d-block">
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "Bonjour " . $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'];
                        ?>
                        <a href="?logout=1">Se déconnecter</a>
                        <?php
                    } else {
                        ?>
                        <a href="<?php echo $rootPath; ?>connection.php">Se connecter</a>
                    <?php
                    }
                    ?>
                </span>
            </div>
        </div>
    </nav>
</header>
