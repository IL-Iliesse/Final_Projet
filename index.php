<?php
if (!empty($_SESSION["idrole"]) && $_SESSION["idrole"] == 2) {
    header("location:admin/index.php");
} else {
    header("location:membre/index.php");
}
























    // Explications mvc:

    // - Dossier modeles : Gérer les interractions SQL
    // - Dossier controleur : Gérer les traitement des données
    // - Dossier vue : Gérer l'affichage des pages

    // Le controleur traiteras les données
    // Le modeles feras les interactions SQL
    // La vue afficheras les pages 
    //     en fonctions des données
    //     qui serons recup depuis le modeles
    //     et traiter dans le controler


    // Nous pour l'instant:

    // modeles/->      Gérer nos interractions SQL (via des fonctions)
    // traitements/->  Gérer l'enregistrement de nos formulaires
    // /vues->         Gérer l'affichage des pages
