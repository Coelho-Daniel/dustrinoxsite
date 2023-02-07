<?php
session_start(); 
include 'conectar.php';
if (isset($_POST['ins']))
{
    $id= $_POST["id_user"];
    $Titulo = $_POST["Titulo"];
    $Comentario = $_POST["Comentario"];
    $estrela = $_POST["estrela"];
if (empty($Titulo) || empty($Comentario)) {
	header("Location: ../forum.php");
     $_SESSION['for'] = "<p align='center' style='color:red; font-family:arial;'>Preencha todos os espaços!</p>" ;
      
    } 
    else
   {
   	$sql = ("INSERT INTO `comentários`(`Data`, `Titulo`, `comentario`,`estrela`, `id_user`)vALUES (Now(),'$Titulo', '$Comentario','$estrela', '$id' )");
   	if ($conectar1->query($sql)===true) 
      {
      header("Location: ../forum.php");
      $_SESSION['for'] = "<p align='center' style='color:green; font-family:arial;'>Comentário adicionado com sucesso!";
      }
      else
      {
        echo "Erro:" . $sql ."<br>" . $conectar1->error; 
      }
   }
   }
   elseif (isset($_POST['eli']))
{
 
 $dad = $_POST['ide'];
 $consulta = "DELETE FROM `comentários` WHERE `id`= '$dad'";

 $result = mysqli_query($conectar1, $consulta);

if ($result = True)
{
header('Location: ../forum.php');
 $_SESSION['for'] = "<p  style='color:green;'> Foi eliminado com sucesso!</p>";

}
else
{
	header('Location: ../forum.php');
  $_SESSION['for'] = "<p  style='color:red;'> Ocorreu um erro!</p>";
}
      
}
elseif (isset($_POST['edi']))
{
  /*$Titulo = $_POST["Titulo"];
  $Comentario = $_POST["Comentario"];*/
  $dad = $_POST['idei'];
  //$id= $_POST["id_user"];
  $Titulo = $_POST["Titulo"];
  $Comentario = $_POST["Comentario"];
  $estrela = $_POST["estrela"];
$sql = ("UPDATE `comentários` SET `Data`= NOW(),`Titulo`= '$Titulo',`comentario`= '$Comentario', `estrela`= $estrela WHERE comentários.id = $dad");
  $result = mysqli_query($conectar1, $sql);
  //echo $sql;
  //die;

  if ($result = True)
    {
    header('Location: ../forum.php');
    $_SESSION['for'] = "<p  style='color:green;'> Foi editado com sucesso!</p>";

    }
else
{
  header('Location: ../forum.php');
  $_SESSION['for'] = "<p  style='color:red;'> Ocorreu um erro!</p>";
}
}