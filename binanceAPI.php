<?php

class binanceAPI {

private $api;

function __construct(){
    $binanceAPIKey = 'wsftosrQDO7red0Cl0BNDbsvDI1aYC7KPqnDSQUjXpAQWhbVR8mStACg9nJLZmPP';
    $secretKey = 'zayIH1NHaCR2x9bT64dS7lKvi5FQ1U3pbf6uBDAYQdlnucr4tBFaJCEmvmR9BSv1';
    $this->api = new Binance\API($binanceAPIKey, $secretKey);
}

protected function getApi() {
    return $this->api;
}
}