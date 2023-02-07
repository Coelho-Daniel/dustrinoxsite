<?php



include('conectar.php');

session_start();

$query = " UPDATE `users` SET `ultima_atividade`= NOW() WHERE id = '".$_SESSION["login_user"]["id"]."'";
$statement = $conectar1->prepare($query);

$statement->execute();

?>