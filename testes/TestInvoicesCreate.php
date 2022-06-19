<?php

/** HELPER DE INTEGRAÇÃO COM A API FALEWHATS
**  AUTOR: THIAGO HENRIQUE
*/
require_once '../src/Common.php';
require_once ('../src/classes/Invoices.php');


$options = [
    'production' => false,
    'client_id'	=>	"65164546",
    'client_secret'	=>	"a6dsg1a52s454651as65dg468a45454"
];

$cora = new Invoices($options);

$response = $cora->create();

print_r($response);