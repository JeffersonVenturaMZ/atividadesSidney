<?php
// Connecting, selecting database
$mysqli = new mysqli('localhost', 'root', 'root', 'bd_cia');
 
// Check erros
if ( $mysqli->connect_errno ) echo $mysqli->connect_errno, ' ', $mysqli->connect_error;
 
// SQL query
$sql = 'SELECT * FROM tb_pessoa';
 
// Printing results
$result = $mysqli->query( $sql );
 
while ( $row = $result->fetch_assoc() ) echo $row['localhost'], ' ', $row['root'], ' ', $row['root'], "\n";
 
// Close Connection
$mysqli->close();
?>