<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->addForm(NULL, array(
	array(
		'name' => 'file_path',
		'type' => 'application/octet-stream',
		'file' => 'hodlistemp.html',
		'data' => null
	)
));

$request->setRequestUrl('https://plagspotter-duplicate-content-checking.p.rapidapi.com/v2.add-file-for-checking');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
	'x-rapidapi-host' => 'plagspotter-duplicate-content-checking.p.rapidapi.com',
	'x-rapidapi-key' => 'b5155e42c6msh87aca93b5da4ec3p1aafc7jsn3d4cbe2b75d4',
	'authorization' => 'Basic TmlzaGFkMDA6TmlzaGFkQDEyMw==',
	'content-type' => 'multipart/form-data'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
