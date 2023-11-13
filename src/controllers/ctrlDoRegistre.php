<?php

function ctrlDoRegistre($request, $response, $container){
    
    $response->setTemplate("registre.php");

    return $response;
}