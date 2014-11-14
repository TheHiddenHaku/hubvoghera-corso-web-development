<?php
    
    require_once "config/site_config.php";
    
    $klein->respond('GET', '/', function () {
        echo "<h1>Benvenuti al corso di Web Development</h1>";
    });

    $klein->respond('/hello/[:name]', function ($request) {
        $controller = new DefaultController();
        $controller->hello($request->name);
    });

    $klein->dispatch();