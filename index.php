<?php
require 'vendor/autoload.php';

$apiToken = "1203266158:AAHGHWz3aIggJ2mlcslbIcd3AAKX1_E36rM";
$https = "https://api.telegram.org/bot" . $apiToken;

$baseEndPoint = 'wss://stream.binance.com:9443';

$dbhost = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';

$connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
$statement = $connection->prepare("INSERT INTO logboek (id, coin) VALUES (:id, :coin)");

$statement->bindParam(':id', $id);
$statement->bindParam(':coin', $coinName);

$id = 3;
$coinName =100;

$statement->execute();

print_r($statement);
//Get the content from the website file
$update = file_get_contents($https . "/getupdates");
$updateArray = json_decode($update);

$dateTime = new DateTime();
print_r($dateTime->format('i'));
?>