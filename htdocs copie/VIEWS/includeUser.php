<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Hxeiiy">

<title>GameTournement </title>

<!-- CDN Boostrap / Jquery / Pooper -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!-- Mode Fichier dans projet  -->

<!-- BOOSTRAP CSS -->
<link rel="stylesheet" href="../../TOOLS/BOOSTRAP/bootstrap.css">

<!-- Plugin Boostrap : Jquery et Boostrap JS -->
<script src="../../TOOLS/BOOSTRAP/bootstrap.js"></script>
<script src="../../TOOLS/JQUERY/jquery-3.3.1.min.js"></script>
<script src="../../TOOLS/JQUERY/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Dashboard Controller CSS & JS -->
<link href="../../TOOLS/DASHBOARD/Dashboard.css" rel="stylesheet">
<script src="../../TOOLS/DASHBOARD/Dashboard.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">

</head>
<body>
 <!-- Barre Horizontale -->
 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="../../VIEWS/">GameTournement </a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

    <div id="wrapper">

      <!-- Barre Latérale  -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="UserPage.php"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Profil</span> </a> </li>
    <li class="nav-item active"> <a class="nav-link" href="TournoiPage.php"> <i class="fas fa-trophy"></i> <span>Tournoi</span> </a> </li>
    <li class="nav-item active"> <a class="nav-link" href="AgendaPage.php"> <i class="fas fa-calendar-alt"></i> <span>Agenda</span> </a> </li>
    <li class="nav-item"> <a class="nav-link" href="GamePage.php"> <i class="fas fa-gamepad"></i> <span>Jeux</span></a> </li>
    <li class="nav-item"> <a class="nav-link" href="#"> <span>Equipe</span></a> </li>
    <li class="nav-item"> <a class="nav-link" href="#"> <i class="fas fa-book-reader"></i> <span>News</span></a> </li>
    
    <li class="nav-item" style="position: relative;top: 15.5em;"> 

    <a class="nav-link" href="/unlog-user"> <span>Deconnecté</span></a> </li>

  </ul>
</body>
</html>