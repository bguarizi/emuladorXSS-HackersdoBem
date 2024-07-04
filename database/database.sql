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
	 

create table if not exists comments(
    cid int unique not null AUTO_INCREMENT,
    date datetime,
    message text,
    pid int not null,
    primary key (cid),
    foreign key (pid) references produto(id)
);

create table if not exists progress(
    tid varchar(9) unique not null,
    status int not null
);

create table if not exists glossary(
    cid int unique not null AUTO_INCREMENT,
    word text,
    meaning text,
    primary key (cid)
);

INSERT INTO lojaXss.glossary (word, meaning) VALUES
    (CONVERT('URLs,' USING utf8mb4), CONVERT('URL (Uniform Resource Locator) é uma forma padronizada de se referir ao endereço de rede no qual se encontra algum recurso.' USING utf8mb4)),
    (CONVERT('cookies' USING utf8mb4), CONVERT('Cookie é um método de armazenamento temporário de informações utilizado principalmente para arquivar preferências, estados de sessão e configurações do usuário na web.' USING utf8mb4));

CREATE USER 'gtexss'@'localhost' IDENTIFIED BY 'gtexss_hackers';

-- Conceder todas as permissões no banco de dados 'meu_banco'
GRANT ALL PRIVILEGES ON lojaXss.* TO 'gtexss'@'localhost';

-- Atualizar os privilégios
FLUSH PRIVILEGES;