
<?php 

include ('conectar.php');

session_start();

$query = "
SELECT * FROM users

";

 $result = mysqli_query($conectar1, $query);

$output = '
<table class="table table-bordered table-striped">
 <tr>
 
  <td>Nome</td>
  <td>Telefone</td>
  <td>Email</td>
  <td>Tipo Cliente</td>
  <td>Denominação</td>
  <td>Data de registo</td>
  <td>Ultima Atividade</td>
  <td>Status</td>
  <td>Desativar Conta</td>
  <td>Ativar conta</td>
  <td>Editar conta</td>
 </tr>
';
foreach ($result as $row) 
{
  $dad= $row['id'];
  $dad1=$row['desativar'];
  $stat1='

        <form action="php/desativar_conta.php" method="POST">
        <input type="hidden" name="idi" value='.$dad.'><button type="submit" name="ap_btn" style="width:50px; height:50px;"><a class="fas fa-lock" ></a></button></td>
        </form>

  ';
   $stat2='

        <form action="php/ativar_conta.php" method="POST">
        <input type="hidden" name="idi" value='.$dad.'><button type="submit" name="ap_btn1" style="width:50px; height:50px;"><a class="fas fa-unlock" ></a></button></td>
        </form>

  ';
  $stat3='

        <form action="php/edita1.php" method="POST">
        <input type="hidden" name="idi" value='.$dad.'><button type="submit" name="ap_btn2" style="width:50px; height:50px;"><a class="fas fa-edit" ></a></button></td>
        </form>

  ';
  
if ($dad1==1){
  $stat='<br><span class="label label-danger">Disable</span>';
}
else
{
  $stat='<br><span class="label label-success">Enable</span>';
}
  $output .= '
 <tr>
  <td>'.$row['Nome'].'</td>
  <td>'.$row['Telefone'].'</td>
  <td>'.$row['Email'].'</td>
  <td>'.$row['tipo_cliente'].'</td>
  <td>'.$row['denominacao'].'</td>
  <td>'.$row['Data'].'</td>
  <td>'.$row['ultima_atividade'].'</td>
  <td>'.$stat.'</td>
  <td>'.$stat1.'</td>
   <td>'.$stat2.'</td>
 <td>'.$stat3.'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
  