<?php
session_start();
include("conectar.php");
if (isset($_POST['ap_btn']))
{
 
 $id = $_POST['idi'];
 $consulta = "SELECT * FROM users WHERE  id = '$id'";
 $resultado = mysqli_query($conectar1, $consulta);
 $row = $resultado -> fetch_assoc();
 $admin = $row['admin'];
 $ap = $row['desativar'];

 if ($admin == 1)
 {
     $_SESSION['status'] = "<p  style='color:red;'> Não pode banir uma conta Admin!</p>";
     header('Location: ../contaResgistada.php');
 } 

 else
 {

     if ($ap== 1) 
     {
         $_SESSION['status'] = "<p style='color:red;'> Não pode banir uma conta que já está banida!</p>";
     header('Location: ../contaResgistada.php');
     } 
     else
     {

 
     $query = "UPDATE users SET `desativar`= 1 WHERE id = '$id'";
     $result = mysqli_query($conectar1, $query);

  if($result == True)
  {
      $_SESSION['status'] =  "<p style='color:green;'> Banido Com Sucesso!</p>";
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



 ?>