<?php

include "connexionDatabase.php";



// s'il clique sur s'inscire
if(isset($_POST["s'inscrire"])){
    extract($_POST);
  //verifier que touts les champs sont renseignés
    //Verifier si les mot de passe sont identique 
       //Verifier que le mot de passe et le matricule ne correspondent pas a un autre compte existant
    if($MDPAdmin==$comfirmeMDP){
        $resq = "INSERT INTO admin (nom_admin,prenom_admin,email_admin,MDP_admin,sexe,photo) VALUES('$nomAdmin','$prenomAdmin','$emailAdmin','$MDPAdmin','$sexeAdmin','$image')";
        $res = $idcnx->exec($resq);
       if($res) {header("location:connexionAdmin.php");}
      
      }else{$mdpIncorrecte="mot de passe non identique";}
    
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creez votre compte</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body class="body" >
   
  <!--<section style="background-color: white;">
    <form method="post" action="">
      <p><h1>renseignez ces informations pour creer votre compte</h1></p>
        Nom: <input type="text" name="nomEtudiant"><br><br>
        Prenom: <input type="text" name="prenomEtudiant"><br><br>
        matricule:<input type="text" name="matricule"><br><br>
        Email: <input type="text" name="emailEtudiant"><br><br>
        Mot de passe: <input type="text" name="MDPEtudiant"><br><br>
        Confirmation: <input type="text" name="confirmeMDP"><br><br>
        Sexe:<input type="text" name="sexeEtudiant"><br><br>
        <button name ="s'inscrire">S'inscrire</button>
        <p class="erreur">
           
        </p>
    </form>
  </section>-->

  <section>
    <div class="form-box-con">
      <div class="form-vaue">
        <form action=""  method="post">
          <h2>Login</h2>
          <div class="inputbox">
            <input type="text" name="nomAdmin" required>
            <label for="nomEtudiant">Nom</label>
          </div>
          <div class="inputbox">
            <input type="text" name="prenomAdmin" required>
            <label for="prenomEtudiant">Prenom</label>
          </div>
          <div class="inputbox">
            <input type="email" name="emailAdmin" required>
            <label for="emailEtudiant">Email</label>
          </div>
          <div class="inputbox">
            <input type="password"  name="MDPAdmin" required>
            <label for="MDPEtudiant">Password</label>
          </div>
          <div class="inputbox">
            <input type="password" name="comfirmeMDP" required>
            <label for="comfirmeMDP">Confirmation</label>
          </div>
          <div class="inputbox">
            <input type="text" name="sexeAdmin" required>
            <label for="sexeEtudiant">Sexe</label>
          </div>
          <div class="inputbox">
          <input type="file" name="image" >
          <label for="image"></label>
          </div>
          <button name="s'inscrire" class="connexion">S'inscrire</button>
          <div class="register">
            <p>Vous avez un compte?  <a href="connexionCompte.php">cliquez ici </a></p>
          </div>
          <a href="formation.html">formation</a>
          <p class="erreur">
            <?php
              if(isset($msg)) echo $msg;
              if(isset($erreur)) echo $erreur;
              if(isset($mdpIncorrecte)) echo $mdpIncorrecte;
              if(isset($compteExistant)) echo $compteExistant;
            ?>
            </p>
        </form>
      </div>
    </div>
  </section>
</body>
</html>