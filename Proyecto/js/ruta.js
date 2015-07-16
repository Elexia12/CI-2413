var map;
var centro;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function calcularRuta(){
	var datos = document.getElementById("inforuta");
	var request = {
		origin: new google.maps.LatLng(datos.getAttribute("data-latrest"), datos.getAttribute("data-longrest")),
		destination: new google.maps.LatLng(datos.getAttribute("data-latped"), datos.getAttribute("data-longped")),
		travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(result, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(result);
		}
    });
}

function initialize() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 13,
	mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      centro = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    }, function() {});
  }
  
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsDisplay.setMap(map);
  calcularRuta();
}

google.maps.event.addDomListener(window, 'load', initialize);