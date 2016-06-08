<html>
	<head>
		<title>Gerenciador de Tarefas</title>
	</head>
	<body>
		<h1>Gerenciador de Tarefas</h1>
		<form>
			<fieldset>
				<legend>Nova Tarefa</legend>
				<label>
					Tarefa:
					<input type = "text" name = "nome"/>
				</label>
				<input type = "submit" value = "Cadastrar">
			</fieldset>
		</form>

		<?php 
			/*if (isset($_GET['nome'])) {
				echo "Nome informado: " . $_GET['nome']; //$_GET[] variável super global (é um array)
			}*/

			if (isset($_GET['nome'])) {
				setcookie("nome" ,$_GET['nome']);
			}

			$lista_tarefas = array();

			if (isset($_COOKIE["nome"])) {
				$lista_tarefas = $_COOKIE["nome"];
			}

		 ?>

		<table>
			<tr>
				<th>Tarefas</th>
			</tr>
			<?php foreach ($lista_tarefas as $tarefa): ?>
				<tr>
					<td><?php echo $tarefa; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>