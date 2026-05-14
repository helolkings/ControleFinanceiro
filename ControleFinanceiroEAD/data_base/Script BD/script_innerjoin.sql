SELECT tipo_movimento,
	   data_movimento, 
	   valor_movimento,
	   nome_categoria,
	   nome_empresa,
	   banco_conta,
	   numero_conta,
	   agencia_conta
FROM   tb_movimento
INNER JOIN  tb_categoria ON tb_categoria.id_categoria = tb_movimento.id_categoria
INNER JOIN  tb_empresa   ON tb_empresa.id_empresa = tb_movimento.id_empresa
INNER JOIN  tb_empresa   ON tb_conta.id_conta = tb_movimento.id_conta