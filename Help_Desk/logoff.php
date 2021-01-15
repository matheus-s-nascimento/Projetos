<?
	session_start();
	/*
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";


	unset($_SESSION['x']); // remove o indice apenas se ele exitir

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";



	session_destroy();

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	//remover indicies do array de sessão
	//unset()

	//destruir a variavel de sessão
	//session_detroy()
*/

	session_destroy();
	header('Location: index.php');
?>