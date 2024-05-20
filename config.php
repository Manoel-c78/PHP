<?php 

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $db0Password, $dbName);

if($conexao->connect_errno)

    echo "Erro";

    else{

        echo "Conexão efeutada!";
    }

?>