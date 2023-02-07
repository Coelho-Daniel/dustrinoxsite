<?php

$contar = 0;
include('conectar.php');

session_start();

$query = "
SELECT * FROM users

";

 $result = mysqli_query($conectar1, $query);

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Username</td>
  <td>Status</td>
  
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '-1 hour -10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = $row['ultima_atividade'];
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
  $contar = $contar + 1;
  $json = json_decode($contar, true);
  $_SESSION['contar'] = $json;
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';

 }
 $output .= '
 <tr>
  <td>'.$row['Nome'].'</td>
  <td>'.$status.'</td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;
?>
