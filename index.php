<?php

$serverName = 'NOTEBOOK-MARCEL\SQLEXPRESS';
$connectionInfo = [
    'Database' => 'conexao_php',
    'UID' => 'sa',
    'PWD' => 'sql123',
];

$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn === false ) {
  die( print_r( sqlsrv_errors(), true));
}

if( $client_info = sqlsrv_client_info( $conn)) {
  foreach( $client_info as $key => $value) {
      echo $key.": ".$value."<br />";
  }
} else {
  echo "Error in retrieving client info.<br />";
}