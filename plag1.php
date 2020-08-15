<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://copyleaks.com/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "",
	CURLOPT_HTTPHEADER => array(
		"authorization: Basic TmlzaGFkMDA6TmlzaGFkQDEyMw==",
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: plagspotter-duplicate-content-checking.p.rapidapi.com",
		"x-rapidapi-key: b5155e42c6msh87aca93b5da4ec3p1aafc7jsn3d4cbe2b75d4"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
