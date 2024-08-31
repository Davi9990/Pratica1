<?php

class Pessoa{

    private $nome;
    private $telefone;
    private $email;

    public function __construct($Nome,$Telefone,$Email)
    {
        $this->nome = $Nome;
        $this->telefone = $Telefone;
        $this->email = $Email;
    }

    //Metodo de inserir no banco de dados
    public function inserir(): bool{
        //implementar aqui a logica de inserção no banco de dados
        $pdo = Connect :: getConnection();
        $ret = $pdo->prepare("INSERT INTO pessoa (nome,telefone,email) VALUES(:nome,:telefone,:email)");
        $ret->bindValue(':nome', $this->nome);
        $ret->bindValue(':telefone', $this->telefone);
        $ret->bindValue(':email', $this->email);
        return $ret->execute(); 
    }
}