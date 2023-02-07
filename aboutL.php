<?php session_start(); 

include "php/verificationL.php"
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<b><title>Dustrinox-Estruturas e Ferragens</title></b>
	<link rel="stylesheet" type="text/css" href="./css/teste.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
</head>

<body>

    <div class="logo">
        <a href="indexL.php"><img class="logo1" src="./img/outros/Dustrinox_logo.png"></a>        
    </div>

<nav class="nav">
<div>


    <div class="main-menu">

   <ul class="navbar">
    <li><a href="homeL.php">Home</a></li>
    <li><a href="nossosServicosL.php">Nossos Serviços</a></li>
    <li><a href="galeria_de_trabalhosL.php">Galeria de trabalhos</a></li>
    <li><a href="formL.php">Formulário</a></li>
    <li><a href="aboutL.php">About</a></li>
    <li><a href="forum.php">Avaliações</a></li>
    <li><a  href="https://pt-pt.facebook.com/pages/category/Company/Dustrinox-Lda-748571481948796/" class="fab fa-facebook" size= "5x"></a></li>
    <li class="right"><a href="php/log_out.php">LogOut</a></li>
    <a href="editar.php"><li class="right" style="color: white"><?php echo $_SESSION['login_user']['Nome'];?>  </li></a>
    
  </ul>
    </div>
</div>
</nav>

<hr bgcolor="black">
    <br>
 <div align="center" class="logo1"><a href="index.php"><img class="logo1" src="./img/outros/Dustrinox_logo.png"></a></div>
    <br>
 <div align="center">ZONA INDUSTRIAL DA QUINTA DA FIGUEIRA<br>2615 – 682 SOBRALINHO<br>© 2019 Dustrinox, Lda.<br>
 </div>
<hr bgcolor="black">
    <br>
<div align="center"><h1>CONTACTE-NOS</h1></div>
    <br>
<div align="center"><b>Geral:</b> 219 503 065</div>
    <br>
<div align="center"><b>Pedro Silva:</b> 919 827 180<br><b>Paulo Dias:</b> 914 063 704</div>
    <br>
<div align="center"><b>Email:geral@dustrinox.pt</b></div>
<br>
<hr>
<br><br><br>


</body>
 <script>  
$(document).ready(function(){

 fetch_user();

 setInterval(function(){
  update_last_activity();
  fetch_user();
 }, 2000);

 function fetch_user()
 {
  $.ajax({
   url:"php/fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function update_last_activity()
 {
  $.ajax({
   url:"php/update_last_activity.php",
   success:function()
   {

   }
  })
 }
 
});  
</script>
</html>