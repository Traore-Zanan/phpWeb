<div >
  <h2>Vos Etudiants</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username</th>
        <th class="text-center">Email</th>
        <th class="text-center">Sexe</th>
        <th class="text-center">photo</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM etudiant";
      $result=$idcnx-> query($sql);
      $count=1;
      if ($result-> rowCount() > 0){
        while ($row=$result-> fetch (PDO::FETCH_ASSOC)) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["prenom_etudiant"]?> <?=$row["nom_etudiant"]?></td>
      <td><?=$row["email_etudiant"]?></td>
      <td><?=$row["sexe"]?></td>
      <td><?=$row["photo"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>