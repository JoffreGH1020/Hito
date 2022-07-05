<?php
class Pedido{
     private $id_pedido;
     private $direccion_destino;
     private $formas_de_envio;


public function getId_pedido():string{
    return $this->id_pedido;
}

public function setId_pedido(string $id_pedido):void{
    $this->id_pedido= $id_pedido;
}

public function getDireccion_destino():string{
    return $this->direccion_destino;
}

public function setDireccion_destino(string $direccion_destino):void{
    $this->direccion_destino= $direccion_destino;
}

public function getFormas_de_envio():string{
    return $this->formas_de_envio;
}

public function setFormas_de_envio(string $formas_de_envio):void{
    $this->formas_de_envio= $formas_de_envio;
}
}
?>