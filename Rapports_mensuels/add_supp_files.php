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
    <title>Télécharger et enregistrer dans la base de donnéesRH</title>
  </head>
  <div class="button-container">
    <button><a href="../Accidents/add_supp_files.php">Accidents</a></button>
    <button><a href="../Ressources_humaines/add_supp_files.php">Ressources Humaines</a></button>
    <button><a href="../Entreprise/add_supp_files.php">Entreprise</a></button>
    <button><a href="../Sante_et_securite/add_supp_files.php">Santé et Securité</a></button>
    <button><a href="../Produits_chimiques/add_supp_files.php">Produits chimiques</a></button>
    <button><a href="../Materiels/add_supp_files.php">Matériels</a></button>
    <button style="background-color:#ed1c24;">Rapports Mensuels</a></button>
    <button><a href="../Divers/add_supp_files.php">Divers</a></button>
  </div>

  <br>
  <br>
  <h1 class="titre_marge-gauche titre_marge-droite">Formulaire de téléchargement et de suppression des fichiers</h1>
  <h1 class="titre_marge-gauche titre_marge-droite">RAPPORTS MENSUELS</h1>  
  <br>


<!-- _________________________Materiels zone1_______________________________ -->
   <br>
  <h1 class="ligne-rouge"></h1>
  <br>
  <br>
  <form action="download1.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>

<body>
  <h2>Rodange</h2>

  <form action="delete_files1.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM rapports_mensuels1";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display1.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>

<!-- _________________________Materiels zone2_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

<body>
  <form action="download2.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>



</body>


<body>
  <h2>Petange</h2>

  <form action="delete_files2.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM rapports_mensuels2";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display2.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>

<!-- _________________________Materiels zone 3_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

<body>
  <form action="download3.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>
</body>

<body>
  <h2>Differdange</h2>

  <form action="delete_files3.php" method="post">
    <ul>
      <?php

      $query = "SELECT id, nom FROM rapports_mensuels3";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display3.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>
<!-- _________________________Materiels zone 4_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>
<form action="download4.php" method="post" enctype="multipart/form-data">
  <label for="file">Sélectionnez un fichier :</label>
  <input type="file" name="file" id="file">
  <input type="submit" name="submit" value="Télécharger et enregistrer">
</form>

<body>
  <h2>Martelange 1</h2>

  <form action="delete_files4.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM materiels4";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display4.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>

<!-- _________________________Materiels zone 5_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>
<form action="download5.php" method="post" enctype="multipart/form-data">
  <label for="file">Sélectionnez un fichier :</label>
  <input type="file" name="file" id="file">
  <input type="submit" name="submit" value="Télécharger et enregistrer">
</form>

<body>
  <h2>Martelange 2</h2>

  <form action="delete_files5.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM rapports_mensuels5";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display5.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>

<!-- _________________________Materiels zone 6_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>
<form action="download6.php" method="post" enctype="multipart/form-data">
  <label for="file">Sélectionnez un fichier :</label>
  <input type="file" name="file" id="file">
  <input type="submit" name="submit" value="Télécharger et enregistrer">
</form>

<body>
  <h2>Neudorf</h2>

  <form action="delete_files6.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM rapports_mensuels6";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display6.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>

<!-- _________________________Materiels zone 7_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>
<form action="download7.php" method="post" enctype="multipart/form-data">
  <label for="file">Sélectionnez un fichier :</label>
  <input type="file" name="file" id="file">
  <input type="submit" name="submit" value="Télécharger et enregistrer">
</form>

<body>
  <h2> Wämperhaart</h2>

  <form action="delete_files7.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM rapports_mensuels7";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><input type="checkbox" name="filesToDelete[]" value="' . $id . '"> <a href="display7.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
    <input type="submit" name="submit" value="Supprimer les fichiers sélectionnés">
  </form>
</body>