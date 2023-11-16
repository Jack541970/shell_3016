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
    <button><a href="../Accidents/view_files.php">Accidents</a></button>
    <button><a href="../Ressources_humaines/view_files.php">Ressources Humaines</a></button>
    <button><a href="../Entreprise/view_files.php">Entreprise</a></button>
    <button style="background-color:#ed1c24;">Santé et Securité</a></button>
    <button><a href="../Produits_chimiques/view_files.php">Produits chimiques</a></button>
    <button><a href="../Materiels/view_files.php">Matériels</a></button>
    <button><a href="../Rapports_mensuels/view_files.php">Rapports Mensuels</a></button>
    <button><a href="../Divers/view_files.php">Divers</a></button>
</div>



  <!-- _________________________Sante et securite zone1_______________________________ -->
  <br>
  <br>
  <h1 class="titre_marge-gauche titre_marge-droite">Liste des fichiers</h1>
<h1 class="titre_marge-gauche titre_marge-droite">SANTE ET SECURITE</h1>
  <br>
  <h1 class="ligne-rouge"></h1>
  <br>
  <br>
  
<body>
  <h2>Postes à risques</h2>

    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM sante_et_securite1";
      $stmt = $db->query($query);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        echo '<li><a href="display1.php?id=' . $id . '">' . $nom . '</a></li>';
      }
      ?>
    </ul>
    <br>

<!-- _________________________Sante et securite zone2_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>


<body>
  <h2>Travailleur désigné</h2>

    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM sante_et_securite2";
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

<!-- _________________________Sante et securite zone 3_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

<body>
  <h2>Formation premier secours</h2>

    <ul>
      <?php

      $query = "SELECT id, nom FROM sante_et_securite3";
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
<!-- _________________________Sante et securite zone4_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

<body>
  <h2>HACCP: Hygiène alimentaire</h2>

    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM sante_et_securite4";
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

<!-- _________________________Sante et securite zone5_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

<body>
  <h2>Agression</h2>

  <form action="delete_files5.php" method="post">
    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM sante_et_securite5";
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
<!-- _________________________Sante et securite zone6_______________________________ -->
<br>
<h1 class="ligne-rouge"></h1>
<br>
<br>

<body>
  <h2>Safety days</h2>

    <ul>
      <?php
      require_once('./cdb.php');

      $query = "SELECT id, nom FROM sante_et_securite6";
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


