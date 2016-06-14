<html>
	<head>
		<title>Estacionamento - Veiculos</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<form>
			<fieldset>
				<legend>Novo Veiculo</legend>
				<label>
					Placa:
					<input type = "text" name ="placa">
				</label>
				<label>
					Marca:
					<input type = "text" name ="marca">
				</label>
				<label>
					Modelo:
					<input type = "text" name ="modelo">
				</label>
				<label>
					Hora entrada:
					<input type = "text" name ="hora_entrada">
				</label>
				<label>
					Hora saida:
					<input type = "text" name ="hora_saida">
				</label>
				<input type = "submit" value = "Cadastrar">
			</fieldset>
		</form>

		<table>
			<tr>
				<th>ID</th>
				<th>Placa</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Hora Entrada</th>
				<th>Hora Saida</th>
			</tr>
			<?php foreach ($lista_veiculos as $unic_veiculo): ?>
				<tr>
					<td><?php echo $unic_veiculo['id']; ?></td>
					<td><?php echo $unic_veiculo['placa']; ?></td>
					<td><?php echo $unic_veiculo['marca']; ?></td>
					<td><?php echo $unic_veiculo['modelo']; ?></td>
					<td><?php echo $unic_veiculo['hora_entrada']; ?></td>
					<td><?php echo $unic_veiculo['hora_saida']; ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>