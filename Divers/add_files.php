<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="../Accueil/1.js" defer></script>
  <link rel="stylesheet" type="text/css" href="../Accueil/style.css">
  <link rel="stylesheet" href="./Accueil\style.css">



  <?php
  require_once("../Accueil/barre_nav.php");
  require_once('./cdb.php');
  ?>

  <head>
    <title>Télécharger et enregistrer dans la base de données DIVERS</title>
  </head>
  <div class="button-container">
    <button><a href="../Accidents/add_files.php">Accidents</a></button>
    <button><a href="../Ressources_humaines/add_files.php">Ressources Humaines</a></button>
    <button><a href="../Entreprise/add_files.php">Entreprise</a></button>
    <button><a href="../Sante_et_securite/add_files.php">Santé et Securité</a></button>
    <button><a href="../Produits_chimiques/add_files.php">Produits chimiques</a></button>
    <button><a href="../Materiels/add_files.php">Matériels</a></button>
    <button><a href="../Rapports_mensuels/add_files.php">Rapports Mensuels</a></button>
    <button style="background-color:#ed1c24;">Divers</a></button>
  </div>


  <!-- _________________________Divers zone1_______________________________ -->
  <br>
  <br>
  <h1 class="titre_marge-gauche titre_marge-droite">Formulaire de téléchargement des fichiers</h1>
  <h1 class="titre_marge-gauche titre_marge-droite">DIVERS</h1>  <br>
  <h1 class="ligne-rouge"></h1>
  <br>
  <br>
  <form action="download11.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>

<body>
  <h2>Divers</h2>

  <form action="delete_files1.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM divers1";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><a href="display1.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
  </form>
</body>

<h1 class="ligne-rouge"></h1>
<br>
<br>

