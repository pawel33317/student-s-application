	function loadMap(x,y){
		//alert("X = " + x + "       Y = " + y);
		window.open("show.php?latitude="+ x +"&longitude="+ y +"&name=test_place01","MyTargetWindowName");
		
		//var s = 
		//window.location.href = '...';
	}

$(document).ready(function () {

	var placesList = [];
	/*$.ajax({
        url: "http://projzesp2015.cba.pl/getPlaces"
    }).then(function(data) {
	   placesList = data;
	   alert(placesList)
    });
	*/
	placesList = [{"id":1,"name":"Test Place","address":"Aleja Politechniki 1","postal_code":"90-000","city":"Lodz","latitude":51.750453,"longitude":19.447808},{"id":2,"name":"Test Place 2","address":"Aleja Politechniki 2","postal_code":"90-000","city":"Lodz","latitude":51.750453,"longitude":19.447808}];
	loadPlaces();
	

	
	
	function loadPlaces() {
		$('#rowsContainer').innerHTML == " "; //TO POWINNO USUNAC CALA ZAWARTOSC DIVA (moze przydac sie przy sortowaniu i przeladownaiu listy)
		
		for(var i = 0; i < placesList.length; i++){
			var row = '<div class="row" id="' + placesList[i].id + '">' +
						'<div class="col-xs-12">' +
							'<div class="well">' + 
							'<div id="nazwa">'+
								'<i class="fa fa-cutlery fa-2x"></i>' +
								'<b id="1" style="font-size: 15px"> ' + placesList[i].name + ' </b>' +
								'<button data-toggle="collapse" data-target="#demo' + placesList[i].id + '" id="rozwin"><i class="fa  fa-level-down"></i></button>' +
								'</div>'+
							'<a><button  onclick="loadMap(\''+placesList[i].latitude+'\',\''+placesList[i].longitude+'\')" type="button" class="btn btn-primary" id="buttonGPS"' + placesList[i].id + '" x="' + placesList[i].latitude + '" y="' + placesList[i].longitude + '"><i class="fa fa-map-o"></i></button></a>' + 
								'<div id="demo' + placesList[i].id + '" class="collapse">' +
									'<p>Adres restauracji: ' + placesList[i].address + ', ' + placesList[i].postal_code + ' ' + placesList[i].city + '</p>' +
									'<div id="rating">' +
										'<i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i>' +
									'</div>' +
								'</div>' +    
							'</div>' +
						'</div>' +
					'</div>';
				
			$('#rowsContainer').append(row);
		}
	}
	

});
