<?php
$bdServidor = "127.0.0.1";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "tcc_mauricio";
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($conexao === false) {
	echo "Poblemas para conectar no banco, erro: ";
	echo mysqli_connect_error();
}

?>