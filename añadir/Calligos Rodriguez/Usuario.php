<?php
class Usuario{
     private $nombre;
     private $apellido;
     private $telefono;
     private $direccion;
     private $username;
     private $password;
     private $id_usuario;
     private $email;


public function getNombre():string{
    return $this->nombre;
}

public function setNombre(string $nombre):void{
    $this->nombre= $nombre;
}

public function getApellido():string{
    return $this->apellido;
}

public function setApellido(string $apellido):void{
    $this->apellido= $apellido;
}

public function getTelefono():string{
    return $this->telefono;
}

public function setTelefono(string $telefono):void{
    $this->telefono= $telefono;
}

public function getDireccion():string{
    return $this->direccion;
}

public function setDireccion(string $direccion):void{
    $this->direccion= $direccion;
}

public function getUsername():string{
    return $this->username;
}

public function setUsername(string $username):void{
    $this->username= $username;
}

public function getPassword():string{
    return $this->password;
}

public function setPassword(string $password):void{
    $this->password= $password;
}

public function getId_usuario():string{
    return $this->id_usuario;
}

public function setId_usuario(string $id_usuario):void{
    $this->id_usuario= $id_usuario;
}

public function getEmail():string{
    return $this->email;
}

public function setEmail(string $email):void{
    $this->email= $email;
}
}

?>