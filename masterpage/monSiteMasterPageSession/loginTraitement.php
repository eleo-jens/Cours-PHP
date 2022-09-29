<?php
    //première ligne du script, pour accéder à la session si on veut l'accéder dans toutes nos pages, on va le mettre dnas la masterpage index.php
    // ou dans la nav si on veut que ca soit dans la nav
    session_start();

    // 1. Récupérer le login $_POST['login']
    $login = $_POST['login'];
    $password = $_POST['password'];

    // 2. Chercher le login dans la base de données et obtenir son password
    // FAKE
    $fakeLogin = "wad";
    $fakePassword = "wad";

    // 3. Comparer le password reçu du formulaire avec le password de l'user de la DB
    if ($login == $fakeLogin && $password == $fakePassword){
        // 4. Si ok, allez vers l'accueil
        $_SESSION['loginConnecte'] = $login; 
        header('location: ./index.php');
    }
    else {
        //5. Si pas ok, aller vers la page de login en evoyant un message dans l'URL
        header('location: ./login.php?error=badPass');
    }
?>
