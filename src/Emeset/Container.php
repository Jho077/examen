<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Container: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Container
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config array paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }

    public function db(){
        return new \Alumnes\Db(
            $this->config["db"]["user"],
            $this->config["db"]["pass"],
            $this->config["db"]["db"], 
            $this->config["db"]["host"]
        );
    }
    public function users()
    {
        return new \Alumnes\Users($this->sql);
    }
    //public function registre()
    //{SS
    //    return new \Alumnes\Registre($this->sql);
    //}
}