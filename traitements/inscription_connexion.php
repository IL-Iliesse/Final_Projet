<?php
// Pour avoir acceder a mes fonctions
require_once "../modeles/modele.php";

if (!empty($_POST["submit"])) { // Si les donnée en post on etait poster alors...

    $errors = array();
    // VERIFICATION DU CHAMP UNSERNAME

    if (empty($_POST['username'])) {  // Si le champ username n'as pas etait remplis alors
      $errors['username'] = "Saisissez votre pseudo";
    } 
    
    elseif (!preg_match('/^[a-zA-Z0-100_-]+$/', $_POST['username'])) { // Sinon si  le champ username ne contient pas de ... 
        $errors['username'] = "Votre pseudo peut contenir que des lettres allant de a-z des -,_ et des chiffre allant de 0 a 100";

    } else {  // Sinon ...
      $req = getbdd()->prepare("SELECT id FROM users WHERE username = ?");
      $req->execute([$_POST['username']]);
      $user = $req->fetch();

      if($user) {
        $errors["username"] = "Ce pseudo est deja pris";
      }
    }
    // FIN DE LA VERIFICATION DU CHAMP UNSERNAME

    // VERIFICATION DU CHAMP EMAIL

    if (empty($_POST['email'])) {       // Si le champ email n'as pas etait remplis alors   
    $errors['email'] = "Saisissez une adresse email";
    } 
    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Sinon si pour verifier le format de l'email jutilise filter_var en premier params je lui passe la variable et en seconde parametre je lui passe un entier qui determine le filtre a utiliser (FILTER...) ça retourne true si c'est bon et false sinon (en plus du type email)
      $errors['email'] = "Votre e-mail n'est pas valide";
    } else { // Sinon 
      $req = getbdd()->prepare("SELECT id FROM users WHERE email = ?");
      $req->execute([$_POST['email']]);
      $user = $req->fetch();

      if($user) {
        $errors["email"] = "Cette e-mail est déjà utilisé";
      }
    }

    if (empty($_POST['password'])) {
      $errors['password'] = "Entrez un mot de passe";

    } elseif ($_POST['password'] != $_POST['password_confirm']) {
      $errors2['password'] = "Vos mots de passe ne correspondent pas. Veuillez réessayer.";
    }
    
    if (empty($errors) && empty($errors2)) { // Si mon tableau d'erreurs et mon champ err 2 et vide cad si il n'y a pas d'err dans les diff champ alors ...
      $req = getbdd()->prepare("INSERT INTO users SET username = ?, password = ?, email = ?");
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $req->execute([$_POST['username'], $password, $_POST['email']]);
    }

  //  debug($errors);
} 
