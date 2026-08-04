-- Estrutura de banco de dados para sistema hospitalar

CREATE DATABASE IF NOT EXISTS hospital;
USE hospital;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    data_nascimento DATE,
    telefone VARCHAR(20),
    endereco VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS medicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    crm VARCHAR(50) NOT NULL,
    especialidade_id INT,
    telefone VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS especialidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    medico_id INT NOT NULL,
    data DATE,
    horario TIME,
    status VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS atendimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    medico_id INT NOT NULL,
    data DATE,
    observacoes TEXT
);

CREATE TABLE IF NOT EXISTS medicamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    fabricante VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS estoque (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicamento_id INT NOT NULL,
    quantidade INT NOT NULL,
    data_ultima_atualizacao DATETIME
);

CREATE TABLE IF NOT EXISTS internacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    quarto_id INT,
    data_entrada DATE,
    data_saida DATE
);

CREATE TABLE IF NOT EXISTS quartos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(50),
    tipo VARCHAR(100),
    descricao VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS leitos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quarto_id INT,
    numero VARCHAR(50),
    status VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS financeiro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255),
    valor DECIMAL(10,2),
    data DATE,
    tipo VARCHAR(50)
);
