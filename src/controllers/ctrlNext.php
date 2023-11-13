<?php

function ctrlNext($request, $response, $container){
    
    $response->setTemplate("formulari.php");

    return $response;
}