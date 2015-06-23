<?php

require_once 'Ahorcado.class.php';

ini_set("soap.wsdl_cache_enabled",0);
ini_set('display_errors', 1);

session_start();

$servidorSoap = new SoapServer('Ahorcado.wsdl');
$servidorSoap->setClass('Ahorcado');
$servidorSoap->setPersistence(SOAP_PERSISTENCE_SESSION);
$servidorSoap->handle();

?>