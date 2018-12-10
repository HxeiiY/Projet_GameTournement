<?php
include('../includeUser.php');
?>
  <!-- Permet de faire la redirection vers la page d'informations du Tournoi -->
  <script src="../../TOOLS/JAVASCRIPT/CreateTournoi.js"></script>

  <body id="page-top">

      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- LE CODE COMMENCE ICI -->

            <div style="border:1px solid whitesmoke;border-radius:9999px;padding:30px;background-image:url(../../IMAGES/Banners/RL_Banner.jpg);background-position:center right;background-repeat: repeat-y;">
            <span id="NameTournement">Je suis en train de faire un test </span>
            <button style="margin-left:70%" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Inscrire <i class="fa fa-arrow-right"></i></button>
            </div>

            <br/>



			<!-- Bouton de création de tournoi -->
			<button type="button" class="btn btn-success" id="BtnCreate">Creation de tournoi</button>

			
    	</div>

	
		</div>
    </div>
    

    <!-- Modal  -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription au Tournoi </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <!-- Le code de la modal commence ici  -->
        <div class="container">
            Je suis en train de faire un test de la modal
            <div id="imgTournoi"></div>
            <div id="nomTournoi"></div>
            <div id="nbParticipants">5/45</div>
            Nom des participants 
            <div id="lstParticipants"></div>
        </div>

				</div>
		  </div> 
		 <!-- Le code de la modal se termine ici --> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
	


	</body>
</html>
