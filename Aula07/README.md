# Aula 07 - Conexão PHP com MongoDB

Este repositório contém um exemplo prático de conexão entre PHP e MongoDB utilizando a extensão MongoDB Driver para PHP.

## 📌 Objetivo
Demonstrar como conectar o PHP ao MongoDB, realizar uma consulta na coleção `alunos` do banco de dados `classedb` e exibir os resultados ordenados pelo `nome`.

## 📌 Explicação do Código

- *Conexão com o MongoDB:* Utiliza a classe `MongoDB\Driver\Manager` e configura a URI de conexão.

- *Consulta:* Realiza uma busca na coleção `alunos`, ordenando os resultados pelo campo `nome`.

- *Exibição dos Resultados:* Itera sobre os documentos retornados e imprime os valores dos campos `nome`, `turma` e `sexo`.