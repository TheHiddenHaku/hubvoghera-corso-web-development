<?php
    
    require_once "config/site_config.php";
    
    $klein->respond('GET', '/', function () {
        $controller = new DefaultController();
        $controller->hello();
    });

    $klein->respond('/hello/[:name]', function ($request) {
        $controller = new DefaultController();
        $controller->hello($request->name);
    });

    $klein->dispatch();