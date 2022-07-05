<?php
class Compañia{
    private $nombre;
    private $telefono;
    private $email;

public function getNombre():string{
    return $this->nombre;
}

public function setNombre(string $nombre):void{
    $this->nombre= $nombre;
}

public function getTelefono():string{
    return $this->telefono;
}

public function setTelefono(string $telefono):void{
    $this->telefono= $telefono;
}

public function getEmail():string{
    return $this->email;
}

public function setEmail(string $email):void{
    $this->email= $email;
}
}

?>