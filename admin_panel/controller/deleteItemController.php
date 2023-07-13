<?php

    include_once "../config/dbconnect.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM etudiant where matricule='$p_id'";

    $result=$idcnx-> query($query);

    if($result){
        echo"Product Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>