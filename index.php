<?php

# curl from google
# https://developers.google.com/custom-search/v1/using_rest
// $curl =curl_init();
// curl_setopt($curl,CURLOPT_URL,"https://www.google.com");
// curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
// $result=curl_exec($curl);
// curl_close($curl);
// print_r($result);

# curl from google with search 
$curl =curl_init();
$search_label="iphone 10 pro max";
$search_label=implode("+", explode(" ", $search_label));

curl_setopt($curl,CURLOPT_URL,"https://www.google.com/search?q=$search_label");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);

$result=curl_exec($curl);
curl_close($curl);
echo($result);


?>