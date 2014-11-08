<?php
    
    require_once "config/site_config.php";

    $klein->respond('GET', '/', function () {
        echo "Hello World!";
    });
    
    $klein->dispatch();