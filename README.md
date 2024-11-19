Projeto - Sistema para a loja Makes by Cris Martins

Este projeto tem como objetivo desenvolver um banco de dados eficiente para o sistema da loja **Makes by Cris Martins**, localizada em Poranga. 
O sistema será projetado para organizar e gerenciar informações relacionadas aos funcionários, produtos, estoque e preços, otimizando as operações da loja. Entre as funcionalidades principais estão o cadastro de novos produtos, a consulta e atualização do estoque, e a verificação de preços para atender clientes de forma ágil. Além disso, o sistema incluirá uma funcionalidade de login para garantir o acesso restrito e seguro aos funcionários cadastrados.
A estrutura do banco de dados será composta por tabelas que armazenam informações como nomes, e credenciais de acesso dos funcionários, bem como detalhes sobre os produtos, incluindo quantidade em estoque e valores. 
Além disso, o sistema contará com ferramentas de geração de relatórios para análise de vendas, permitindo à gerência identificar tendências e otimizar o desempenho comercial. A integração com o sistema de vendas também possibilitará a atualização automática do estoque em tempo real, garantindo que a loja sempre tenha informações precisas sobre a disponibilidade dos produtos.
Com a implementação desse projeto, espera-se melhorar o controle operacional, evitar perdas por falta de controle no estoque e aumentar a eficiência geral do negócio.

- CONSULTAS SQL
1 - Inserir um produto na tabela produtos:

INSERT INTO produtos (nome, quantidade, valor) 
VALUES ('Produto Exemplo', 10, 29.99);

2 - Selecionar todos os produtos:

SELECT * FROM produtos;

3 -Atualizar a quantidade de um produto específico:

UPDATE produtos 
SET quantidade = 15 
WHERE id_produto = 1;

4 - Inserir um usuário na tabela logar:

INSERT INTO logar (login, password) 
VALUES ('usuario_exemplo', 'senha123');

5 - Selecionar um usuário por login e senha:

SELECT * FROM logar 
WHERE login = 'usuario_exemplo' AND password = 'senha123';

6 - Atualizar a senha de um usuário:

UPDATE logar 
SET password = 'nova_senha' 
WHERE id_logar = 1;

7 - Calcular o valor total do estoque:

SELECT SUM(quantidade * valor) AS valor_total_estoque FROM produtos;

8 - Ordenar os produtos pelo preço (do mais caro para o mais barato):

SELECT * FROM produtos 
ORDER BY valor DESC;

9 - Aplicar um desconto de 10% para todos os produtos:

UPDATE produtos 
SET valor = valor * 0.9;

10 - Criar uma visão (view) para produtos com baixo estoque:

CREATE VIEW produtos_baixo_estoque AS 
SELECT * FROM produtos 
WHERE quantidade < 10;


