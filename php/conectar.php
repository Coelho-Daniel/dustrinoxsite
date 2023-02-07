<?php
 
    define('HOST', 'localhost');
    define('UTILIZADOR', 'root');
    define('PASSWORD', '');
    define('BD', 'BDustrinox');

    $conectar1 = mysqli_connect(HOST, UTILIZADOR, PASSWORD, BD) or die ('Erro ao ligar a base de dados');
    mysqli_set_charset($conectar1, 'utf8')
?>