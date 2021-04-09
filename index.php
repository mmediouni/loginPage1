<?php
session_start();

if (isset($_SESSION['utilisateur'])) {
    $nom    = $_SESSION['utilisateur']['nom'];
    $prenom = $_SESSION['utilisateur']['prenom'];
    $photo  = $_SESSION['utilisateur']['photo'];
    $id = $_SESSION['utilisateur']['id'];

    include 'index.phtml';
}

else {
    header ('location:login.php');
}