<?php
session_start()
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

<!-- BOOSTRAP CSS -->
<link rel="stylesheet" href="../../TOOLS/BOOSTRAP/bootstrap.css">

<!-- Plugin Boostrap : Jquery et Boostrap JS -->
<script src="../../TOOLS/BOOSTRAP/bootstrap.js"></script>

<!-- Dashboard Controller CSS & JS -->
<link href="../../TOOLS/DASHBOARD/Dashboard.css" rel="stylesheet">
<script src="../../TOOLS/DASHBOARD/Dashboard.js"></script>
   <!-- Homepage CSS & Script-->
   <link rel="stylesheet" href="../../TOOLS/CSS/Index.css">
  <script src="../TOOLS/JAVASCRIPT/Inscription.js"></script>

</head>

<body>
  <form method="post" action="../../MODEL/user_services.php" style="margin-left: 30%">
      <input type="hidden" name="action" value="infos-user">
    <h1>Informations Complémentaires</h1>
    <i style="color: darkgrey">Des informations sont requises afin de pouvoir vous identifier sur le site</i>

    <div class="col-md-6">&nbsp;</div>

    <div class="form-group">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Civilite" id="Civilite1" value="1">
        <label class="form-check-label" for="Monsieur">Monsieur</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Civilite" id="Civilite2" value="2">
        <label class="form-check-label" for="Madame">Madame</label>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Prénom</label>
        <input type="text" class="form-control" id="PrenomUser" name="Prenom" placeholder="Prénom">
      </div>
      <div class="form-group col-md-4">
        <label>Pseudo</label>
        <input type="text" class="form-control" id="PseudoUser" name="Pseudo" placeholder="Pseudo">
      </div>
      <div class="form-group col-md-4">
        <label>Nom</label>
        <input type="text" class="form-control" id="NomUser" name="Nom" placeholder="Nom">
      </div>

    </div>

    <div class="form-group">
      <label>Adresse</label>
      <input type="text" class="form-control" id="AdresseUser" name="Adresse" placeholder="Adresse">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Ville</label>
        <input type="text" class="form-control" id="VilleUser" name="Ville" placeholder="Ville">
      </div>
      <div class="form-group col-md-6">
        <label>Pays</label>
        <select id="PaysUser" name="Pays" class="form-control">
          <option selected>....</option>
          <option>...</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label>Portable </label>
      <input type="text" class="form-control" id="NumeroUser" name="Numero" placeholder="Numéro">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Console</label>
        <select id="ConsoleUser" name="Console" class="form-control">
          <option selected>....</option>
          <option>Playstation 4 </option>
          <option>Xbox One</option>
          <option>Switch</option>
          <option>PC</option>
        </select>
      </div>

      <div class="form-group col-md-6" hidden="hidden">
        <label>GamerTag</label>
        <input type="text" class="form-control" id="GamerTagUser" name="GamerTag" placeholder="GamerTag">
      </div>
    </div>

    <button class="btn btn-primary" style="margin-left: 40%" type="submit">Entrer</button>
  </form>
</body>

</html>