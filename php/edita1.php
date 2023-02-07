<?php
session_start();
include("conectar.php");
if (isset($_POST['ap_btn2']))
{
 
 $id = $_POST['idi'];
 $consulta = "SELECT * FROM users WHERE  id = '$id'";
 $resultado = mysqli_query($conectar1, $consulta);
 $row = $resultado -> fetch_assoc();
 $admin = $row['admin'];


 if ($admin == 1)
 {
     $_SESSION['status'] = "<p  style='color:red;'> Não pode editar uma conta Admin!</p>";
     header('Location: ../contaResgistada.php');
 } 

 else
 {
  $_SESSION['edit_usuario']=$row;
  header('Location: ../edit1.php');
 } 
 }


?>