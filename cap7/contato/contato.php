<?php 

	include "banco.php";
	include "ajudante.php";

	if (isset($_GET['nome']) && $_GET['nome'] != '') {
		$contato = array();

		$contato['nome'] = $_GET['nome'];

		if (isset($_GET['telefone'])) {
			$contato['telefone'] = $_GET['telefone'];
		}else{
			$contato['telefone'] = '';
		}

		if (isset($_GET['descricao'])) {
			$contato['descricao'] = $_GET['descricao'];
		}else{
			$contato['descricao'] = '';
		}

		if (isset($_GET['aniversario'])) {
			$contato['aniversario'] = traduz_aniversario_front_bd($_GET['aniversario']);
		}else{
			$contato['aniversario'] = '';
		}

		if (isset($_GET['email'])) {
			$contato['email'] = $_GET['email'];
		}else{
			$contato['email'] = '';
		}

		$contato['favorito'] = $_GET['favorito'];

		cadastra_contato($conexao, $contato);

	}

	$lista_contatos = lista_contatos($conexao);

	include "template.php";
 ?>