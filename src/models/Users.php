<?php

namespace Alumnes;

class Users{

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $alumnes = array();
        $query = "select * from alumnes;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $alu) {
            $alumnes[] = $alu;
        }

        return $alumnes;
    }

    public function insertalumne($alu_name, $alu_cognom, $alu_data, $alu_carrer, $alu_num, $alu_ciutat, $alu_codip){
        $stm = $this->sql->prepare('INSERT INTO alumnes (nom, cognom, datanaix, carrer, telefon, ciutat, codipostal) VALUES (:nom, :cognom, :datanaix, :carrer, :telefon, :ciutat, :codipostal)');
        $stm->execute([
            ':nom' => $alu_name,
            ':cognom' => $alu_cognom,
            ':datanaix' => $alu_data,
            ':carrer' => $alu_carrer,
            ':telefon' => $alu_num,
            ':ciutat' => $alu_ciutat,
            ':codipostal' => $alu_codip,
        ]);
        $lastInsertId = $this->sql->lastInsertId();
    
        return $lastInsertId;
    }

}