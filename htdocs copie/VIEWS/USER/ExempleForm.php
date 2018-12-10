<?php
include('../includeUser.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="../../TOOLS/CAROUSSEL/slick.css">
    <link rel="stylesheet" href="../../TOOLS/CAROUSSEL/slick-theme.css">
    <script src="../../TOOLS/CAROUSSEL/slick.min.js"></script>

<script>
        $(".carou").ready(function(){
            $('.carou').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
        });
    }); 
</script>

</head>
<body>

<style>

    section{
        width: 100%;
    }

.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
       
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

</style>


<div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="fas fa-gamepad"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

<!-- Formulaire de création de Tournoi -->
            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Informations Générales</h3>
                        <div class="col-md-5">

                        <div class="form-group">
                        <label for="exampleInputEmail1">Nom du Tournoi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom du tournoi">
                        <small id="emailHelp" class="form-text text-muted">Le nom de votre tournoi sera visible de tous</small>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Règles du Tournoi</label>

                        <textarea class="form-control" id="exampleInputPassword1" rows="9" cols="50" placeholder="Règlement"></textarea>
                        
                        </div>

                        
                        </div>
                        <div class="col-md-5">
                        
                   
                        <div class="form-group">
                        <label for="exampleInputEmail1">Plateforme</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plateforme">
                        <small id="emailHelp" class="form-text text-muted">Ex : Playstation 4</small>
                        </div>

                        </div>

                        <div class="col-md-7">
                            

                        <div class="form-group">
                        <label for="exampleInputPassword1">Détails du Tournoi</label>
                       
                        <textarea class="form-control" id="exampleInputPassword1" rows="9" cols="50" placeholder="Détails"></textarea>
                        
                        </div>
                            
                    </div>

                          <!-- Form Alanı -->
                        <div class="col-md-4">
                        
                        <form>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Début du tournoi</label>
                        <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Début">
                        </div>
                        </form>
                        
                        </div>

                        <div class="col-md-4">

                        <div class="form-group">
                        <label for="exampleInputEmail1">Fin du tournoi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fin du tournoi">
                        </div>
                        
                        </div>

                        <div class="col-md-4">
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1">Date limite d'inscription </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date limite">
                        </div>

                        </div>

                    </div>

<!-- --------------------------------- -->
                    
                <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Inscription & Organisation </h3>
                        <br/>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Paramètres spécifiques du Tournoi </label>
                        <br/><br>
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

                    <div class="form-group">
                   
                        <label for="exampleInputEmail1">Nombre de participants </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Participants">
                        <small id="emailHelp" class="form-text text-muted">Ex : 32</small>
              
                    </div>

                <label>Format de la première phase du Tournoi</label>
              <div class="form-group">
                <select  class="col-md-4" name="roleTournoi">
                  <option>Match à élimination direct</option>
                  <option>Match à multi-chance</option>
                  <option>Championnat</option>
                  <option>Championnat avec matchs aller/retour</option>
                  <option>Phase de poule</option>
                  <option>Poule avec matchs aller/retour</option>
                </select>
                    <br/><br/>
                <button type="button" class="btn btn-info" id="AideRole" >Aide</button>
          
              </div>


                
                </div>
                        
                    </div>

<!-- --------------------------------- -->

                <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Jeux </h3>
                        <p> GameTournement propose un large choix de Jeux E-Sport </p>
                    
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
                </div>
<!-- ----------------------------------------------------------------------------------------- -->
                <div class="tab-pane" role="tabpanel" id="step4">
                    <h3 style="text-align:center"> Récapitulatif </h3>

                      <button class="btn btn-primary" type="submit" style="position:relative;left:60%" id="BtnSuivant">Finaliser<i class="fa fa-arrow-right"></i></button>
                <button class="btn btn-primary" type="submit" style="position:relative;left:30%" id="BtnPrecedent"><i class="fa fa-arrow-left"></i> Etape Précédent </button>
                </div>

            </form>
        </div>
    </section>
   </div>
</div>





</body>
</html>