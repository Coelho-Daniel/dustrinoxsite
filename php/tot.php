<!--<script src="https://kit.fontawesome.com/a81368914c.js"></script>-->
<?php 

include ('conectar.php');

session_start();
/*
$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Total Accounts: </td>
  <td>Total Commum Accounts: </td>
  <td>Total Admins Accounts: </td>
 </tr>
';
  $stat=            $datas = "SELECT id FROM users ORDER BY id";
                    $result = mysqli_query($conectar1, $datas);
                    $row = mysqli_num_rows($result);
                    /echo "<p style='text-align: center; font-size: 300%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";
   
   $stat1=         $datas = "SELECT id FROM users WHERE admin = 0 ORDER BY id";
                    $result = mysqli_query($conectar1, $datas);
                    $row = mysqli_num_rows($result);
                    echo "<p style='text-align: center; font-size: 300%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";

  $stat2=           $datas = "SELECT id FROM users WHERE admin = 1 ORDER BY id";
                    $result = mysqli_query($conectar1, $datas);
                    $row = mysqli_num_rows($result);
                    echo "<p style='text-align: center; font-size: 300%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";
  $output .= '
 <tr>
  <td>'.$stat[$row].'</td>
  <td>'.$stat1[$row].'</td>
  <td>'.$stat2.'</td>
        
 </tr>
 ';

$output .= '</table>';
echo $output;*/
?>


<table class="table table-bordered table-striped">
                <tr>
                    <td style="text-align: center; width: 10%;"> Total Accounts: </td>
                    <td style="text-align: center; width: 10%;"> Total Commum Accounts: </td>
                    <td style="text-align: center; width: 10%;"> Total Admins Accounts: </td>
                    <td style="text-align: center; width: 10%;"> Total Logados: </td>
                </tr>
                <tr>
                    <td> 
                        <?php
                            $datas = "SELECT id FROM users ORDER BY id";
                            $result = mysqli_query($conectar1, $datas);
                            $row = mysqli_num_rows($result);
                            echo "<p style='text-align: center; font-size: 200%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";
                        ?> 
                    </td>
                    <td>
                        <?php
                            $datas = "SELECT id FROM users WHERE admin = 0 ORDER BY id";
                            $result = mysqli_query($conectar1, $datas);
                            $row = mysqli_num_rows($result);
                            echo "<p style='text-align: center; font-size: 200%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";
                        ?>
                    </td>
                    <td> 
                        <?php 
                            $datas = "SELECT id FROM users WHERE admin = 1 ORDER BY id";
                            $result = mysqli_query($conectar1, $datas);
                            $row = mysqli_num_rows($result);
                            echo "<p style='text-align: center; font-size: 200%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";
                        ?> 
                    </td>
                     <td> 
                        <?php                       
                            $row =  $_SESSION['contar'];
                            echo "<p style='text-align: center; font-size: 200%; color: #429CAE; margin-top: 0%; margin-bottom: 0%;'>" . $row . "</p>";
                        ?> 
                    </td>
                </tr>
                </table>