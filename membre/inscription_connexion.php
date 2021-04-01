<?php
require_once "../traitements/inscription_connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loging Animation</title>
    <link rel="stylesheet" href="css/inscription.connexion.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <section>
      <div class="container">
        <div class="user singinBx">
          <div class="imgBx">
            <img
              src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
              alt=""
            />
          </div>
          <div class="formBx">
            <form>
              <div class="center"><h2>Connexion</h2></div>
              <div class="inputBx">
                <span>Pseudo</span>
                <input type="text" name="" placeholder="Username" />
              </div>

              <div class="inputBx">
                <span>Mot de passe</span>
                <input type="password" name="" placeholder="Password" />
              </div>
              <div class="remember">
                <label><input type="checkbox" name="" /> Remember me</label>
              </div>

              <div class="inputBx">
                <input type="submit" value="Connexion" name="" />
              </div>
              <p class="signup">
                Vous n'êtes pas encore membre ?
                <a href="#" onclick="toggleForm();"> Rejoignez-nous.</a>
              </p>

              <h3>Login with social media</h3>
              <ul class="sci">
                <li>
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href=" #"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </form>
          </div>
        </div>





































































        <div class="user singupBx">
          <div class="formBx">
            <form method="POST">
              <div class="center"><h2>Inscription</h2></div>


              <div class="inputBx">
                <span>Pseudo</span>
                <input type="text" name="username" placeholder="Username" />
              
              <?php if (!empty($errors)) {echo $errors["username"];} ?>

              </div>
              

              <div class="inputBx">
                <span>Adresse e-mail</span>
                <input type="email" name="email" placeholder="Email Address" />

              <?php if (!empty($errors)) {echo $errors["email"];} ?>

              </div>

              <div class="inputBx">
                <span>Mot de passe</span>
                <input type="password" name="password" placeholder="Create Password" />
                <?php if (!empty($errors)) {echo $errors["password"];} ?>

              </div>

              <div class="inputBx">
                <span>Confimez votre mot de passe</span>
                <input type="password" name="password_confirm" placeholder="password_confirm" />
                <?php if (!empty($errors2)) {echo $errors2["password"];} ?>
              
              </div>

              <div class="inputBx">
                <input type="submit" value="Rejoignez-nous" name="submit" />
              </div>
              <p class="signup">
                Deja membre ?
                <a href="#" onclick="toggleForm();"> Se Connecter.</a>
              </p>

              <h3>Login with social media</h3>
              <ul class="sci">
                <li>
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href=" #"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </form>
          </div>
          <div class="imgBx">
            <img
              src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      function toggleForm() {
        var container = document.querySelector(".container");
        container.classList.toggle("active");
      }
    </script>
  </body>
</html>
