<?php  session_start(); 
include "verification.php";
include "conectar.php";?> 
<!--<!DOCTYPE html>
<html>
<head>
    <title>enviar_formulário.php</title>
</head>
<body>
<table align="center" border="3" bordercolor="lightblue" width="50%" height="50%">
            <tr>
            <td><h1 align="center">Data de inserção</h1></td>
            <td><h1 align="center">Hora de inserção</h1></td>
            
            <?php/*
            $date = date('d/m/Y');
            $hora = date('H:i:s');
            $chave =   array ( $date=>$hora);
            foreach ($chave as $key => $valor) {
                  # code...
                  echo "<tr> <td align=center>$key</td><td align=center>$valor</td> <br>";
                  
            }*/
            ?>
</table>--->
<?php   



    if ( empty($_POST['mensagem']) ) {
        header("Location: ../formL.php");
      $_SESSION['status1'] = "<p align='center' style='color:red; font-family:arial;'>Por favor preencha os dados obrigatorios.</p>" ;
    } else {


     if(isset($_POST['submit'])){

    $nome = $_SESSION['login_user']['Nome'];
    $tele = $_SESSION['login_user']['Telefone'];
    $tipo = $_SESSION['login_user']['tipo_cliente'];
    $deno = $_SESSION['login_user']['denominacao'];
    $email = $_SESSION['login_user']['Email'];
    $mensagem = $_POST['mensagem'];

    $to='coelho2003daniel@gmail.com';

    $subject='Enviado através do site dustrinox';

    $message="Nome: ".$nome."\n"."Telefone: ".$tele."\n"."cliente: ".$tipo."\n"."Nome da Empresa: ".$deno."\n"."E-Mail: ".$email."\n"."Mensagem: "."\n\n\n".$mensagem;

    $headers="From:".$email;

    if(mail($to, $subject, $message, $headers))
    {
        header("Location: ../formL.php");
       $_SESSION['status1'] = "<p align='center' style='color:green; font-family:arial;'>O seu email foi enviado com sucesso! <br>Obrigado"." ".$nome." por escolher a Dustrinox, entraremos em contacto assim que possível!</p>" ;
        
        //    echo "<p><h1>O seu email foi enviado com sucesso!</h1></p>";
        //    echo "<p><h1> Obrigado"." ".$nome." por escolher a Dustrinox, entraremos em contacto assim que possível!</h1></p>";
    }
        else
    {
        header("Location: ../formL.php");
       $_SESSION['status1'] = "<p align='center' style='color:red; font-family:arial;'>Erro ao enviar o email!</p>" ;
        //    echo "Erro ao enviar o email";
    }
 }
    
    
     $conexao->close();
     //header('Refresh:5; url=../formL.html');
     exit();
?>
</body>
</html>
