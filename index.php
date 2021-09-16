<?php

$serverName = 'NOTEBOOK-MARCEL\SQLEXPRESS';
$connectionInfo = [
    'Database' => 'conexao_php',
    'UID' => 'sa',
    'PWD' => 'sql123',
];

$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn)
{
  // Sucesso ao se conectar
  echo "A conexão foi estabelecida.<br>";
} else {
  // Falha ao se conectar
  echo "A conexão não foi estabelecida.<br>";
  die(print_r(sqlsrv_errors(), true));
}
