-- DROP DATABASE caixa;

CREATE DATABASE caixa;

USE caixa;

CREATE TABLE conta(
    id_conta_user INT PRIMARY KEY AUTO_INCREMENT,
    nome_empresa VARCHAR(100) NOT NULL,
    endereco VARCHAR(150) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    uf VARCHAR(2) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE conta_cliente(
    id_conta INT PRIMARY KEY AUTO_INCREMENT,
    banco VARCHAR(100) NOT NULL,
    agencia INT NOT NULL,
    num_conta INT NOT NULL
);

CREATE TABLE cliente(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    data_fundacao DATE NOT NULL,
    frequencia_compra VARCHAR(30) NOT NULL, -- anual, mes, semanal
    classificao_cliente VARCHAR(1) NOT NULL, -- a, b, c
    referencia_comercial VARCHAR(150),
    credito_consultado BOOLEAN NOT NULL, -- 1, 0
    telefone VARCHAR(30) NOT NULL,
    id_conta_cliente INT NOT NULL,
    CONSTRAINT fk_idcontacliente_cliente FOREIGN KEY (id_conta_cliente) 
        REFERENCES conta_cliente(id_conta)
);

CREATE TABLE fornecedor(
    id_fornecedor INT PRIMARY KEY AUTO_INCREMENT,
    nome_fornecedor VARCHAR(50) NOT NULL,
    cnpj INT NOT NULL
);

CREATE TABLE saldo(
    id_saldo INT PRIMARY KEY AUTO_INCREMENT,
    valor FLOAT NOT NULL,
    id_cliente INT NOT NULL,
    CONSTRAINT fk_cliente_saldo FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE transacoes(
    id_transacoes INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(30) NOT NULL,
    descricao VARCHAR(50) NOT NULL,
    valor FLOAT NOT NULL,
    data_transacao DATETIME NOT NULL,
    id_saldo INT NOT NULL,
    id_fornecedor_transacoes INT NOT NULL,
    CONSTRAINT fk_transacoes_saldo FOREIGN KEY (id_saldo) REFERENCES saldo(id_saldo),
    CONSTRAINT fk_fornecedor_transacoes FOREIGN KEY (id_fornecedor_transacoes) 
        REFERENCES fornecedor(id_fornecedor)
);
