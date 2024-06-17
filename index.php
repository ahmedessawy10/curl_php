<?php

# curl from google
# https://developers.google.com/custom-search/v1/using_rest
// $curl =curl_init();
// curl_setopt($curl,CURLOPT_URL,"https://www.google.com");
// curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
// $result=curl_exec($curl);
// curl_close($curl);
// print_r($result);


/*  **************************************************************************************************** */
# curl from google with search 
// $curl =curl_init();
// $search_label="iphone 10 pro max";
// $search_label=implode("+", explode(" ", $search_label));

// curl_setopt($curl,CURLOPT_URL,"https://www.google.com/search?q=$search_label");
// curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);

// $result=curl_exec($curl);
// curl_close($curl);
// echo($result);

/*  **************************************************************************************************** */

#curl poduct from amazonي

// $curl =curl_init();
// $search_label="car";
// // $search_label=implode("+", explode(" ", $search_label));
// $search_label=preg_replace("/ /","+",$search_label);

// curl_setopt($curl,CURLOPT_URL,"https://www.amazon.eg/s?k=$search_label");
// curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);

// $result=curl_exec($curl);
// preg_match_all("!https://m.media-amazon.com/images/I/[^\s]*._AC_UL320_.jpg!",$result,$matches);
// $images=array_values(array_unique($matches[0]));

// curl_close($curl);


// foreach($images as $image){
// echo "<div style='margin:10px;padding:5px;float:left'>";
// echo"<img src=$image>";
// echo "</div>";
// }

#instagram fetch by api

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://instagram-scraper-api2.p.rapidapi.com/v1/posts?username_or_id_or_url=creativewrap_egypt",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: instagram-scraper-api2.p.rapidapi.com",
		"x-rapidapi-key: 68c42e0a60mshd191ada1a199196p14bb91jsn17fd4fa63888"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	print_r($response) ;
}
?>
