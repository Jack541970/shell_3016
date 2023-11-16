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
    <title>Télécharger dans la base de données</title>
  </head>


  <div class="button-container">
    <button style="background-color:#ed1c24;">Accidents</a></button>
    <button><a href="../Ressources_humaines/add_files.php">Ressources Humaines</a></button>
    <button><a href="../Entreprise/add_files.php">Entreprise</a></button>
    <button><a href="../Sante_et_securite/add_files.php">Santé et Securité</a></button>
    <button><a href="../Produits_chimiques/add_files.php">Produits chimiques</a></button>
    <button><a href="../Materiels/add_files.php">Matériels</a></button>
    <button><a href="../Rapports_mensuels/add_files.php">Rapports Mensuels</a></button>
    <button><a href="../Divers/add_files.php">Divers</a></button>
  </div>



<!-- _________________________Accidents zone1_______________________________ -->
<br>
  <br>
  <h1 class="titre_marge-gauche">Formulaire de téléchargement des fichiers</h1>
  <h1 class="titre_marge-gauche">ACCIDENTS</h1>

  <br>
  <h1 class="ligne-rouge"></h1>
  <br>
  <br>



  <form action="download11.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>

<body>
  <h2>Accidents du personnel /Suivi</h2>

  <form action="delete_files1.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM accidents1";
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


<!-- _________________________Accidents zone2_______________________________ -->

<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>
<body>
  <form action="download12.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>



</body>

</html>


<body>
  <h2>Procedures</h2>

  <form action="delete_files2.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM accidents2";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><a href="display2.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
  </form>
</body>

  <!-- _________________________Accidents zone 3_______________________________ -->
  <br>
<h1 class="ligne-rouge"></h1>
<br>
<br>


<body>
  <form action="download13.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="Télécharger et enregistrer">
  </form>
</body>

<body>
  <h2>Constats</h2>

  <form action="delete_files3.php" method="post">
    <ul>
      <?php

      $query = "SELECT id, nom FROM accidents3";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><a href="display3.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>
  </form>
</body>

<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

</html>