<?php
	require_once 'Prueba.class.php';
	ini_set("soap.wsdl_cache_enabled",0);
	session_start();
	$servidorSoap = new SoapServer('Prueba.wsdl');
	$servidorSoap->setClass('Prueba');
	$servidorSoap->setPersistence(SOAP_PERSISTENCE_SESSION);
	$servidorSoap->handle();
?>