<?php

require_once 'Ahorcado.class.php';

ini_set("soap.wsdl_cache_enabled",0);
session_start();
$servidorSoap = new SoapServer('Ahorcado.wsdl');
$servidorSoap->setClass('Ahorcado');
$servidorSoap->setPersistence(SOAP_PERSISTENCE_SESSION);
$servidorSoap->handle();

?>