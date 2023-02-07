<?php
session_start();
include("conectar.php");
if (isset($_POST['ap_btn1']))
{
 
 $id = $_POST['idi'];
 $consulta = "SELECT * FROM users WHERE  id = '$id'";
 $resultado = mysqli_query($conectar1, $consulta);
 $row = $resultado -> fetch_assoc();
 $admin = $row['admin'];
 $ap = $row['desativar'];

 if ($admin == 1)
 {
     $_SESSION['status'] = "<p  style='color:red;'> Não pode ativar uma conta Admin!</p>";
     header('Location: ../contaResgistada.php');
 } 

 else
 {

     if ($ap== 0) 
     {
         $_SESSION['status'] = "<p style='color:red;'> Não pode ativar uma conta que já está ativa!</p>";
     header('Location: ../contaResgistada.php');
     } 
     else
     {

 
     $query = "UPDATE users SET `desativar`= 0 WHERE id = '$id'";
     $result = mysqli_query($conectar1, $query);

  if($result == True)
  {
      $_SESSION['status'] =  "<p style='color:green;'> Ativado Com Sucesso!</p>";
      header('Location: ../contaResgistada.php');
  }
  else
  {
          header('Location: ../contaResgistada.php');
          $_SESSION['status'] =  "<p style='color:red;'> Nao foi banido!</p>";

  }


 }
}


}