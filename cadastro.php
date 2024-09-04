<?php

class Cadastro{
    public string $nome;
    public int $telefone;
    public string $email;

    public function __construct($nome, $telefone, $email)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function setnome($Nome){
        $this->nome = $Nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setTelefone($Telefone){
        $this->telefone = $Telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setEmail($Email){
        $this->email = $Email;
    }

    public function getEmail(){
        return $this->email;
    }
}

$pessoa = null;

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    
    $pessoa = new Cadastro($nome, $telefone, $email);
}

