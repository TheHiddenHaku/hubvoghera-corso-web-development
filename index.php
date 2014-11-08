<?php
    
    require_once "config/site_config.php";

    $klein->respond('GET', '/', function () {
        print_r("test");
    });
    
    

    $klein->dispatch();