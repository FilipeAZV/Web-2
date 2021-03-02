<?php
// Cria a classe Pessoa em PHP
class Pessoa
{
    // Atributos da classe
    private $id;
    private $nome;
    private $sobrenome;
    private $idade;
    private $email;
    private $senha;

    // Métodos (function)
    private function falar()
    {
        echo "Buenas!"; // VOID
    }

    public function permitirFalar()
    {
        $this->falar();
    }

    // Métodos Mágicos (Get e Set)
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    // === Get e Set
    /*
    // Nome
    public function setNome($nomeInformado)
    {
        $this->nome = $nomeInformado;
        // Manipula o valor DESTA classe
    }

    public function getNome()
    {
        return $this->nome;
    }

    // Idade
    public function setIdade($idadeInformada)
    {
        $this->idade = $idadeInformada;
        // Manipula o valor DESTA classe
    }

    public function getIdade()
    {
        return $this->idade;
    }
    */
}