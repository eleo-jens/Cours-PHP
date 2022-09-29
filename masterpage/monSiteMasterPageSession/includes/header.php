<?php
session_start();
?>

<header>
        <nav>
            <a href="./index.php?p=accueil">Accueil</a>
            <a href="./index.php?p=page1">Page 1</a>
            <a href="./index.php?p=page2">Page 2</a>
            <a href="./index.php?p=page3">Page 3: Formulaire</a>
            <p>
                <?php 
                    echo $_SESSION['loginConnecte'];
                    // création d'un logout
                    echo "<a href='./index.php?p=logout'>Se déconnecter</a>";
                ?>
            </p>
        </nav>
</header>