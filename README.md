# projeto_digimon_api
Projeto utilizando requisições de API e banco de dados.

<h1>Projeto Digimon API</h1>

Um projeto que utiliza requisições de API e banco de dados.

<h3>Prequisitos</h3>

> Wampserver ou algo que desempenhe a mesma função. <br>
> SGBD que utilize MySQL.

<h3>Execução</h3>

> Inicie o Wampserver ou o que estiver utilizando. <br>
> Execute o script "banco.sql" no banco de dados para criar o banco e as tabelas. <br>
> Acesse localhost/ pelo navegador e navegue até o projeto, por exemplo localhost/digimon. <br>
> A página "index.php" irá abrir. <br>
> Vá para "Popular_Banco.php" para fazer as requisições à API e popular o banco. Haverá um redirecionamento para a home após o retorno da operação.

<h3>Observações</h3>

> Para mudar as configurações da conexão com o banco de dados, mude as propriedades da conexão em "config/Connection.php". <br>
> A primeira linha do script "banco.sql" está comentada. Para reiniciar o banco de dados, descomente a linha e execute o script. <br>

Autor: Lucas Vinícius <br>
Digimon API: <a>https://digimon-api.herokuapp.com/</a>
