<?php
session_start();

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Afficher le profil de l'utilisateur
echo "Bienvenue, " . $_SESSION["email"] . "!";
?>
