<?php

/** HELPER DE INTEGRAÇÃO COM A API FALEWHATS
**  AUTOR: THIAGO HENRIQUE
*/
require_once '../src/Common.php';
require_once ('../src/classes/BankStatement.php');


$options = [
    'production' => false,
    'client_id'	=>	"65164546",
    'client_secret'	=>	"a6dsg1a52s454651as65dg468a45454"
];

$cora = new BankStatement($options);

$response = $cora->statement();

print_r($response);