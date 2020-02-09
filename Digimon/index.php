<?php

header('charset=utf-8');

// Imprimir página
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
        <h1>Home</h1>
        <ul>
            <li><a href='Popular_Banco.php'>Popular Banco</a></li>
            <li><a href='Mostrar_Resultado.php'>Resultado</a></li>
        </ul>
    </div>
</div>
");
