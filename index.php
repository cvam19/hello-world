<?php
 try{
	$clienteSOAP = new SoapClient('http://www.facturainteligenteintegraciones.com/WSNomina/Nominas.asmx?WSDL');
	$xmltimbre = array();
	$archqr = array();
	$archpdf = array();
	$mierror = "";
	
	$params = array(
	"usuario" => "DEMO5702116K6",
	"contrasena" => "DEMO5702116K6",
	"cadenatxt" => "*#01@|2016-01-19T09:00:00|EN UNA SOLA EXIBICION|3678.50|1213.63|DEDUCCIONES DE NOMINA|MXN|2464.87|EGRESO|TRANSFERENCIA|OFICINA CENTRAL|A|2000|#02@|AUJJ731130NP7|JAVIER AGUILAR JIMENEZ|MEXICO|#03@|01|SERVICIO|PAGO DE NOMINA|3678.50|3678.50|#04@|0.00|ISR|0.00|#04A@|16.00|IVA|0.00|",
	"xmltimbre" => $xmltimbre,
	"archqr" => $archqr,
	"archpdf" => $archpdf,
	"mierror" => $mierror,
	"nomina" => false,
	"productivo" => false,
	"generarpdf" => true
	);

	$response = $clienteSOAP->__soapCall("ObtenerXml", array($params));

	var_dump($response);
  } 
  catch(SoapFault $e){
	  echo $e;
  }
?>
