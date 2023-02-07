
<?php session_start();
include 'conectar.php';

 ?>
<?php
 

  $nome = $_POST['nome'];
  $tel = $_POST['tele'];
  $email = $_POST['email'];
  /*$pass  = $_POST['pass'];
  $passC = $_POST["passC"];
  $pass_incriptada = md5($pass);*/
  $tipo = $_POST['tipo'];
  $deno = $_POST['deno'];
 

       $consult = "SELECT  Email FROM `users` WHERE Email = '$email'";
       $result = mysqli_query($conectar1, $consult);

        $email1 = $result->fetch_assoc();


if (!empty($email1))
{
  header("Location: ../contaResgistada.php");
      $_SESSION['status'] = "<p align='center' style='color:red; font-family:arial;'>O email que inseriu ja existe!</p>";
 }
 
  if (empty($nome) || empty($tel) ||empty($email)/* ||empty($pass) */){
    
    header("Location: ../edit1.php");
      $_SESSION['statusEdit'] = "<p align='center' style='color:red; font-family:arial;'>Preencha todos os campos!</p>";
   
    }
    else
    {
      
     /* if ($pass!=$passC) {
     header("Location: ../edit1.php");
      $_SESSION['statusEdit'] = "<p align='center' style='color:red; font-family:arial;'>As Passwords não coincidem!</p>";
  }
  elseif( strlen($pass)<= 5 )
     {
      header("Location: ../edit1.php");
      $_SESSION['statusEdit'] = "<p align='left' style='color:red;'>As Passwords devem conter pelo menos 6 caracteres e um número!</p>";
     }
    elseif(!preg_match("#[0-9]+#", $pass) ) 
     {
      header("Location: ../edit1.php");
      $_SESSION['statusEdit'] = "<p align='left' style='color:red;'>As Passwords devem conter pelo menos 6 caracteres e um número!</p>";
      }
      elseif( !preg_match("#[a-z]+#", $pass ) ) {
       header("Location: ../editar.php");
      $_SESSION['statusEdit'] = "<p align='left' style='color:red;'>As Passwords devem conter pelo menos 6 caracteres e um número!</p>";

        }
        else{*/
        	$id = $_SESSION['edit_usuario']['id'];
        	
      $sql = ("UPDATE `users` SET `Nome`='$nome',`Telefone`='$tel',`Email`='$email'/*,`Password`='$pass_incriptada'*/,`tipo_cliente`='$tipo',`denominacao`='$deno' WHERE ID = '$id'");
    

    if ($conectar1->query($sql)===true) 
      {
      
      header("Location: ../contaResgistada.php");
      $_SESSION['status'] = "<p align='center' style='color:green; font-family:arial;'>Foi editado com sucesso: $nome</p>";
      }
      else
      {
        echo "Erro:" . $sql ."<br>" . $conectar1->error; 
      }
    //}
    } 
    
    $conectar1->close();  
 ?>

