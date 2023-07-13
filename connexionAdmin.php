
<?php

include "connexionDatabase.php";




// connexter un etudiant
if(isset($_POST["connexion"])){
    extract($_POST);
    $resq = "SELECT * FROM admin WHERE email_admin='$emailAdmin' AND MDP_admin='$MDPAdmin'";
    $resultat = $idcnx->query($resq);
    
    if($resultat != null && $resultat->rowCount()>0){
      session_start();
      $_SESSION['emailAdmin'] = $emailAdmin;
      $_SESSION['MDPAdmin'] = $MDPAdmin;
      header("location:./admin_panel/admin.php");
    }else {$inconnu = "Le matricule ou mot de passe de correspond à aucun compte";}
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion au compte</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body >
   
  <!-- <section class="section">
    <form method="post" action="">
      <p>Entrez votre matricule et mot de passe</p>
        matricule:<input type="text" name="matricule"><br><br>
        Mot de passe: <input type="text" name="MDPEtudiant"><br><br>
        <button name ="connexion">connexion</button>
        <p class ="erreur">
           

        </p>
    </form>
  </section> -->

  <section>
    <div class="form-box">
      <div class="form-vaue">
        <form action="" method="post">
          <h2>Login</h2>
          <div class="inputbox">
            <input type="email" name="emailAdmin" required>
            <label for="emailAdmin">Email</label>
          </div>
          <div class="inputbox">
            <input type="password" name="MDPAdmin" required>
            <label for="MDPAdmin">Password</label>
          </div>
          <button name="connexion" class="connexion">Connexion</button>
          <div class="register">
            <p>Vous n'avez pas de compte? <a href="inscriptionAdmin.php">Creer un compte</a></p>

          </div>
          <p class ="erreur">
            <?php
              if(isset($champsVide)) echo $champsVide;
              if(isset($inconnu)) echo $inconnu;
            ?>

        </p>
          <a href="profilUtilisateur.html" target="_blank">form</a>
        </form>
      </div>
    </div>
  </section>
</body>
</html>