


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM</title>
</head>
<body>
<?php
   include "connexionDatabase.php";

  
?>
 <form action="score.php" method="post">
     <?php

        //recuperation des questions
        $resq1 = "SELECT * FROM question ORDER BY rand() LIMIT 5";
        $resultat1 = $idcnx->query($resq1);

        //Affichage des questions
        echo "<ol>";
        while ($ligne1 = $resultat1->fetch (PDO::FETCH_ASSOC)){
            $idq = $ligne1["id_question"];
            ?> 
            <H3 class="question"><li> <?=$ligne1["libelle_question"]?></li></H3> 
        
            <?php 
                //recuperation des reponses 
                $resq2 = "SELECT * FROM reponse WHERE id_question = $idq";
                $resultat2 = $idcnx->query($resq2);

                //Affichage des reponses
                while ($ligne2 = $resultat2->fetch (PDO::FETCH_ASSOC)){
                    ?>

                    <input type="radio" name= "<?=$idq?>"
                    value="<?=$ligne2["id_reponse"]?>" required>
                    <?=$ligne2["libelle_reponse"]?><br><br>
       <?php 
                }
        }
       ?>

<button name="valide" class="connexion">valide</button>
    
 </form>
</body>
</html>