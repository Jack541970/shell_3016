<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="../Accueil/1.js" defer></script>
  <link rel="stylesheet" type="text/css" href="../Accueil/style.css">

</head>

<?php
require_once("../Accueil/barre_nav.php");

?>

<!-- _________________________Jours sans accident_______________________________ -->

<body>

  <input type="date" id="lastAccidentDate">


  <div style="text-align: center; margin-top: 10px;">
    <div
      style="display: inline-block; font-size: 20px; color: #008080; margin: 0 0px; border: 1px solid #008080; padding: 5px;">
      Date du dernier accident : <span id="lastAccidentDateDisplay"></span></div>
    <div
      style="display: inline-block; font-size: 20px; color: #008080; margin: 0 150px; border: 1px solid #008080; padding: 5px;">
      Jours sans accident : <span id="daysWithoutAccident">0</span></div>
    <div
      style="display: inline-block; font-size: 20px; color: #008080; margin: 0 0px; border: 1px solid #008080; padding: 5px;">
      Record des jours sans accident : <span id="recordDaysWithoutAccident"></span></div>
  </div>
</body>

</html>


<!-- _______________________Message de sécurité (texte déroulant)______________________________ -->

<?php
function texteDeroulant($texte, $vitesse = 1)
{
  // Échappe le texte pour éviter les failles XSS
  $texte = htmlspecialchars($texte, ENT_QUOTES, 'UTF-8');

  // Styles CSS pour la div contenant le texte déroulant
  $style = 'text-align: center; font-size: 74px;'; // Taille de police

  // texte déroulant et les styles CSS
  echo '<div style="' . $style . '"><marquee behavior="scroll" direction="left" scrollamount="' . $vitesse . '">' . $texte . '</marquee></div>';
}

// Message sécurité
$texte = "PENSEZ SECURITE !";
$vitesse = 10; // Vitesse de défilement

texteDeroulant($texte, $vitesse);
?>
</div>

<!-- _______________________________________Wrapper/Pictogrammes___________________________________ -->


<article class="conteneur-flex">
  <div class="conteneur-groupe">
    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:20px; color: #008080;">ACCIDENTS</p>
      
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise
      </p>
      <button id="bt2" style="margin-top:15px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>

    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>

    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>

    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>
    </div>

    <div class="conteneur-groupe">
    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>

    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>

    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>

    <div class="picto"
      style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 41vh;">
      <p style="margin-top:20px;margin-bottom:0px; color: #008080;">ACCIDENTS</p>
      <p style="color: #008080;">ACCIDENTS</p>
      <!-- <p style="color: #008080;">ACCIDENTS</p> -->
      <img class="ico1" style="margin: 0px 0; width: 100px; height: 100px;" src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin: 5px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches de sécurité
      </p>
      <button id="bt2" style="margin: 5px;">ACCIDENTS</button>


      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)): ?>

      <?php endif; ?>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var button = document.getElementById("bt2");

          button.addEventListener("click", function () {
            window.location.href = "../Accidents/view_files.php"; //URL pour le lien
          });
        });
      </script>
    </div>
  </div>



      
</article>


<!-- formulaire de message users -->

<form class="form connexion" action="../Message/cont_regex_mesage.php" method="POST">
  <div>
    <label for="nom">Nom</label>
    <input type="text" name="nom" value="JACQUET" required>
  </div>
  <div>
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" value="Jean-Marc" required>
  </div>
  <div>
    <label for="adresse mail">E-mail</label>
    <input type="text" name="mail" value="jackychan@gmail.com" required>
  </div>
  <div>
    <label for="sujet">Sujet</label>
    <input type="text" name="sujet" value="Sujet" required>
  </div>

  <div>
    <label for="text">Texte</label>
    <textarea name="text" id="" cols="30" rows="5"></textarea>
    <button id="Envoye">ENVOYER</button>
  </div>

</form>

<?php
require_once("../Accueil/footer.php");
?>