<?php

define("HOST", "pdb33.awardspace.net"); 
define("USER", "2837288_recicla");
define("PASSWORD", "m32137552"); 
define("DATABASE", "2837288_recicla");

function conectaAoMySQL()
{
	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($conn->connect_error)
    throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);

	return $conn;   
}

?>