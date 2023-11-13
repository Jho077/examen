<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

 $config = [
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "alumnes",
        "host" => "localhost"
    ],
];  
include "../src/models/Db.php";
include "../src/models/Users.php";