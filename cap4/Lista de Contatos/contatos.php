<?php  
	session_start();

	if (isset($_GET['nome'])) {
		$contato = array();
		array_push($contato, $_GET['nome']);
		array_push($contato, $_GET['tel']);
		array_push($contato, $_GET['email']);
		array_push($contato, $_GET['descricao']);
		array_push($contato, $_GET['aniversario']);
		array_push($contato, $_GET['favorito']);
		$_SESSION['contatos'][] = $contato;
	}

	$lista_contatos = array();

	if (isset($_SESSION['contatos'])) {
		$lista_contatos = $_SESSION['contatos'];
	}

	include "template.php";
?>