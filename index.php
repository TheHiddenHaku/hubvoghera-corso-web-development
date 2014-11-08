<?php
    
    require_once "config/site_config.php";
    
    $klein = new \Klein\Klein();

    $klein->respond('GET', '/', function () {
        return 'Hello World!';
    });

    $klein->dispatch();

?>