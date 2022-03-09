<?php
    global $conn;
    global $ano;
    global $mes;
    global $dia;

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "gomara";
    
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $conn -> set_charset("utf8");

    $ano = date("Y");
    $mes = date("m"); 
    $dia = date("d"); 

    $modulobanner = "1";
    $modulopaginas = "2";
    $modulodestaque = "10";
?>