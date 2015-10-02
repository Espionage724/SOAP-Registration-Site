<?php

    try {
	$conn = new SoapClient(NULL, array(
            'location' => "http://192.168.1.152:7879/",
            'uri'      => 'urn:TC',
            'style'    => SOAP_RPC,
            'login'    => 'soap',
            'password' => 'X'
        ));
	echo $conn->executeCommand(new SoapParam('server info', 'command'));
    } catch (Exception $e) {
        print_r($e);
    }
?>
