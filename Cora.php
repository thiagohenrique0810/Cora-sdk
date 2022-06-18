<?php

/** HELPER DE INTEGRAÇÃO COM A API FALEWHATS
**  AUTOR: THIAGO HENRIQUE
*/
require_once 'src/Common.php';

require_once ('src/classes/Faturas.php');


$apikey	=	"API_CORA_KEY";


$apiWhats = new Envio($apikey);

$response = $apiWhats->textToMany([
	'to' => [
		'SEU NUMERO',
		'OUTRO NUMERO',
	],
	'text' => 'ola isso e um teste'
]);

print_r($response);