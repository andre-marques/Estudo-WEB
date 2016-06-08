<html>
	<head>
		<title>Lista de Contatos - André Marques</title>
		<link rel="stylesheet" type="text/css" href="contatos.css">
	</head>
	<body>
		<h1>Contatos</h1>
		<form>
			<fieldset>
				<legend>Novo Contato:</legend>
				<label>
					Nome:
					<input type = "text" name = "nome">
				</label>
				<label>
					Telefone:
					<input type = "text" name = "tel">
				</label>
				<label>
					E-mail:
					<input type = "text" name = "email">
				</label>
				<label>
					Descrição:
					<textarea name = "descricao"></textarea>
				</label>
				<label>
					Aniversário:
					<input type = "text" name = "aniversario">
				</label>
				<fieldset>
					<legend>Prioridade: </legend>
					<label>
						<input type = "radio" name = "favorito" value = "sim" checked />
						Sim
						<input type = "radio" name = "favorito" value = "nao" />
						Não
					</label>
				</fieldset>				
				<input type = "submit" value = "Cadastrar">
			</fieldset>
		</form>

		<table>
			<tr>
				<th>Nome</th>
				<th>Telefone</th>
				<th>E-mail</th>
				<th>Descrição</th>
				<th>Aniversário</th>
				<th>Favorito</th>
			</tr>
			<?php foreach ($lista_contatos as $cont): ?>
				<tr>
					<?php foreach ($cont as $valor): ?>
						<td><?php echo $valor; ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>
