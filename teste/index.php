<?php
$local = 'localhost';
$usuario = 'root';  // Usuário do banco de dados
$senha = '';      // Senha do banco de dados
$banco = 'motelpitstop'; // Nome do banco de dados
$conn = new mysqli($local, $usuario, $senha, $banco);  

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    echo "Erro de conexão: ";
}

echo "conexão bem-sucedida!";

$conn->close();

