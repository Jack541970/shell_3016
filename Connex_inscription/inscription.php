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


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $data = $_POST;

  // _________________________ reguex inscription_______________________________

  try {

    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"] ) && isset($_POST["mdp"])) {
     
      // Expression régulière pour vérifier la longueur du mot de passe (au moins 8 caractères)
      $regexLongueur = '/^.{3,15}$/';    
      $regexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
      $regexPass = '/^(?=.*[a-zA-Z])(?=.*[!@#$%^&*])/';

      //CONTROL DE REGEX !:
      // Vérification de la longueur du nom
      if (!preg_match($regexLongueur, $_POST["nom"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }

      // Vérification de la longueur du prenom
      if (!preg_match($regexLongueur, $_POST["prenom"])) {
        echo "Le prenom doit contenir au moins 8 caractères.<br>";
        exit();
      }

      // Vérification de la longueur du email
      if (!preg_match($regexEmail, $_POST["mail"])) {
        echo "Le email doit contenir au moins 8 caractères.<br>";
        exit();
      }
           
      // Vérification de la longueur du pass
      if (!preg_match($regexPass, $_POST["mdp"])) {
        echo "Le mdp pass doit contenir au moins : 1 lettre + 1 chiffre + 1 caractère speciale<br>";
        exit();
      }

      // Vérification de la longueur du pass
      if (!preg_match($regexPass, $_POST["cmdp"])) {
        echo "Le cmdp pass doit contenir au moins : 1 lettre + 1 chiffre + 1 caractère speciale<br>";
        exit();
      }

      
      // Vérification de l'egalié' doit etre égale
      if ($_POST["mdp"] !== $_POST["cmdp"]) {
        echo "Vous devez reecrire le mot de psse .<br>";
        exit();
      }

      //filter_var est utilisée pour vérifier si l'email est valide en utilisant le filtre FILTER_VALIDATE_EMAIL. Cette fonction a une validation intégrée spécifique aux adresses email et vérifie si la valeur passée correspond au format attendu d'une adresse email
      // Vérification de l'email
      if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        echo ("Entrer un email correct");
        exit();
      }
      
    } 
    else {
    
      echo " C'est une erreur";
      // header("Location: ../Accueil/1.php?msg=C'est une erreur");
    }

    //la fonction password_hash sert a hacher le motdepass 
    //lalgorythme passworld_defauld est utilisé par défaut est le plus approprié et sécurisé disponible sur votre version de PHP
    $data['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    //la fonction password_hash sert a hacher le motdepass 
    //lalgorythme passworld_defauld est utilisé par défaut est le plus approprié et sécurisé disponible sur votre version de PHP
    $data['cmdp'] = password_hash($_POST['cmdp'], PASSWORD_DEFAULT);







    //grace au insert into quon recupere la valeur entré par lutilisateur dans la BD
    // Préparer la requête d'insertion
    $query = "INSERT INTO users (";
    $query .= implode(", ", array_keys($data)); // Obtenir la liste des colonnes
    //implode : prendre un tab separe le par ";" et faire en chaine de carac
    //array key : retourne une chaine avec key
    $query .= ") VALUES (";
    $query .= ":" . implode(", :", array_keys($data)); // Obtenir la liste des paramètres
    $query .= ")";

    
    $statement = $db->prepare($query);

    // Lier les paramètres
    foreach ($data as $key => $value) {
      $statement->bindValue(':' . $key, $value);
    }

    // Exécuter la requête
    $statement->execute();

    // Rediriger vers une page de succès ou afficher un message de succès
    header("Location: ../Accueil/1.php");
    exit();
  } 
  catch (PDOException $e) {
    // Gérer les erreurs de la base de données
    echo ("Erreur de la base de données : " . $e->getMessage());
    echo "Erreur de la base de données : " . $e->getMessage();
  }
  
}

?>

<html>
  <!-- _________________________Form inscription_______________________________ -->

  <form class="form" action="inscription.php" method="POST">
  <div>
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="JACQUET" required>
  </div>

  <div>
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" value="Jean Marc" required>
  </div>

  <div>
    <label for="adresse mail">Mail</label>
    <input type="text" name="mail" value="jackychan@gmail.com" required>
  </div>

  <div>
    <label for="mdp">Password</label>
    <input type="password" name="mdp" value="jean123*" required>
  </div>

  <div>
    <label for="cmdp">Confirm Password</label>
    <input type="password" name="cmdp" value="jean123*" required>
  </div>

  <div>
    <label for="role">Sélectionnez un rôle :</label>
    <select id="role" name="role">
      <option value="1">Employés 1</option>
      <option value="2">Gerants 2</option>
      <option value="3">Administrateur 3</option>
    </select>
  </div>

  <div>
    <button id="Envoye">ENVOYER</button>
  </div>
</form>
