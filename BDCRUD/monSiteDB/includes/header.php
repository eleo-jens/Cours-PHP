<?php
session_start();
?>

<header>
        <nav>
            <a href="./index.php?p=accueil">Accueil</a>
            <a href="./index.php?p=listeFilms">Liste de films</a>
            <a href="./index.php?p=page2">Page 2</a>
            <a href="./index.php?p=page3">Page 3: Formulaire</a>
            <p>
                <?php 
                    if (isset($_SESSION['loginConnecte'])){
                        // création d'un logout
                        echo $_SESSION['loginConnecte'];
                        echo "<a href='./index.php?p=logout'>Se déconnecter</a>";
                    }
                    else {
                        header ("location: ./login.php");
                    }
                ?>
            </p>
        </nav>
</header>