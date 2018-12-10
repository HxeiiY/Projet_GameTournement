<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hxeiiy">
	 
	 <!-- Fichier Local  -->
	<script src="../TOOLS/JQUERY/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../TOOLS/JQUERY/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="../TOOLS/CSS/Animate.css">

    <!-- Boostrap Local -->
    <script src="../TOOLS/BOOSTRAP/bootstrap.js"></script>
    <link rel="stylesheet" href="../TOOLS/BOOSTRAP/bootstrap.css">

    <!-- Popper CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

    <!-- Homepage CSS & Script-->
    <link rel="stylesheet" href="../TOOLS/CSS/Index.css">
	<script src="../TOOLS/JAVASCRIPT/Inscription.js"></script>
	
	<!-- Homepage Modal CDN & FontAwesome-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>GameTournement</title>
    
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">GameTournement</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Accueil</a>
            <a class="nav-link" href="#">Qui sommes nous ?</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">REJOINT LES GAMEURS DU MONDE ENTIER</h1>
        <p class="lead">GameTournement est un site communautaire ou tu peux défier les joueurs du monde entier dans des Tournois
                    ou Compétition</p>
        <p class="lead">
            

            <a href='#' class='btn btn-lg btn-secondary' id='BtnHome' data-toggle='modal' data-target='#modalLRForm' >Connecter</a>
          
        </p>
      </main>
      
      <!-- Méssage d'erreur -->
        <?php    
        if(isset($_GET['error'])=='error'){
        echo '<div style="color: pink;">Erreur dans le Login / Mot de Passe </div>';
        }else if(isset($_GET['errorins'])=='errorins'){
        echo '<div style="color: pink;">Les champs ne sont pas remplis correctement </div>';
        }
        ?>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <i>Fait avec passion et amour par Hxeiiy</i>
        </div>
      </footer>
    </div>
	  
	  
<!-- Modal -->	  
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <div class="modal-c-tabs">

                <!-- Icones Connexion & Inscription -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Inscription</a>
                    </li>
                </ul>

                <!-- Modal Connexion -->
                <div class="tab-content">
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
						
                        <!--Body-->
							<!-- Formulaire Connexion -->
						<form method="POST" action="../MODEL/user_services.php">
							<input type="hidden" name="action" value="log-user">
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                              <input type="text" name="PseudoLog" class="form-control" placeholder="Identifiant" style="padding-left: 40px; width: 80%;">
                                <i class="fa fa-envelope prefix" style="position: absolute; left: 0px;top: 2px"></i>
                        </div>

                            <div class="md-form form-sm mb-4">
                                <input type="password" name="MdpLog" class="form-control " placeholder="Mot de passe" style="padding-left: 40px; width: 80%">
								<i class="fa fa-lock prefix" style="position: absolute; left: 0px;top: 2px;left: 3px"></i>
                            </div>

                            <div class="text-center mt-2">
                                <button class="btn btn-info">Connexion <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
							
						</form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Pas encore inscrit ? :<a href="#" class="blue-text" > Rejoint l'équipe</a></p>
                                <p>Mot de passe oublié ? :<a href="#panel8" class="blue-text"> Cliquez ici</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                        </div>

                    </div>
                    <!--/Fin Connection-->

                    <!-- Modal Inscription -->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
		
							
                        <!--Body-->
                        <form method="POST" action="../MODEL/user_services.php">
                            <input type="hidden" name="action" value="create-user">
                        <div class="modal-body">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix" style="position: absolute; left: 0px;top: 2px;left:30px"></i>
                                <input type="text" name="NameUser" class="form-control " placeholder="Identifiant" style="padding-left: 40px; width: 80%">
                               
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix" style="position: absolute; left: 0px;top: 2px;left:35px"></i>
                                <input type="password" name="MdpUser" class="form-control" placeholder="Mot de passe" style="padding-left: 40px; width: 80%">
                                
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix" style="position: absolute; left: 0px;top: 2px;left:35px"></i>
                                <input type="password" name="MdpUserDup" class="form-control " placeholder="Repeter le mot de passe" style="padding-left: 40px; width: 80%">
                            </div>
							
							<div class="md-form form-sm mb-4">
                                <i class="fa fa-envelope prefix" style="position: absolute; left: 0px;top: 2px;left:35px"></i>
                                <input type="email" name="EmailUser" class="form-control " placeholder="Email" style="padding-left: 40px; width: 80%">
                            </div>
						

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" >Connexion<i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
    </form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Tu as déja un compte ? <a class="blue-text">Connecte toi </a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                    <!--/Fin Modal Inscription-->
                </div>

            </div>
        </div>
    </div>
</div>

  <style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans');
  body , *
  {
      font-family: 'Open Sans', sans-serif;
      font-family: 'Montserrat', sans-serif;
  }
  </style>


<!-- Fin Modal -->  

    <!-- ================================================== -->
   <!-- D'après Boostrap, Mettre les scriptes à la fin permettraient de recharger la page plus rapidement 

	Inconvéniant : Charge le HTML sans les éléments graphiques 

	-->
  </body>
</html>
