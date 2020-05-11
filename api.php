<?php


try{

    $url = 'https://cdn.pinkvilla.com/feed/fashion-section.json';

	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, [
	  'X-RapidAPI-Host: https://cdn.pinkvilla.com/feed/fashion-section.json',
	  'Content-Type: application/json'
	]);

	$response = curl_exec($curl);
	curl_close($curl);
	$final_response = $response . PHP_EOL;
	$decode_response = json_decode($final_response);
	array_multisort(array_column($decode_response,'viewCount'),SORT_DESC,$decode_response);

	echo $final_response;

} catch(Exception $e){
    echo $e;
}



