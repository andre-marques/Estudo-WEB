<?php 

	function traduz_favorito($favorito){
		switch ($favorito) {
			case 1:
				return 'Sim';
			case 2:
				return 'Não';
			default:
				return 'Null';
		}
	}

	function traduz_aniversario_bd($data){
		if ($data == '') {
			return '';
		}

		$data_form = explode('-', $data);

		$data_exibir = "{$data_form[2]}/{$data_form[1]}/{$data_form[0]}";
		return $data_exibir;
	}

	function traduz_aniversario_front_bd($data){
		if ($data == '') {
			return '';
		}

		$data_form = explode('/', $data);

		$data_salvar = "{$data_form[2]}/{$data_form[1]}/{$data_form[0]}";
		return $data_salvar;
	}

 ?>