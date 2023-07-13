
<<div >
  <h2>Vos Etudiant</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Photo</th>
        <th class="text-center">Nom</th>
        <th class="text-center">Prenom</th>
        <th class="text-center">Email</th>
        <th class="text-center">Matricule</th>
        <th class="text-center">Sexe</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from etudiant";
      $result=$idcnx-> query($sql);
      $count=1;
      if ($result-> rowCount() > 0){
        while ($row = $result->fetch (PDO::FETCH_ASSOC)) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["photo"]?>'></td>
      <td><?=$row["nom_etudiant"]?></td>
      <td><?=$row["prenom_etudiant"]?></td>      
      <td><?=$row["email_etudiant"]?></td> 
      <td><?=$row["matricule"]?></td>     
      <td><?=$row["sexe"]?></td>
       <!--<td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?//=$row['matricule']?>')">Modifier</button></td>-->
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['matricule']?>')">Supprimer</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">QCM</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">libelle question:</label>
              <input type="text" class="form-control"  name="libelle_question" required>
            </div>
            <div class="form-group">
              <label for="price">Bonne reponse:</label>
              <input type="text" class="form-control"  name="bonne_reponse" required>
            </div>
            <div class="form-group">
              <label for="qty">Type de  question:</label>
              <input type="text" class="form-control"  name="type_question" required>
            </div>
            <div class="form-group">
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
           
            <div class="form-group">
              <button class="btn btn-secondary"  name="upload" style="height:40px">Ajouter</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   