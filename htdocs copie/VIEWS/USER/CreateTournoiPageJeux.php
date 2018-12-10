<?php
include('../includeUser.php');
?>
<!DOCTYPE html>
<html>
<head>

    <!-- Le Caroussel de la séléction du Jeu : Stick avec Initiation du Script -->
    <link rel="stylesheet" href="../../TOOLS/CAROUSSEL/slick.css">
    <link rel="stylesheet" href="../../TOOLS/CAROUSSEL/slick-theme.css">
    <script src="../../TOOLS/CAROUSSEL/slick.min.js"></script>
    <script src="../../TOOLS/JAVASCRIPT/DataGame.js"></script>
    <script src="../../TOOLS/JAVASCRIPT/CreateTournoi.js"></script>

    <script>
        $(document).ready(function(){
                $('.carou').slick({
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                      {
                        breakpoint: 768,
                        settings: {
                          arrows: false,
                          centerMode: true,
                          centerPadding: '40px',
                          slidesToShow: 3
                        }
                      },
                      {
                        breakpoint: 480,
                        settings: {
                          arrows: false,
                          centerMode: true,
                          centerPadding: '40px',
                          slidesToShow: 1
                        }
                      }
                    ]
                  });
                }); 
     </script>

    <!-- CSS + JS de la TextArea -->
    <style>
        .resizable {
            width: 350px;
            height: 150px;
            padding: 5px;
        }

        .resizable h3 {
            text-align: center;
            margin: 0;
        }
    </style>
    <script>
        $(function () {
            $(".resizable").resizable({
                maxHeight: 250,
                maxWidth: 350,
                minHeight: 150,
                minWidth: 200
            });
        });
    </script>

</head>

<body id="page-top">

        <!-- Le Code Commence -->
        <div id="content-wrapper">
            <div class="container-fluid">

                <!-- TITRE LATERALE -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    </li>
                </ol>

                <!-- Formulaire de l'informations du tournoi -->
                <div class="form-group">
                    <legend>
                        <h3><i class="fas fa-sliders-h"></i> Paramètres spécifiques à mon Tournoi </h3>
                    </legend>
                    <br>
                    <div class="form-group">
                        <div class="form-group">
                            <span style="margin-right:5%">Nombre de points par Victoires</span>
                            <input name="nbparts" value="3" type="number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <span style="margin-right: 8%;">Nombre de points par Nul</span>
                            <input name="nbparts" value="1" type="number">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <span style="margin-right: 6%;">Nombre de points par défaite</span>
                            <input name="nbparts" value="0" style:"margin-right: 9%;" type="number">
                        </div>
                    </div>

                    <div class="form-group">

                        <span style="margin-right: 2%;">Nombre de points pour un Abandon</span>
                        <input name="nbparts" value="0" type="number">

                    </div>

                    <div class="separator" style="border:1px dashed gainsboro;margin-bottom:2%;margin-top:2%"></div>

                    <!-- Selection du Jeu sur lequel va se dérouler le tournoi -->
                    <legend>
                        <h3> <i class="fas fa-gamepad"></i> Jeu sélectionné pour le Tournoi </h3>
                </div>
                </legend>

                <!-- Le Caroussel se fera ici -->
                <div class="carou">
                    <div class='GameSelect' data-info="COD" > 
                        <label for="Call of duty"></label>
                        <img src="../../IMAGES/COD.jpg">
                    </div>
                    <div class='GameSelect' data-info="CS" >
                        <label for="Counter strike : Global Offensive"></label>
                        <img src="../../IMAGES/CS.jpg">
                    </div>
                    <div class='GameSelect' data-info="DBZ" >
                        <label for="Dragon ball fighter Z"></label>
                        <img src="../../IMAGES/DBZ.jpg">
                    </div>

                    <div class='GameSelect' data-info="DOTA" >
                        <label for="DOTA"></label>
                        <img src="../../IMAGES/DOTA.jpg">
                    </div>

                    <div class='GameSelect' data-info="ECH" >
                        <label for="Echecs"></label>
                        <img src="../../IMAGES/ECHEC.jpg">
                    </div>

                    <div class='GameSelect' data-info="FIFA" >
                        <label for="FIFA"></label>
                        <img src="../../IMAGES/FIFA.jpg">
                    </div>

                    <div class='GameSelect' data-info="FNT" >
                        <img data-info="FNT" src="../../IMAGES/Fortnite.jpg">
                    </div>

                    <div class='GameSelect' data-info="HRS" >
                        <label for="Hearstone"></label>
                        <img src="../../IMAGES/Hearstone.jpg">
                    </div>

                    <div class='GameSelect' data-info="HOTS">
                        <label for="Heroes of the storm"></label>
                        <img data-info="HOTS" src="../../IMAGES/HOTS.jpg">
                    </div>

                    <div class='GameSelect' data-info="LOL">
                        <label for="League of legend"></label>
                        <img src="../../IMAGES/LOL.jpg">
                    </div>

                    <div class='GameSelect' data-info="OW">
                        <label for="Overwatch"></label>
                        <img src="../../IMAGES/OW.jpg">
                    </div>

                    <div class='GameSelect' data-info="PUBG">
                        <label for="PUBG"></label>
                        <img src="../../IMAGES/PUBG.jpg">
                    </div>

                    <div class='GameSelect' data-info="R6">
                        <label for="Rainbow Six : Siege"></label>
                        <img src="../../IMAGES/RAINBOW.jpg">
                    </div>

                    <div class='GameSelect' data-info="RL">
                        <label for="Rocket League"></label>
                        <img data-info="RL" src="../../IMAGES/RL.jpg">
                    </div>

                    <div class='GameSelect' data-info="SC">
                        <label for="Starcraft II"></label>
                        <img  src="../../IMAGES/SC.jpg">
                    </div>

                    <div class='GameSelect' data-info="SMT">
                        <label for="Smite"></label>
                        <img data-info="SMT" src="../../IMAGES/SMITE.jpg">
                    </div>

                    <div class='GameSelect' data-info="STF">
                        <label for="Street fighter "></label>
                        <img src="../../IMAGES/STF.jpg">
                    </div>
                        <div class='GameSelect' data-info="WOW">
                            <label for="World of Warcraft"></label>
                            <img  src="../../IMAGES/WOW.jpg">
                        </div>

                </div>

                <br/>

                    <div style="text-align:center;margin-left:10%">
                        <label> Le jeu selectionné : <span id="JeuSelectionned"></span></label>
                    </div>

                <br/>

                <button class="btn btn-primary" type="submit" style="position:relative;left:60%" id="BtnSuivant">Finaliser<i class="fa fa-arrow-right"></i></button>
                <button class="btn btn-primary" type="submit" style="position:relative;left:30%" id="BtnPrecedent"><i class="fa fa-arrow-left"></i> Etape Précédent </button>
            </div>

        </div>

    </div>

</body>

</html>