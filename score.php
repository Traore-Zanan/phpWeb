


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Score</title>
    
</head>
<body>
<h1>Votre Score</h1>

<?php
   include "connexionDatabase.php"; 
    $note = 0;

   foreach($_POST as $cle => $value){
    

    $resq1 = "SELECT * FROM reponse WHERE id_reponse = '$value' AND verite = 1";
    $resultat1 = $idcnx->query($resq1);

    if($resultat1 != null && $resultat1->rowCount()>0){
        $note = $note + 4;   
    }



  
    

   } 
?>

<p><h1> Votre Score est:<?=$note?>/20</h1> </p>




</body>
</html>