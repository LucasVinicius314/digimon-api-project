<?php

header('charset=utf-8');

require_once('config/Digimon.php');

// Instanciar a classe
$digimon = new Digimon();

// Recuperar informações da API usando curl
$digimon_array = RequestDigimonArray($digimon_array);

// Inserir digimons no banco de dados
InsertDigimons($digimon_array);

// Redirecionar para index.php
header('location:index.php');

// Funções
function RequestDigimonArray()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://digimon-api.herokuapp.com/api/digimon",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_SSL_VERIFYPEER => false
    ));

    // Executar curl
    $response = curl_exec($curl);

    // Fechar conexão
    curl_close($curl);

    return json_decode($response);
}

function InsertDigimons($digimon_array)
{
    global $digimon;

    foreach ($digimon_array as $value) {

        // Inserir no banco de dados
        $digimon->Insert($value->id, $value->name, $value->img, $value->level);
    }
}
