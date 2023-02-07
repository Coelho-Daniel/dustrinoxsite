<?php session_start(); 
include "php/verificationL.php"
?>
<!DOCTYPE html>
<html lang="en"><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
 
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #3f48cc;
      height: 100%;
      
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;

      }
      .row.content {height: auto;} 
    }

 body {


 background-color: lightblue;

    padding:0px 0px;

    margin:auto;

    line-height: 1.5;

} 
  </style>
</head>
<body>

<div class="container-fluid" >
  <div class="row content">
    <div class="col-sm-3 sidenav" style="background-color:black;" >
      <a href="indexL.php"><img class="logo1" style="margin-top: 15px;  margin-left:10px;   width: 200px;  border: 5px;" src="./img/outros/Dustrinox_logo.png"></a>
      <ul class="nav nav-pills nav-stacked" ><br>
         <li  ><a href="editar.php">Editar dados de utilizador</a></li>
        <li class="active"><a href="eliminar.php">Eliminar conta</a></li>
       <li><a><?php echo "Nome: "; echo $_SESSION['login_user']['Nome'];?></a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9"  style="overflow-y: auto;">
      <br> <br>
      <center><?php if (isset($_SESSION['elimin'])){echo $_SESSION['elimin'];unset($_SESSION['elimin']);}?></center>
    </div>
    
    

    <center>  <h1> Eliminar Conta de Utilizador</h1>
    <br>
    <br>
    <?php


  $eli= $_SESSION['login_user']['id'];

  $eliminar='
        <form action="php/eliminarPHP.php" method="POST">
        <input type="hidden" name="ide" value='.$eli.'><button type="submit" name="eli_btn" style="width:500px; height:100px;"><a class="fas fa-trash-alt" ></a></button></td>
        </form>
  ';
  echo $eliminar;
?>

</center>

  </div>
</div>
</body>
</html>