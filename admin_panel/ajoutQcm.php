<?php

include "./config/dbconnect.php";



// s'il clique sur s'inscire
if(isset($_POST["ajouter"])){
    extract($_POST);
  //verifier que touts les champs sont renseignés
    //Verifier si les mot de passe sont identique 
       //Verifier que le mot de passe et le matricule ne correspondent pas a un autre compte existant
        $resq = "INSERT INTO question (libelle_question,BN_repone,id_categorie) VALUES('$libelle','$reponse','$categorie')";
        $res = $idcnx->exec($resq);
       if($res) {$er = "insertion OK";}
      
      else{$bien="erreur lors de l'insertion";}
    
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creez votre compte</title>
    <link rel="stylesheet" href="../styl.css">
</head>
<body class= >
   
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
    <div class="form-box">
      <div class="form-vaue">
        <form action=""  method="post">
          <h2>QCM</h2>
          <div class="inputbox">
            <input type="text" name="libelle" required>
            <label for="nomEtudiant">libelle</label>
          </div>
          <div class="inputbox">
            <input type="text" name="reponse" required>
            <label for="prenomEtudiant">reponse</label>
          </div>
         <div>
         <label>Categorie:</label>
              <select  name="categorie" >
                <option disabled selected>Select category</option>
                <?php

                  $sql="SELECT * from categorie";
                  $result = $idcnx-> query($sql);

                  if ($result-> rowCount() > 0){
                    while($row = $result-> fetch (PDO::FETCH_ASSOC)){
                      echo"<option value='".$row['id_categorie']."'>".$row['id_categorie'] ."</option>";
                    }
                  }
                ?>
              </select>
         </div>
          
          <br><br><button name="ajouter" class="connexion">Ajouter</button>
          
          <p class="erreur">
            <?php
              if(isset($er)) echo $er;
              if(isset($bien)) echo $bien;
            ?>
            </p>
        </form>
      </div>
    </div>
  </section>
</body>
</html>