create database if not exists lojaXss;
use lojaXss;

CREATE TABLE IF NOT EXISTS produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    descricao VARCHAR(255),
    end_imagem VARCHAR(50),
    preco DECIMAL(6, 2)
);

INSERT INTO lojaXss.produto (nome,descricao,end_imagem,preco) VALUES
	 ('Box Anti Hacker','box anti hacker','img/boxAntiHacker.png',50.00),
	 ('Cofre de Senhas','cofre de senhas','img/cofreSenhas.png',30.00),
	 ('Firewall','firewall','img/firewall.png',40.00),
	 ('Gerador de Senhas','gerador de senhas','img/geradorSenhas.png',30.00),
	 ('Moletom','moletom','img/moletom.png',60.00),
	 ('VPN','vpn','img/vpn.png',20.00);
	 
CREATE TABLE IF NOT EXISTS users(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(30)
);

INSERT INTO lojaXss.users (login) VALUES
	 ('Convidado');

CREATE TABLE IF NOT EXISTS comments(
    cid INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date DATETIME,
    message TEXT,
    product_id INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES produto(id)
);

CREATE TABLE IF NOT EXISTS tasks(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	level INT NOT NULL,
	xss INT NOT NULL,
    type VARCHAR(1) NOT NULL
);

INSERT INTO lojaXss.tasks (level, xss, type) VALUES
	 (1,1,'L'),
	 (1,1,'L'),
	 (1,1,'Q'),
	 (1,2,'L'),
	 (1,2,'L'),
	 (1,2,'Q'),
	 (1,3,'L'),
	 (1,3,'L'),
	 (1,3,'Q'),
	 (2,1,'L'),
	 (2,1,'L'),
	 (2,1,'Q'),
	 (2,2,'L'),
	 (2,2,'L'),
	 (2,2,'Q'),
	 (2,3,'L'),
	 (2,3,'Q'),
	 (2,4,'L'),
	 (2,4,'L'),
	 (3,1,'L'),
	 (3,1,'Q'),
	 (3,2,'L'),
	 (3,2,'Q'),
	 (3,4,'Q'),
	 (3,4,'L');

CREATE TABLE IF NOT EXISTS progress(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	task_id INT NOT NULL,
	status INT,
	user_id INT NOT NULL,
	FOREIGN KEY (task_id) REFERENCES tasks(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO lojaXss.progress (task_id, status, user_id) VALUES
	 (1,0,1),
	 (2,0,1),
	 (3,0,1),
	 (4,0,1),
	 (5,0,1),
	 (6,0,1),
	 (7,0,1),
	 (8,0,1),
	 (9,0,1),
	 (10,0,1),
	 (11,0,1),
	 (12,0,1),
	 (13,0,1),
	 (14,0,1),
	 (15,0,1),
	 (16,0,1),
	 (17,0,1),
	 (18,0,1),
	 (19,0,1),
	 (20,0,1),
	 (21,0,1),
	 (22,0,1),
	 (23,0,1),
	 (24,0,1),
	 (25,0,1);

CREATE TABLE IF NOT EXISTS votes(
	id INT UNIQUE NOT NULL PRIMARY KEY,
	vote_count INT NOT NULL,
	FOREIGN KEY (id) REFERENCES produto(id)
);

INSERT INTO lojaXss.votes (id, vote_count) VALUES
	(1,0),
	(2,0);

CREATE TABLE IF NOT EXISTS cart_comments(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	message TEXT
);

CREATE TABLE IF NOT EXISTS voting_comments(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	message TEXT
);

CREATE TABLE IF NOT EXISTS checkout_comments(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	message TEXT
);

CREATE TABLE IF NOT EXISTS sanitized_comments(
	id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
	task INT,
	message TEXT
);

CREATE TABLE IF NOT EXISTS glossary(
    cid INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
    word TEXT,
    meaning TEXT
);

INSERT INTO lojaXss.glossary (word, meaning) VALUES
    (CONVERT('URL' USING utf8mb4), CONVERT('URL (Uniform Resource Locator) é uma forma padronizada de se referir ao endereço de rede no qual se encontra algum recurso.' USING utf8mb4)),
    (CONVERT('cookies' USING utf8mb4), CONVERT('Cookie é um método de armazenamento temporário de informações utilizado principalmente para arquivar preferências, estados de sessão e configurações do usuário na web.' USING utf8mb4)),
    (CONVERT('Informações sensíveis e confidenciais' USING utf8mb4), CONVERT('Informações sensíveis e confidenciais são dados que precisam ser protegidos para evitar danos à privacidade ou à segurança.' USING utf8mb4)),
    (CONVERT('engenharia social' USING utf8mb4), CONVERT('Engenharia social é a manipulação de pessoas para obter informações confidenciais ou acesso a sistemas.' USING utf8mb4));
    
CREATE USER 'gtexss'@'localhost' IDENTIFIED BY 'gtexss_hackers';

-- Conceder todas as permissões no banco de dados 'meu_banco'
GRANT ALL PRIVILEGES ON lojaXss.* TO 'gtexss'@'localhost';

-- Atualizar os privilégios
FLUSH PRIVILEGES;