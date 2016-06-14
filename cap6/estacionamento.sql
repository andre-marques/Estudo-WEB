CREATE TABLE veiculos(
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(8) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    modelo VARCHAR(20),
    hora_entrada DATETIME,
    hora_saida DATETIME
);