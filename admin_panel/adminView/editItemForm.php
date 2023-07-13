
<div class="container p-5">

<h4>Modifier</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$sql= "SELECT * FROM etudiant WHERE matricule='$ID'";
  $result=$idcnx-> query($sql);
  if ($result-> rowCount() > 0){
    while ($row1 = $result->fetch (PDO::FETCH_ASSOC)){

      $catID=$row1["id_categorie"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" name="id" value="<?=$row1['id_etudiant']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Nom:</label>
      <input type="text" class="form-control" name="nom" value="<?=$row1['nom_etudiant']?>">
    </div>
    <div class="form-group">
      <label for="desc">Prenom:</label>
      <input type="text" class="form-control" name="prenom" value="<?=$row1['prenom_etudiant']?>">
    </div>
    <div class="form-group">
      <label for="price">Email:</label>
      <input type="email" class="form-control" name="email" value="<?=$row1['email_etudiant']?>">
    </div>
    <div class="form-group">
      <label for="desc">Matricule:</label>
      <input type="text" class="form-control" name="matricule" value="<?=$row1['matricule']?>">
    </div>
    <div class="form-group">
      <label for="desc">PASSWORD:</label>
      <input type="text" class="form-control" name="MDP" value="<?=$row1['MDP_etudiant']?>">
    </div>
    <div class="form-group">
      <label>Categorie:</label>
      <select name="cate">
        <?php
          $sql="SELECT * from categorie WHERE id_categorie='$catID'";
          $result = $idcnx-> query($sql);
          if ($result-> rowCount() > 0){
            while ($row = $result->fetch (PDO::FETCH_ASSOC)){
              echo"<option value='". $row['id_categorie'] ."'>" .$row['libelle_categorie'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from categorie WHERE id_categorie!='$catID'";
          $result = $idcnx-> query($sql);
          if ($result-> rowCount() > 0){
            while ($row = $result->fetch (PDO::FETCH_ASSOC)){
              echo"<option value='". $row['id_categorie'] ."'>" .$row['libelle_categorie'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["photo"]?>'>
         <div>
            <label for="file"> Image:</label>
            <input type="text" name="existingImage" class="form-control" value="<?=$row1['photo']?>" hidden>
            <input type="file" name="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Modifier</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>