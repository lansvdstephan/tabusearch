<?php

class coin {

    private int $name;
    private int $price;
    private int $ATH;

    function __constuct() {
        $binanceAPI = new binanceAPI();
        print_r($binanceAPI->balances());
    }
    
}

?>