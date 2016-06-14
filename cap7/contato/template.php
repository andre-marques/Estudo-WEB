<html>
	<head>
		<title>Lista Telefonica - André Marques</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<form>
			<fieldset>
				<legend>Novo Contato</legend>
				<label>
					Nome:
					<input type = "text" name = "nome">
				</label>
				<label>
					Telefone:
					<input type = "text" name = "telefone">
				</label>
				<label>
					Descrição:
					<input type = "text" name = "descricao">
				</label>
				<label>
					E-mail:
					<input type = "text" name = "email">
				</label>
				<label>
					Aniversário:
					<input type = "text" name = "aniversario">
				</label>
				<fieldset>
					<legend>Favorito</legend>
					<input type = "radio" name = "favorito" value = '1' checked/>
					Sim
					<input type = "radio" name = "favorito" value = '2'/>
					Não
				</fieldset>
				
				<input type = "submit" value = "Cadastrar">
			</fieldset>
		</form>
		<table>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Descrição</th>
				<th>Aniversário</th>
				<th>E-mail</th>
				<th>Favorito</th>
			</tr>
			<?php foreach ($lista_contatos as $unic_contato): ?>
				<tr>
					<td><?php echo $unic_contato['id']; ?></td>
					<td><?php echo $unic_contato['nome']; ?></td>
					<td><?php echo $unic_contato['telefone']; ?></td>
					<td><?php echo $unic_contato['descricao']; ?></td>
					<td><?php echo traduz_aniversario_bd($unic_contato['aniversario']); ?></td>
					<td><?php echo $unic_contato['email']; ?></td>
					<td><?php echo traduz_favorito($unic_contato['favorito']); ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>