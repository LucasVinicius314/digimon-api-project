Projeto Digimon API

Um projeto que utiliza requisições de API e banco de dados.

-- Prequisitos

> Wampserver ou algo que desempenhe a mesma função.
> SGBD que utilize MySQL.

-- Execução

> Inicie o Wampserver ou o que estiver utilizando.
> Execute o script "banco.sql" no banco de dados para criar o banco e as tabelas.
> Acesse localhost/ pelo navegador e navegue até o projeto, por exemplo localhost/digimon.
> A página "index.php" irá abrir.
> Vá para "Popular_Banco.php" para fazer as requisições à API e popular o banco. Haverá um redirecionamento para a home após o retorno da operação.

-- Observações

> Para mudar as configurações da conexão com o banco de dados, mude as propriedades da conexão em "config/Connection.php".
> A primeira linha do script "banco.sql" está comentada. Para reiniciar o banco de dados, descomente a linha e execute o script.

Autor: Lucas Vinícius
Digimon API: https://digimon-api.herokuapp.com/