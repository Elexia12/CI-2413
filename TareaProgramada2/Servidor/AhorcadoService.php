<?php

require_once 'Ahorcado.class.php';

session_start();
$servidorSoap = new SoapServer('Ahorcado.wsdl');
$servidorSoap->setClass('Ahorcado');
$servidorSoap->setPersistence(SOAP_PERSISTENCE_SESSION);
$servidorSoap->handle();

?>