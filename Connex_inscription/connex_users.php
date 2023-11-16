<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="../Accueil/1.js" defer></script>
  <link rel="stylesheet" href="../Accueil/style.css">

</head>

<?php 

require_once('./cdb.php');
require_once("../Accueil/barre_nav.php");


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['mail'])  && isset($_POST['mdp'])) {
             
             

              // Vérification de l'email
                if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                    echo ("Entrer un mail correct");
                    exit();
                }

                $sql = "SELECT * FROM users WHERE mail =:mail";
                $req = $db->prepare($sql);
                $req->bindParam("mail",$_POST['mail']);
                $req->execute();

                $usr = $req->fetch();

                // SI USR DANS LE IF EST FALASE IL YA UNE ERREUR
                //password_verify PERMET DE VERIFIER LE HACHAGE IL VERIFIE LEMPRINTE DU MOT DE PASS HACHé
                if($usr && password_verify($_POST['mdp'], $usr['mdp']))
                {
                    $_SESSION['user'] = $usr;
                    header("Location: ../Accueil/1.php");


                    // Définir un cookie avec l'ID de l'utilisateur
                    setcookie('userID', $usr['id'], time() + (24 * 60 * 60));

                    exit();
                }
                else
                {
                    echo "Email ou/et mdp incorrecte";
                }
            }  
        }

       

    ?>

    <form class="form" action="connex_users.php"method="post"> 
  

      <label for="adresse mail">E-mail</label>
        <input type="text" name="mail" value="jackychan@gmail.com" required>
      </div>
      <div>

  <div>
    <label for="mdp">password</label>
    <input type="password" name="mdp" id="mdp" placeholder="mdp" required>
  </div>

      <div>
      
      <button id="Envoye">ENVOYER</button>
      </div>

    </form>