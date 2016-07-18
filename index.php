<?php
 echo "Hola mundo, hola heroku!";
 try{
	$clienteSOAP = new SoapClient('https://www.appfacturainteligente.com/WS-FI/WS-TFD.asmx');
		
	$params = array(
		"usuario" => "DEMO5702116K6",
		"password" => "DEMO5702116K6",
		"cadenaXML" => "*#01@|2016-01-19T09:00:00|EN UNA SOLA EXIBICION|3678.50|1213.63|DEDUCCIONES DE NOMINA|MXN|2464.87|EGRESO|TRANSFERENCIA|OFICINA CENTRAL|A|2000|#02@|AUJJ731130NP7|JAVIER AGUILAR JIMENEZ|MEXICO|#03@|01|SERVICIO|PAGO DE NOMINA|3678.50|3678.50|#04@|0.00|ISR|0.00|#04A@|16.00|IVA|0.00|"
	);
    
	$response = $clienteSOAP->__soapCall("TimbrarCFDIPrueba", array($params));

	var_dump($response);
} 
catch(SoapFault $e){
	echo "Error: ".$e;
}
?>
