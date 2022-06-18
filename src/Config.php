<?php

/**
* metodo para fazer o envio da request 
*/
function sendRequest($data) 
{
  
    print_r($data['request']);die();

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $data['url'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $data['method'],
      CURLOPT_POSTFIELDS => ((!empty($data['request']))?json_encode($data['request']):''),
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/x-www-form-urlencoded",
        'Authorization: ' . base64_encode($data['client_id'].':'.$data['client_secret'])
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    //die(print_r(json_decode($response)));

    if ($err) {
      return json_decode($err);
    } else {
      return json_decode($response);
    }
}