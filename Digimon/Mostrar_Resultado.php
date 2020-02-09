<?php

header('charset=utf-8');

require_once('config/Digimon.php');

// Instanciar a classe
$digimon = new Digimon();

// Retornar quantidade de entradas
$entries = $digimon->SelectCountAll()[0]->{'count(*)'};

// Imprimir parte da página
echo ("
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<style>
body {
    background: rgba(128, 128, 128, 0.2);
}
table {
    border-collapse: collapse;
}
td, tr, th {
    border: 1px solid black;
}
.well {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 5px;
    
}
.wide {
    width: 100%;
}
</style>
<div class='container'>
    <div class='well'>
        <h1>Resultado</h1>
        <ul>
            <li><a href='index.php'>Home</a></li>
        </ul>
        <h1>Quantidade de digimons: " . $entries . "</h1>
        <br><br>
        <h1>Quantidade de digimons por nível:</h1>
        <table class='wide'>
            <tr>
                <th>Nível:</th>
                <th>Quantidade:</th>
            </tr>
");

// Retornar array de nomes de nível distintos
$distinctLevels_array = $digimon->SelectDistinctLevels();

$levelAmount_array = [];

// Associar quantidade de ocorrências do nível no banco de dados ao seu respectível nível
foreach ($distinctLevels_array as $value) {

    $level = $value->level;

    // Retornar quantidade
    $amount = $digimon->SelectCountByLevel($level)[0]->{'count(*)'};

    // Associar
    $levelAmount_array[$level] = $amount;
}

// Organizar array
arsort($levelAmount_array);

// Imprimir tabela de níveis
foreach ($levelAmount_array as $key => $value) {

    echo ("
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>
    ");
}

// Imprimir parte da página
echo ("
        </table>
        <br><br>
        <h1>Digimons de nível \"Fresh\":</h1>
        <table class='wide'>
            <tr>
                <th>Id:</th>
                <th>Nome:</th>
                <th>Imagem:</th>
            </tr>
");

// Retornar digimons de nível "Fresh"
$freshDigimons_array = $digimon->SelectByLevel('Fresh');

// Imprimir tabela
foreach ($freshDigimons_array as $value) {

    $id = $value->id;
    $name = $value->name;
    $img = $value->img;

    echo ("
        <tr>
            <td>$id</td>
            <td>$name</td>
            <td><img src='$img' style='width: 120px; height: 120px'></td>
        </tr>
    ");
}

// Fechar tabela
echo ("
        </table>
        <br><br>
    </div>
</div>
");
