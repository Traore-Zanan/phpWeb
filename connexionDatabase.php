
<?php

    $nomUtilisateur = "root";
    $motDepasse ="";
    $serveur = "localhost";
    $BD = "qcm";
    $DSN ="mysql:host=".$serveur.";dbname=".$BD.";charset=utf8";
    try{
        $idcnx = new PDO($DSN,$nomUtilisateur,$motDepasse);
    }catch(Exception $e){
        echo "connexion echouée",$e->getMessage();
        die();
    }
    //echo "connexion OK".$serveur."et a la BD".$BD;

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier pas PHP</title>
</head>
<body class="body" >
<!--<section style="background-color: white;">
    <form method="post" action="">
        Nom: <input type="text" name="nomEtudiant"><br><br>
        Prenom: <input type="text" name="prenomEtudiant"><br><br>
        matricule:<input type="text" name="matricule"><br><br>
        Email: <input type="text" name="emailEtudiant"><br><br>
        Mot de passe: <input type="text" name="MDPEtudiant"><br><br>
        Confirmation: <input type="text" name="confirmeMDP"><br><br>
        Sexe:<input type="text" name="sexeEtudiant"><br><br>
        <button name ="s'inscrire">S'inscrire</button>
    </form>
  </section>
  <section style="background-color: white;">
    <form method="post" action="">
        matricule:<input type="text" name="matricule"><br><br>
        Mot de passe: <input type="text" name="MDPEtudiant"><br><br>
        <button name ="connexion">connexion</button>
    </form>
  </section>-->
</body>
</html>