
<?php 


   session_start(); 
   if((!isset($_SESSION["matricule"])) && !(isset($_POST["MDPEtudiant"]))){
       header("Location: connexionCompte.php");}
    if(isset($_POST['deconnexion'])){
        // Vérifie si l'utilisateur est connecté
        if (isset($_SESSION['matricule']) && isset($_POST['MDPEtudiant'])) {
            // L'utilisateur est connecté, donc on le déconnecte
            unset($_SESSION['matricule']); // Supprime les données de session de l'utilisateur
            unset($_SESSION['MDPEtudiant']);
            session_destroy(); // Détruit la session
        
            // Redirige vers la page de connexion ou toute autre page de votre choix
            header("Location: index.php");
            exit();
        } else {
            // Si l'utilisateur n'est pas connecté, redirige-le vers la page de connexion ou toute autre page de votre choix
            header("Location: index.php");                        
            exit();}
    }
    if(isset($_POST["evaluation"])){
        header("location: qcm.php");
    }
    if(isset($_POST["formation"])){
        header("location: formation.php");
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body class="body">
    <div class="sidebar">
        <div class="profil">
            <span style="color: #fff; font-size: 30px;">Profil</span>
        </div>
        <ul class="nav-links">
            <li>
            <form action="" method="post">
                    <button name="evaluation" class="nav-name">Evaluation</button>
                </form> 
           </li>
            <li>
            <form action="lireCours.php" method="post">
                    <button name="formation" class="nav-name">Formation</button>
                </form> 
            </li>
            <li>
            <button name="historique" class="nav-name">Historique</button>
            </li>
            <li>
                <form action="" method="post">
                    <button name="deconnexion" class="nav-name">Deconnexion</button>
                </form>
               
            </li>
        </ul>
    </div>

   <div class="search">
        <div class="col">
            <span><a href="index.php">Accueil</a></span>
        </div>
        <div class="col">
            <span>Dashboard</span>
        </div>
        <div class="col" style="padding-left: 500px;">
            <span><input type="text" placeholder="recherche..."></span>
        </div>
   </div>
   <div class="ection">
    
    <div class="service">
        <div class="card">
            <h2>Formation en cours</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt,.</p> 
                <a href="#" class="button">Continuer</a>
        </div>
        <div class="card">
            <h2>Certification en cours</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt,.</p> 
                <a href="#" class="button">Continuer</a>
        </div>
        <div class="card">
            <h2>Categorie C</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt.</p>
                <a href="#" class="button">Faire</a>
        </div>
     </div>
</div>     
</body>
</html>