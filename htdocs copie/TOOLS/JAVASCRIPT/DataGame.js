// Appel Ajax permettant d'avoir toutes les informations des jeux vidéos présent dans la base de donnée.

$(function(){

$('.GameCARD').click(function(){
	var abreviation = $(this).data("info");
		console.log(abreviation);

    $.ajax({
        type: "POST",
		url : "../../CONTROLLER/ListesJeux.php",
		dataType: "json",
		data : {"Abreviaiton":abreviation},
        }).done(function(data){
			$("#GameNAME").text(data[0][2]);
			$("#GamePLAT").text(data[0][3]);
			$("#GameCATE").text(data[0][4]);
			$("#GameSORTIE").text(data[0][5]);
			$("#GameDESC").text(data[0][6]);
			

			$("#GameID").attr("src",data[0][7]);
        });
});	

	$('.GameSelect').click(function(){
		var JeuSelect = $(this).data("info");
		console.log(JeuSelect);
		
		$.ajax({
			type: "POST",
			url : "../../CONTROLLER/ListesJeux.php",
			dataType: "json",
			data : {"Abreviaiton":JeuSelect},
			}).done(function(data){
				$("#JeuSelectionned").text(data[0][2]);
			});
	});


        
});

