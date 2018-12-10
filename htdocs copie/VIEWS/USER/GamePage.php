<?php
include('../includeUser.php');
?>
<head>
<!-- Script AJAX permettant de recevoir les informations de AffichageController.php (Base de donnée ) -->
<script src="../../TOOLS/JAVASCRIPT/DataGame.js"></script>
</head>

<body id="page-top">

  <div id="content-wrapper">
    <div class="container-fluid"> 
      
      <!-- Barre Horizontale II -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="../GamePage.php">Jeux E-Sport</a></li>
      </ol>
      
      <!-- LE CODE COMMENCE ICI --> 
      <span>Listes des Jeux videos</span> 
      
      <!-- Conteneur des informations des jeux  -->
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row"> 
            
            <!-- HOTS -->
            <div class="col-md-2 GameCARD" data-info="HOTS" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/HOTS.jpg" alt="Heroes of the storm">
                <div class="card-body"> <span class="card-text" style="text-align:center" data-img="HOTS">Heroes of the Storm</span> </div>
              </div>
            </div>
            
            <!-- League of legends -->
            <div class="col-md-2 GameCARD" data-info="LOL" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/LOL.jpg" alt="League of legend">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" >League of legends</p>
                </div>
              </div>
            </div>
            <!-- Counter Strike : Global offensive -->
            <div class="col-md-2 GameCARD" data-info="CS" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/CS.jpg" alt="Counter Strike : Global Offensive">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" >Counter Strike : Global Offensive </p>
                </div>
              </div>
            </div>
            <!-- Dragon ball Fighter Z -->
            <div class="col-md-2 GameCARD" data-info="DBZ" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/DBZ.jpg" alt="Dragon ball Fighter Z">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" >Dragon Ball Fighter Z</p>
                </div>
              </div>
            </div>
            <!-- Fortnite -->
            <div class="col-md-2 GameCARD" data-info="FNT" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/Fortnite.jpg" alt="Fortnite">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" >Fortnite</p>
                </div>
              </div>
            </div>
            <!-- Call of Duty -->
            <div class="col-md-2 GameCARD" data-info="COD" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/COD.jpg" alt="Call of duty ">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="COD">Call of Duty : World War II</p>
                </div>
              </div>
            </div>
            <!-- Dota II -->
            <div class="col-md-2 GameCARD" data-info="DOTA" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/DOTA.jpg" alt="Dota 2">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="DOTA">Dota II</p>
                </div>
              </div>
            </div>
            <!-- Echecs -->
            <div class="col-md-2 GameCARD" data-info="ECH" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/ECHEC.jpg" alt="Echecs">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="ECH">Echecs</p>
                </div>
              </div>
            </div>
            <!-- Hearthstone -->
            <div class="col-md-2 GameCARD" data-info="HRS" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/Hearstone.jpg" alt="Hearthstone">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="HRS">Hearthstone</p>
                </div>
              </div>
            </div>
            <!-- Overwatch -->
            <div class="col-md-2 GameCARD" data-info="OW" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/OW.jpg" alt="Overwatch">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="OW">Overwatch</p>
                </div>
              </div>
            </div>
            <!-- PUBG -->
            <div class="col-md-2 GameCARD" data-info="PUBG" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/PUBG.jpg" alt="PUBG">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="PUBG">PlayerUnknown's Battlegrounds</p>
                </div>
              </div>
            </div>
            <!-- R6 -->
            <div class="col-md-2 GameCARD" data-info="R6" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/RAINBOW.jpg" alt="R6">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="R6">Rainbow 6 Siege</p>
                </div>
              </div>
            </div>
            <!-- Starcraft 2 -->
            <div class="col-md-2 GameCARD" data-info="SC" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/SC.jpg" alt="Starcraft II">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="SC">Starcraft II</p>
                </div>
              </div>
            </div>
			  <!-- Smite -->
            <div class="col-md-2 GameCARD" data-info="SMT" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/SMITE.jpg" alt="Smite">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="SMT">Smite</p>
                </div>
              </div>
            </div>
            <!-- World of warcraft -->
            <div class="col-md-2 GameCARD" data-info="WOW" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/WOW.jpg" alt="World of Warcraft">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="WOW">World of Warcraft</p>
                </div>
              </div>
            </div>
            
            <!-- Street FIghter 5 -->
            <div class="col-md-2 GameCARD" data-info="STF" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/STF.jpg" alt="Street Fighter">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="STF">Street Fighter 5</p>
                </div>
              </div>
            </div>
            
            <!-- Rocket League-->
            <div class="col-md-2 GameCARD" data-info="RL" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/RL.jpg" alt="Rocket League">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="RL">Rocket League</p>
                </div>
              </div>
            </div>
            
            <!-- Fifa 18 -->
            <div class="col-md-2 GameCARD" data-info="FIFA" data-toggle="modal" data-target="#exampleModal">
              <div class="card mb-4 shadow-sm"> <img class="card-img-top" src="../../IMAGES/FIFA.jpg" alt="Fifa">
                <div class="card-body">
                  <p class="card-text " style="text-align:center" data-img="FIFA">Fifa 18</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information du Jeu </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Le code de la modal commence ici  -->
		 	<div class="container">
		  		<div class="row">
					<div class="col-5">
						<img id="GameID" src="../../IMAGES/BFV.jpg" style="width: 354px;" alt="Image de description du Jeu">
					</div>
					<div class="col-7" id="PageDesc">
						<form>
							<div> Nom du jeu : </div><span id="GameNAME"></span>
							<br><br>
							<div> Plateforme :  </div><span id="GamePLAT"></span>
							<br><br>
							<div> Catégorie :  </div><span id="GameCATE"></span>
							<br><br>
							<div> Date de sortie :  </div><span id="GameSORTIE"></span>
							<br><br>
							<div> Description :  </div><span id="GameDESC"></span>
						</form>
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
	
<style>
#PageDesc
	{
		text-align: center;
		padding-left: 50px;
	}
</style>
	
	
	
</body>
</html>