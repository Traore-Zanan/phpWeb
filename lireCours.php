<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP</title>
</head>
<body>
    <div class="dive1"></div>
    <?php
         include "connexionDatabase.php";

        if(isset($_POST['formation'])){
         $resq = "SELECT nom_formation FROM formation ";
         $resultat = $idcnx->query($resq);
         while ($ligne = $resultat->fetch (PDO::FETCH_ASSOC)){
         
           ?>
           <embed type="application/pdf" src="cours/<?php echo $ligne['nom_formation']; ?>"  width="700" height="500">
    <?php
         }

        }
    ?>
    
</body>
</html>