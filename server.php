<?php
class HelloWorldService {
    /**
     * Method exposed via SOAP
     */
    public function helloWorld() {
        return "¡Hola Mundo desde SOAP con PHP!";
    }
}

// SOAP Server Configuration
$options = [
    'uri' => "http://localhost/soap-server"
];

$server = new SoapServer(null, $options);
$server->setClass('HelloWorldService');
$server->handle();
?>
