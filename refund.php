<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$url = 'https://apipub.roku.com/listen/transaction-service.svc/refund-subscription';
$request = json_decode(file_get_contents('php://input'));
$transactionID = $request->transactionId;

$data = array("partnerAPIKey" => "Z97WIyTCtKEOI5XiTC5RBYjt7MdlEvtl", "transactionId" => $transactionID);

$postdata = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);
echo json_encode($result);