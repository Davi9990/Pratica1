<?php

class Pessoa{

    private $nome;
    private $telefone;
    private $email;

    public function __construct($Nome = null,$Telefone = null,$Email = null) 
    {
        $this->nome = $Nome;
        $this->telefone = $Telefone;
        $this->email = $Email;
    }


    //Metodo de inserir no banco de dados
    public function inserir(): bool{
        //implementar aqui a logica de inserção no banco de dados
        $pdo = Connect::getConnection();
        $ret = $pdo->prepare("INSERT INTO cadastro (nome,telefone,email) VALUES(:nome,:telefone,:email)");
        $ret->bindValue(':nome', $this->nome);
        $ret->bindValue(':telefone', $this->telefone);
        $ret->bindValue(':email', $this->email);
        return $ret->execute(); 
    }

    //Metodo para listar todos os dados da tabela
    public static function listar(): array
    {
       $pdos = Connect::getConnection();
       $stmt = $pdos->query("SELECT * FROM cadastro");
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id): bool{
        $pdos = Connect::getConnection();
        $res  = $pdos->prepare("DELETE FROM cadastro WHERE idcadastro = :idcadastro");
        $res->bindValue(':idcadastro', $id);
        return $res->execute();
    }
}