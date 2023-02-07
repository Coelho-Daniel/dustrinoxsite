<?php
session_start();
include("conectar.php");
if (isset($_POST['eli_btn']))
{
 
 $id = $_POST['ide'];
 $consulta = "DELETE FROM `users` WHERE id = '$id'";
 $result = mysqli_query($conectar1, $consulta);
 
if ($result ==True)
{
 $_SESSION['elimin'] = "<p  style='color:green;'> Foi eliminado com sucesso!</p>";
     header('Location: ../index.php');
}
   
else
{
	$_SESSION['eliminar'] = "<p  style='color:red;'> Ocorreu um erro!</p>";
     header('Location: ../eliminar.php');
}
}
 ?>