<header>

  <head>
    <link rel="stylesheet" href="../Accueil/style.css">
    <script src="../Accueil/1.js" defer></script>
  </head>

  
  <!-- _________________________menu deroulant burger_______________________________ -->

  <div id="pop" class="menupop">

    <li class="">
      <p style="color: #ed1c24;"><span style="text-decoration: underline;">UTILISATEURS</span></p>
    </li>

    <li class="nav-link ">
      <a class="lac" href="../Connex_inscription/connex_users.php">> Connexion </a>
    </li>

    <li class="nav-link">
      <a href="../Connex_inscription/deconnexion.php">> Déconnexion </a>
    </li>



    <?php
    @session_start();

    if (isset($_SESSION['user'])) {
      $role = intval($_SESSION['user']['role']);

      if ($role === 1 || $role === 2 || $role === 3) {
        echo '<li class=""><p style="color: teal;"><span style=";">CONNECTE</span></p></li>';

        // Ajoutez ici les éléments spécifiques au rôle 1, 2 et 3
      }
      if ($role === 2 || $role === 3) {
        echo '<li class=""><p style="color: #ed1c24;"><span style="text-decoration: underline;">GERANTS</span></p></li>';
        echo '<li class="nav-link"><a href="../Accidents/add_files.php">> Ajouter un document </a></li>';

      }

      if ($role === 3) {
        echo '<li class=""><p style="color: #ed1c24;"><span style="text-decoration: underline;">ADMINISTRATEUR</span></p></li>';
        echo '<li class="nav-link"><a href="../Accidents/add_supp_files.php">> Ajou / Supp un document </a></li>';
        echo '<li class="nav-link"><a href="../Connex_inscription/inscription.php">> Inscription </a></li>';
        echo '<li class="nav-link"><a href="../Message/read_supp_messages.php">> Messages reçus </a></li>';
        echo '<li class="nav-link"><a href="../Message/read_supp_messages.php">> contrôle reglementaire </a></li>';
        echo '<li class="nav-link"><a href="../Accueil\reset_compt_acc.php">> Derniere date Acc. </a></li>';

      }


    }
    ?>
  </div>

  <img id="logo" src="../Resources PGM/Icones/logo.png" alt="Le logo">
  <P class="societe">SNFROL s.à.r.l. / Securité.Santé.Travail</P>
  <nav>

    <ul class="navlist">

      <li>
        <a href="../Accueil/1.php">Acceuil</a>
      </li>

      <li>
        <p style="margin-right: 150px;">Tel : 661 20 30 54</p>
      </li>
    </ul>
    <a id="burger" href="#">
      <div class="menu-wrapper">
        <div class="burger-icon">
          <div class="line"></div>
          <div class="line un"></div>
          <div class="line deux"></div>
        </div>
      </div>
    </a>


  </nav>


</header>