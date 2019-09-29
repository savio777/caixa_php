-- DROP DATABASE caixa;

CREATE DATABASE caixa;

USE caixa;

CREATE TABLE conta(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_empresa VARCHAR(100) NOT NULL,
    endereco VARCHAR(150) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    uf VARCHAR(2) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE conta_cliente(
    id INT PRIMARY KEY AUTO_INCREMENT,
    banco VARCHAR(100) NOT NULL,
    agencia INT NOT NULL,
    num_conta INT NOT NULL
);

CREATE TABLE cliente(
    id INT PRIMARY KEY AUTO_INCREMENT,
    data_fundacao DATE NOT NULL,
    frequencia_compra VARCHAR(30) NOT NULL,
    classificao_cliente VARCHAR(1) NOT NULL,
    referencia_comercial VARCHAR(150) NOT NULL,
    credito_consultado BOOL NOT NULL,
    telefone VARCHAR(30) NOT NULL,
    id_conta_cliente INT NOT NULL,
    CONSTRAINT fk_idcontacliente_cliente FOREIGN KEY (id_conta_cliente) REFERENCES conta_cliente(id)
);

CREATE TABLE fornecedor(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_fornecedor VARCHAR(50) NOT NULL,
    cnpj INT NOT NULL
);

CREATE TABLE transacoes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(30) NOT NULL,
    descricao VARCHAR(50) NOT NULL,
    valor FLOAT NOT NULL,
    data_transacao DATETIME NOT NULL,
    id_saldo INT NOT NULL,
    CONSTRAINT fk_transacoes_saldo FOREIGN KEY (id_saldo) REFERENCES saldo(id)
);

CREATE TABLE saldo(
    id INT PRIMARY KEY AUTO_INCREMENT,
    valor FLOAT NOT NULL,
    id_cliente INT NOT NULL,
    CONSTRAINT fk_cliente_saldo FOREIGN KEY (id_cliente) REFERENCES cliente(id)
);
