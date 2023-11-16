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
function texteDeroulant($texte, $vitesse = 1) {
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
    <div class="picto">
      <P style="margin-left:45px; color:#008080">ACCIDENTS</P>
      <img class="ico1" style="margin-top:22px; margin-bottom:0px; margin-left:40px; "
        src="../Resources PGM/Icones/images accidents 1.png" alt="">
      <p style="margin-bottom:22px">Gestion administrative des accidents de travail et de trajet</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt2" style="margin-left:42px;margin-top:9px">ACCIDENTS</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt2");

        button.addEventListener("click", function() {
          window.location.href = "../Accidents/view_files.php"; //URL pour le lien
        });
      });
      </script>
    </div>


    <div class="picto">
      <span style="margin-left: 35px; color:#008080">RESSOURCES</span>
      <span style="margin-left: 44px;color:#008080">HUMAINES</span>
      <img class="ico1" style="margin-top:5px;margin-left:40px;" src="../Resources PGM/Icones/entreprise 1.png" alt="">
      <p style="margin-bottom:10px">Délégation Personnel/Planning/Visite
        Medicale/Formation/Recap. Maladie</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt3" style="margin-left:6px">RESSOURCES_HUMAINES</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt3");

        button.addEventListener("click", function() {
          window.location.href =
            "../ressources_humaines/view_files.php"; //URL pour le lien
        });
      });
      </script>

    </div>
    <div class="picto">
      <P style="margin-left:45px; color:#008080">ENTREPRISE</P>
      <img class="ico1" style="margin-top:22px; margin-bottom:22px; margin-left:40px; "
        src="../Resources PGM/Icones/RH.png" alt="">
      <p style="margin-left:10px">Information liées à l'entreprise et à son bon fonctionnement</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt4" style="margin-left:42px; margin-top:9px">ENTREPRISE</button>

      <?php endif; ?>

    </div>

    <div class="picto">
      <P style="margin-left:50px; color:#008080">SANTE ET SECURITE</P>
      <img class="ico1" style="margin-top:6px; margin-bottom:0px; margin-left:40px; "
        src="../Resources PGM/Icones/sante et securite.png" alt="">
      <p style="margin-bottom: 28px;"> Iventaires des postes à risques et de l'evaluation des risques</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt5" style="margin-left:20px">SANTE ET SECURITE</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt5");

        button.addEventListener("click", function() {
          window.location.href =
            "../Sante_et_securite/view_files.php"; //URL pour le lien
        });
      });
      </script>

    </div>
  </div>

  <div class="conteneur-groupe">
    <div class="picto">
      <P style="margin-left:50px; color:#008080">PRODUITS CHIMIQUES</P>
      <img class="ico1" style="margin-top:6px; margin-bottom:0px; margin-left:40px; "
        src="../Resources PGM/Icones/chimiques 1.png" alt="">
      <p style="margin-bottom: 10px;">Evalue la criticité des produits chimiques utilisées par l'entreprise + fiches
        de sécurité</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt6" style="margin-left:12px">PRODUITS CHIMIQUES</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt6");

        button.addEventListener("click", function() {
          window.location.href =
            "../Produits_chimiques/view_files.php"; //URL pour le lien
        });
      });
      </script>
    </div>

    <div class="picto">
      <P style="margin-left:45px; color:#008080">MATERIELS</P>
      <img class="ico1" style="margin-top:22px; margin-bottom:0px; margin-left:40px; "
        src="../Resources PGM/Icones/materiel.jpg" alt="">
      <p style="margin-bottom:32px">Gestion des installations,des machines et des équipements</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt7" style="margin-left:42px">MATERIELS</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt7");

        button.addEventListener("click", function() {
          window.location.href = "../Materiels/view_files.php"; //URL pour le lien
        });
      });
      </script>
      </a>
    </div>

    <div class="picto">
      <P style="margin-left:50px; color:#008080">RAPPORTS MENSUELS</P>
      <img class="ico1" style="margin-top:6px; margin-bottom:0px; margin-left:40px; "
        src="../Resources PGM/Icones/rapport 1.png" alt="">
      <p style="margin-bottom: 65px;">Gestion des caisses</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt8" style="margin-left:20px">RAPPORTS MENSUELS</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt8");

        button.addEventListener("click", function() {
          window.location.href =
            "../Rapports_mensuels/view_files.php"; //URL pour le lien
        });
      });
      </script>

    </div>

    <div class="picto">
      <P style="margin-left:45px; color:#008080">DIVERS</P>
      <img class="ico1" style="margin-top:22px; margin-bottom:0px; margin-left:40px; "
        src="../Resources PGM/Icones/divers.jpg" alt="">
      <p style="margin-bottom:68px">Documents</p>

      <?php if (isset($_SESSION['user']) && (intval($_SESSION['user']['role']) === 1 || intval($_SESSION['user']['role']) === 2 || intval($_SESSION['user']['role']) === 3)) : ?>

      <button id="bt9" style="margin-left:62px">DIVERS</button>

      <?php endif; ?>

      <script>
      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt9");

        button.addEventListener("click", function() {
          window.location.href = "../Divers/view_files.php"; //URL pour le lien
        });
      });
      </script>
      </a>
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



