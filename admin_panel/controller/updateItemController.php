<?php
    include_once "../config/dbconnect.php";

    $product_id=$_POST['id'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $matricule= $_POST['matricule'];
    $MDPEtudient= $_POST['MDPEtudiant'];

    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = "UPDATE etudiant SET 
        nom_etudiant='$nom', 
        prenom_etudiant='$prenom', 
        email_etudiant='$email',
        matricule='$matricule',
        MDPEtudiant='$MDPEtudient',
        product_image='$final_image' 
        WHERE matricule=$product_id";
    $result=$idcnx-> query($updateItem);

    if($result)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>