-- Aula 19.1 e junção inner join

SELECT nome_usuario, email_usuario
	from tb_usuario
where nome_usuario like '%r'; 
    
SELECT nome_usuario, data_cadastro
	from tb_usuario
where data_cadastro between '2020-01-15' and '2021-01-20'
    