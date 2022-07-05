<?php
class Cliente{
     private $id_compañia;
     private $nombre_compañia;
     private $telefono;
     private $cod_postal;

public function getId_compañia():string{
    return $this->id_compañia;
}

public function setId_compañia(string $id_compañia):void{
    $this->id_compañia= $id_compañia;
}

public function getNombre_compañia():string{
    return $this->nombre_compañia;
}

public function setNombre_compañia(string $nombre_compañia):void{
    $this->nombre_compañia= $nombre_compañia;
}

public function getTelefono():string{
    return $this->telefono;
}

public function setTelefono(string $telefono):void{
    $this->telefono= $telefono;
}

public function getCod_postal():string{
    return $this->cod_postal;
}

public function setCod_postal(string $cod_postal):void{
    $this->cod_postal= $cod_postal;
}
}
?>