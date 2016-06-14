CREATE TABLE contatos(
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    telefone VARCHAR(13),
    email VARCHAR(30),
    descricao TEXT,
    aniversario DATE,
    favorito BOOLEAN
);