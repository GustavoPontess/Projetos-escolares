
CREATE DATABASE user_viewer_db DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE user_viewer_db;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuario (nome, email, senha) VALUES
('Admin', 'admin@example.com', '123456'),
('João Silva', 'joao.silva@example.com', 'abcdef'),
('Maria Oliveira', 'maria.oliveira@example.com', 'senha123'),
('Gustavo Nunes', 'gustavo.nunes@example.com', 'senha123');
