var map;
var centro;
var restaurante;
var marker;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function calcularRuta(){
	marker.setMap(null);
	var markerLatLng = marker.getPosition();
	var ruta;
	var request = {
		origin: restaurante,
		destination: markerLatLng,
		travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(result, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			ruta = result;
			directionsDisplay.setDirections(ruta);
		}
    });
	document.getElementById("formulario").innerHTML = '<input type="text" name="campo" value="'+ruta+'"><br><input type="submit" value="Enviar">';
}

function initialize() {
  restaurante = new google.maps.LatLng(9.901771873590537, -84.07940435611721);
  centro = restaurante;
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 13,
	mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      centro = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      map.setCenter(centro);
	  marker = new google.maps.Marker({
        position: centro,
        draggable: true,
        map: map
	  });
    }, function() {});
  }
  
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsDisplay.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);