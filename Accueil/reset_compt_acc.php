<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compteur de jours sans accident</title>
  <script src="../Accueil/1.js" defer></script>
  <link rel="stylesheet" type="text/css" href="../Accueil/style.css">
</head>

<?php
  require_once("../Accueil/barre_nav.php");
  ?>



<body>
  <h1>Compteur de jours sans accident</h1><br>
  <label for="lastAccidentDate">Choisir la date du dernier accident :</label><br>
  <input type="date" id="lastAccidentDate"><br>
  <button onclick="setLastAccidentDate()">Mettre à jour la date</button><br><br><br>
  <div>Date du dernier accident : <span id="lastAccidentDateDisplay"></span></div><br>
  <div>Jours sans accident : <span id="daysWithoutAccident">0</span></div><br><br>
  <div>Record des jours sans accident : <span id="recordDaysWithoutAccident"></span></div>
  <button onclick="resetRecordDaysWithoutAccident()" style="background-color: red;">Réinitialiser le record</button>
</body>
</html>