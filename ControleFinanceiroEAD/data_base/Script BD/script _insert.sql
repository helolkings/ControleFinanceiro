-- CRUD (Create - Read - Update - Delete).
-- Create: Cadastrar.

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Ana Maria', 'ana_maria@hotmail.com', 'ana321', '2021-11-12');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Carlos Damião', 'carlos_damiao@hotmail.com', 'carlosd', '2022-02-03');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Junior Silva', 'junior_silva@hotmail.com', 'juniors', '2024-12-10');

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Viagens', 2);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Empresa Sorveteria', '43998877667', 'Rua dos Vegetais', 1);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Empresa Mercearia', '4333322255', 'Rua dos Sorvetes', 2);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Santander', '1122', '112233', 3500.20, 1);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Bradesco', '2233', '111222', 1250.56, 2);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(1, '2021-03-11', 45, null, 1, 1, 2, 1);
