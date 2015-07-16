var map;
var centro;
var restaurante;
var marker;

function calcularRuta(){
	marker.setMap(null);
	var markerLatLng = marker.getPosition();
	document.getElementById("formulario").innerHTML = '<input type="hidden" name="latrest" value="'+restaurante.lat()+'"><input type="hidden" name="longrest" value="'+restaurante.lng()+'"><input type="hidden" name="latped" value="'+markerLatLng.lat()+'"><input type="hidden" name="longped" value="'+markerLatLng.lng()+'"><input type="submit" value="Enviar">';
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
}

google.maps.event.addDomListener(window, 'load', initialize);