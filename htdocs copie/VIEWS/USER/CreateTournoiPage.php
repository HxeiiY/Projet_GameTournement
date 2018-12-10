<?php
include('../includeUser.php');
?>
<head>
  <!-- Script de date necessitant Jquery UI -->
  <script>
    $(function () {
      $(".datepicker").datepicker({
        altField: "#datepicker",
        closeText: 'Fermer',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre',
          'Octobre', 'Novembre', 'Décembre'
        ],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.',
          'Nov.', 'Déc.'
        ],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.',
        dateFormat: 'dd/mm/yy'
      });

       $( ".resizable" ).resizable({
            maxHeight: 250,
            maxWidth: 350,
            minHeight: 150,
            minWidth: 200
          });
    });
  </script>

  <script src="../../TOOLS/JAVASCRIPT/CreateTournoi.js"></script>

  <!-- CSS + JS de la TextArea -->
  <style>
    .resizable { width: 350px; height: 150px; padding: 5px; }
    .resizable h3 { text-align: center; margin: 0; }
    .separator {border:1px dashed gainsboro;margin-bottom:2%;margin-top:2%  }
    #console{width:20%;display:inline-block;margin-left: 56px;}
    #nameTournoi{width:40%;display:inline-block}
  </style>

</head>

  <div id="wrapper">

    <!-- Le Code Commence -->
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Formulaire de l'informations du tournoi -->

        <form method="POST" action="../../core/libs/tournoi_services.php">
            <input type="hidden" name="action" value="createTournoi">
          <!-- Informations générales du Tournoi -->
          <div class="container">

            <legend>
              <h3><i class="fas fa-newspaper"></i> Informations générales </h3>
            </legend>

            <br />

            <div class="row">
            <div class="form-group">
              <label class="col-md-6">Nom du Tournoi</label>
              <input  id="nameTournoi" type="text" class="form-control" name="nameTournoi">
            </div>
            </div>

            <div class="row">
            <div class="form-group col-md-12">
              <label class="col-md-2" style="width:175px">Console</label>
              <select id="console" class="form-control" name="consoleTournoi">
                <option selected>...</option>
                <option value="ps4">Playstation 4</option>
                <option value="xbox">Xbox One</option>
                <option value="pc">PC</option>
                <option value="switch">Nitendo Switch</option>
              </select>
            </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <h3>Règles du tournoi</h3>
                <textarea class="resizable" class="ui-widget-content" name="RegleTournoi"></textarea>
              </div>

              <div class="form-group col-md-6">
                <h3>Détails du tournoi</h3>
                <textarea class="resizable" class="ui-widget-content" name="DetailTournoi"></textarea>
              </div>
            </div>

            <div class="separator"></div>
            <!-- Date du Tournoi -->
            <legend>
              <h3><i class="fa fa-calendar"></i> Date du Tournoi</h3>
            </legend>
            
            <br />
            
            <div class="row">
            <div class="form-group col-md-12">
              <span>Début: <input type="text" class="datepicker" name="DateDebutTournoi"></span>
              <span style="margin-left:5%">Fin: <input type="text" class="datepicker" name="DateFinTournoi"></span>
              
              <div class="form-group">
                <br clear="" all"">
                <div class="col-md-4">
                  <input class="form-check-input" type="checkbox" value="" id="chkDateLimite">
                </div>
                <div class="col-md-6">
                  <label>Date limite d'Inscription</label>
                </div>
                <div>
                  <span><input type="text" class="datepicker" name="chkDateLimite" placeholder="Date Limite" hidden></span>
                </div>
              </div>

            </div>
            </div>

            <div class="separator"></div>

            <!-- Inscriptions & Paiement -->
            <div class="form-group">
              <legend>
                <div class="row">
                  <div class="col-md-6 col-md-offset-1">
                    <i class="fas fa-ticket-alt"></i>
                    <h3>Inscription & Paiement</h3>
                  </div>
                </div>
              </legend>
              <br />
              <div class="form-group">
                <div class="col-md-4">
                  <input class="form-check-input" type="checkbox" value="" id="GtUser">
                </div>
                <div class="col-md-8">
                  <span>Les participants sont uniquements des utilisateurs de GameTournement</span>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-4">
                  <input class="form-check-input" type="checkbox" value="" id="ValiderUser">
                </div>
                <div class="col-md-8">
                  <span>Je veux valider manuellement les participants du Tournoi</span>
                </div>
              </div>

              <div class="form-group" hidden>
                <div class="col-md-4">
                  <input class="form-check-input" type="checkbox" value="" id="CashpriceTournoi">
                </div>
                <div class="col-md-8">
                  <span>Mon Tournoi est un "Tournoi Cashprice"</span>
                </div>
              </div>

            </div>

            <div class="separator"></div>

            <!-- Options du Tournoi -->
            <div class="form-group" hidden>
              <legend>
                <div class="row">
                  <div class="col-md-6 col-md-offset-1">
                    <i class="fas fa-sliders-h"></i>
                    <h3>Options du Tournoi</h3>
                  </div>
                </div>
              </legend>
              <br />
              <div class="form-group" hidden>
                <div class="col-md-4">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
                <div class="col-md-8">
                  <span></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <legend>
                <div class="row">
                  <div class="col-md-6 col-md-offset-1">
                    <i class="fas fa-trophy"></i>
                    <h3>Organisation du Tournoi</h3>
                  </div>
                </div>
              </legend>
              <br />

              <div class="form-group">
                <label>Nombre de participants</label>
                <input type="number" name="nbparts">
              </div>


              <div class="form-group">
                <label>Format de la première phase du Tournoi</label>
                <select  class="form-control col-md-3" name="roleTournoi">
                  <option>Match à élimination direct</option>
                  <option>Match à multi-chance</option>
                  <option>Championnat</option>
                  <option>Championnat avec matchs aller/retour</option>
                  <option>Phase de poule</option>
                  <option>Poule avec matchs aller/retour</option>
                </select>
      
                <button type="button" class="btn btn-info" id="AideRole" >Aide</button>
          
              </div>
            </div>
            <?php
                if(isset($_GET['error'])=='error'){
                echo '<div style="color: pink; font-size:30px;">Un élément est incomplet</div>';
              }
            ?>
            <br/>
            <button class="btn btn-primary" type="submit" id="BtnSuivant">Etape Suivante <i class="fa fa-arrow-right"></i></button>
          </div>

        </form>
      </div>
    </div>

  </div>
</body>

</html>