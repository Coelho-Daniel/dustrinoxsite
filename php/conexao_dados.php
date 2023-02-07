<?php
define('HOST', 'localhost');
define('USUARIO', 'id11900274_teste123');
define('SENHA', 'teste321');
define('DB', 'id11900274_teste');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
mysqli_set_charset($conexao, 'utf8')
?>