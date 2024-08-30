<?php

$hostname = "localhost";
$Nome = "nome"; 
$Telefone = "telefone";
$Email = "email";

$mysqli = new mysqli($hostname, $Nome, $Telefone, $Email);
if($mysqli->connect_error) {
    echo "Falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}