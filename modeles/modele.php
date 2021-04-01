<?php
function getBdd()
{
    // INITIALISATION DE LA CONNEXION A LA BDD
    return new PDO('mysql:host=localhost;dbname=projet_Final', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

function debug($variable){
    echo '<pre>' . print_r ($variable, true) . '</pre>';
}


// A chaque nouveau modeles l'inclure ici 
// afin de pouvoir accéder a nos nouveau diff modele depuis n'importe qu'elle fichier.

require_once "../modeles/articles.php";
require_once "../modeles/categories.php";
