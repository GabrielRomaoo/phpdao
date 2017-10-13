<?php 


	require_once("config.php");


	//carrega apenas um usuário do banco, pelo seu ID correspondente

	/*
	$root = new Usuario();

	$root->loadbyId(1);

	echo $root;
	*/
// ----------------------------------------------

	// irá carregar uma lista de usuários

	//$lista = Usuario::getList();

	//echo json_encode(($lista));

//------------------------------------------------------------

	// executa uma busca no banco por login do usuário

	//$search = Usuario::searchByLogin("ro");

	//	echo json_encode($search);
 
// ---------------------------------------------------------

	// carrega um usuário autenticando o login e a senha


	$usuario = new Usuario();	

	$usuario->validaLogin("Romão", "requeijao");


	echo $usuario;


 ?>
