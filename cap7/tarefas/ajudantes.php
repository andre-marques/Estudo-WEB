<?php 

	function traduz_prioridade($prioridade){
		switch ($prioridade) {
			case 1:
				return 'baixa';
			case 2:
				return 'média';
			case 3:
				return 'alta';
			default:
				return 'vazia';
		}
	}

	function traduz_data_para_banco($data){
		if($data == ""){
			return "";
		}

		$dados = explode('/', $data);
		$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
		return $data_mysql;
	}

	function traduz_data_para_exibir($data){
		if($data == "" || $data == "0000-00-00"){
			return "00/00/0000";
		}

		$dados = explode('-', $data);
		$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
		return $data_exibir;
	}

	function traduz_concluida($concluida){
		if($concluida == 1){
			return 'Sim';
		}

		return 'Não';
	}

 ?>