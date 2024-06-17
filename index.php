<?php

# curl from google
# https://developers.google.com/custom-search/v1/using_rest
$curl =curl_init();
curl_setopt($curl,CURLOPT_URL,"https://www.google.com");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($curl);
curl_close($curl);
print_r($result);

















?>