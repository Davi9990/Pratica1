<?php

include 'Connect.php';
include 'Pessoas.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Pessoa1 = new Pessoa($_POST['nome'],$_POST['telefone'],$_POST['email']);
    

    if($Pessoa1->inserir()){
        header('Location: index2.php?mensagem=success');
    }else{
        header('Location: index2.php?mensagem=Error');
    }
}

//$Pessoa1 = new Pessoa("All game Strupa","718383838","lele@gmail.com");

