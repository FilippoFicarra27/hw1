<?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://news-api14.p.rapidapi.com/top-headlines?language=it",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: news-api14.p.rapidapi.com",
		"X-RapidAPI-Key: 05ccf752c1msh518fe3c44ef2566p1a9d21jsnfe4c5c0dff56"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>