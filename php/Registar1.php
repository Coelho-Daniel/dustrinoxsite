<?php session_start(); ?>
<?php

  include 'conectar.php';

  $nome = $_POST['nome'];
  $tel = $_POST['tele'];
  $email = $_POST['email'];
  $pass  = $_POST['pass'];
  $passC = $_POST["passC"];
  $pass_incriptada = md5($pass);
  $tipo = $_POST['tipo'];
  $deno = $_POST['deno'];
  $data = date('Y-m-d');

 
        $consult = "SELECT  Email FROM `users` WHERE Email = '$email'";
       $result = mysqli_query($conectar1, $consult);

        $email1 = $result->fetch_assoc();


if (!empty($email1))
{
  header("Location: ../Registar.php");
      $_SESSION['msR'] = "<p align='center' style='color:red; font-family:arial;'>O email que inseriu ja existe!</p>";
 }
 
else
{
  if (empty($nome) || empty($tel) ||empty($email) ||empty($pass) ){
    
     echo "Preencha todos os dados";
   
    }
    else
    {
      if ($pass!=$passC) {
     header("Location: ../Registar.php");
      $_SESSION['msR'] = "<p align='center' style='color:red; font-family:arial;'>As Passwords não coincidem!</p>";
  }
  elseif( strlen($pass)<= 5 )
     {
      header("Location: ../Registar.php");
      $_SESSION['msR'] = "<p align='left' style='color:red;'>As Passwords devem conter pelo menos 6 caracteres e um número!</p>";
     }
    elseif(!preg_match("#[0-9]+#", $pass) ) 
     {
      header("Location: ../Registar.php");
      $_SESSION['msR'] = "<p align='left' style='color:red;'>As Passwords devem conter pelo menos 6 caracteres e um número!</p>";
      }
      elseif( !preg_match("#[a-z]+#", $pass ) ) {
       header("Location: ../Registar.php");
      $_SESSION['msR'] = "<p align='left' style='color:red;'>As Passwords devem conter pelo menos 6 caracteres e um número!</p>";

        }
        else{
      $sql = ("INSERT INTO users(Nome, Telefone, Email, Password, tipo_cliente, denominacao, Data)
               VALUES ('$nome', '$tel', '$email' , '$pass_incriptada', '$tipo', '$deno', '$data' )");
    

    if ($conectar1->query($sql)===true) 
      {
      
      header("Location: ../Login.php");
      $_SESSION['ms'] = "<p align='center' style='color:green; font-family:arial;'>Foi registado com sucesso: $nome</p>";
      }
      else
      {
        echo "Erro:" . $sql ."<br>" . $conectar1->error; 
      }}
    } 
    
    $conectar1->close();  
}
 ?>