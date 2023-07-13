<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $libelleQuestion = $_POST['libelle_question'];
        $bonneReponse= $_POST['bonne_reponse'];
        $typeQuestion = $_POST['type_question'];
        $categorie = $_POST['categorie'];
       
            
        /*$name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);*/

         $insert = "INSERT INTO question(libelle_question,BN_repone,type_question,id_categorie) VALUES ('$libelleQuestion','$bonneReponse','$typeQuestion','$categorie')";
         $result = $idcnx-> query($insert);
         if(!$result)
         {
             echo "erreur";
         }
         else
         {
             echo "insertion OK";
         }
     
    }
        
?>