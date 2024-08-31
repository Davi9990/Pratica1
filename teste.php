<?php

include 'conexao.php';
include 'Pessoas.php';

$Pessoa1 = new Pessoa("All game Strupa","718383838","lele@gmail.com");
if($Pessoa1->inserir()){
    echo "Cadastro realizado com sucesso!";
}else{
    echo "Falha ao realizar cadastro.";
}
