     <?php
      session_start(); 

    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pass_incriptada = md5($pass);

 if (empty($email) || empty($pass)) {
      echo "Preencha todos os espaços";
      header("Refresh:2 ; url=../login.php");
    } 
    else 
    {
      
        include 'conectar.php'; 
        $consult = "SELECT  * FROM `users` WHERE Email = '$email' AND Password = '$pass_incriptada' ";
        
        $result = mysqli_query($conectar1, $consult);
        $linha = mysqli_num_rows($result);



         
        $key = $result->fetch_assoc();

       
        
       if ($linha==1) 
       {

        $_SESSION['login_user']=$key;
        $_SESSION['password'] = $pass;
        $admin = $key['admin'];
        $state = $key['desativar'];
        if ($state==1)
        {
          header("Location: ../Login.php");
      $_SESSION['ms'] = "<p align='center' style='color:red; font-family:arial;'>Esta conta foi desativa pelo admin!</p>" ;
        }
        else
{
        if ($admin==1) {
        
        $_SESSION['login_email'] = $email;
        $_SESSION['login_admin'] = $admin;
        /*echo "<br><br><center><h1>Bem-Vindo/a ";
        echo  $key['Nome'];

        header("Refresh:3 ; url=../indexA.php");*/
        $nome = $key['Nome'];
        header("Location: ../indexA.php");
      $_SESSION['msL'] = "<h1 align='center' style='color:green; font-family:arial;'>Bem-Vindo/a $nome</h1>" ;
        }
        elseif ($admin==0) 
        {
          $_SESSION['login_email'] = $email;
      /*  echo "<br><br><center><h1>Bem-Vindo/a ";
        echo  $key['Nome'];

        header("Refresh:3 ; url=../indexL.php");
*/     $nome = $key['Nome'];
        header("Location: ../indexL.php");
      $_SESSION['msL'] = "<h1 align='center' style='color:green; font-family:arial;'>Bem-Vindo/a $nome</h1>" ;
      }
      else
      {
        header("Location: alert.php");
      }
       }
       }
        else 
       {
        header("Location: ../Login.php");
      $_SESSION['ms'] = "<p align='center' style='color:red; font-family:arial;'>Este user não foi registado ou então tem o Email ou Password incorretos!</p>";

       /* echo "<br><br><center><h1>Este user não foi registado ou então tem o Email ou Password incoretos!</h1></center>";
        header("Refresh:6; url=../Login.php");*/
       }
       

        
    }

  $conectar1->close();

  ?>
