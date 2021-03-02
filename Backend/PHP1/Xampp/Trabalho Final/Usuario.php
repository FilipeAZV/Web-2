<?php
class Usuario
{
    //Atributos classe
    private $id;
    private $nome;
    private$email;
    private $senha;

    //Métodos Mágicos (Get e Set)

    public function __get($valor)
    {
        return $this->$valor;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
