// Page Javascript gérant la création du Tournoi 

$(function () {

  $('#BtnSuivant').click(function () {
    redirectionTournoi();
  });

  $('#BtnPrecedent').click(function(){
    redirectionTournoi();
  });

  $('#BtnCreate').click(function(){
    redirectionTournoi();
  });




  function redirectionTournoi(){
    document.location.href = "CreateTournoiPage.php";
  }

});