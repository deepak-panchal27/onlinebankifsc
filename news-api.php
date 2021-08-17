<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   $defaults = array(
        CURLOPT_URL             => 'https://newsapi.org/v2/everything?' . 'domains=techcrunch.com&' . 'from=2021-08-09&' .'sortBy=popularity&' .
        'apiKey=54bc7d587d2c4c609e37a4fb1d0fc2e0',
        CURLOPT_POST            => false,
        CURLOPT_HEADER          => false,
        CURLOPT_SSL_VERIFYPEER  => false,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_SSL_VERIFYHOST  => false,
    );
    $curl               = curl_init();
    curl_setopt_array($curl, $defaults);
    $curl_response      = curl_exec($curl);
    $json_objekat       = json_decode($curl_response);

    // DUMP THE CURL-ERROR INFORMATION:
    //var_dump(curl_error($curl));
    print_r($json_objekat);
    curl_close($curl);
?> 