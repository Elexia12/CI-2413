<?php 
	ini_set("soap.wsdl_cache_enabled",0);
	$client = new SoapClient('http://http://titanic.ecci.ucr.ac.cr/~eb17016/Prueba/Prueba.php?wsdl',array("trace" => 1, "exceptions" => 0));
	
	$client->agregarTiempo(25, "pablo");
	print "<pre>\n";
	print "Request :\n".htmlspecialchars($client->__getLastRequestHeaders()).htmlspecialchars($client->__getLastRequest())."\n";
	print "Response:\n".htmlspecialchars($client->__getLastResponseHeaders()).htmlspecialchars($client->__getLasResponse())."\n";
	print "</pre>";
	$client->obtenerTopTen();
	print "<pre>\n";
	print "Request :\n".htmlspecialchars($client->__getLastRequestHeaders()).htmlspecialchars($client->__getLastRequest())."\n";
	print "Response:\n".htmlspecialchars($client->__getLastResponseHeaders()).htmlspecialchars($client->__getLasResponse())."\n";
	print "</pre>";
?>