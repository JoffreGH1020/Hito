<?php
class Trabajador{
    private $id_trabajador;
    private $nombre;
    private $apellido;
    private $direccion;
    public $cargo;
    public $disponibilidad;

    public function getId_trabajador():string{
        return $this->id_trabajador;
    }

    public function setId_trabajador(string $id_trabajador):void{
        $this->id_trabajador= $id_trabajador;
    }

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

    public function getDireccion():string{
        return $this->direccion;
    }

    public function setDireccion(string $direccion):void{
        $this->direccion= $direccion;
    }

    public function getCargo():int{
        return $this->cargo;
    }

    public function setCargo(int $cargo):void{
        $this->cargo= $cargo;
    }

    public function getDisponibilidad():int{
        return $this->cargo;
    }

    public function setDisponibilidad(int $disponibilidad):void{
        $this->disponibilidad= $disponibilidad;
    }
}

?>