<?php

class DefaultController {
    
    public function hello($name = false)
    {
        $greeting = "Hello ";
        $greeting .= $name ? $name : "World";
        echo $greeting;
    }
    
}