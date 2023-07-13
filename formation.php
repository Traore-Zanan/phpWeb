<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP</title>

    <style media="screen">

    div{
        border: 2px solide black;
        width: 500px;
        margin-left: 370px;
        margin-top: 50px;
    }
    form{
        margin-left: 70px;
    }
    label{
        font-size: 20px;
        font-weight: bold;
    }
    #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
    }
    #upload{
        font-size: 20px;
        font-weight: bold; 
        margin-left: 100px;
    }

</style>

</head>
<body>


<div class="">
    <form action=""  method="POST" enctype="multipart/form-data">
        <label for="">Choisir un pdf</label><br>
        <input type="file" id="pdf" name="pdf" value="" required><br><br>
        <input type="submit" id="upload" name="submit" value="upload">


        
        <?php

            include "connexionDatabase.php";

            if(isset($_POST['submit'])){
                $pdf=$_FILES['pdf']['name'];
                $pdf_type=$_FILES['pdf']['type'];
                $pdf_size=$_FILES['pdf']['size'];
                $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                $pdf_store="cours/".$pdf;
                move_uploaded_file($pdf_tem_loc,$pdf_store);

                $resq = "INSERT INTO formation(nom_formation) VALUES('$pdf')";
                $res = $idcnx->exec($resq);
            }


        ?>

    </form>
</div>


</body>
</html>