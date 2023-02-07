<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dustrinox.Login</title>
  <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 

	<img class="onda" src="./img/outros/onda_azul.png">

	<div class="container"  style="overflow-y: auto;">

		<div class="img">

			<img src="./img/outros/dustrino_img.png">

      
		</div>  
 
		<div class="login_Registar-content"><br>
<br>
			<form action="php/login1.php" method="POST">

				<img src="./img/outros/avatar.svg">

				<h2 class="title">Welcome</h2>
 <?php if (isset($_SESSION['ms'])){echo $_SESSION['ms'];unset($_SESSION['ms']);}?>
      
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>                
           		   		<input type="email" class="input" name="email"required>
           		   </div>
           		</div>
           		<div class="input-div two">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pass" id="pass"  required>
            	   </div>
                
            	</div>
              <input type="checkbox" onclick="showpass()" >&nbsp <i class="far fa-eye">&nbspShow Password</i>
            	<a href="index.php">Voltar</a>
            	<button  type="submit" name="log" class="btn btn-primary" value="Login">Login</button>

             <a class="btn btn-primary" href="Registar.php" role="button">Registar</a>
                     
            </form>
           
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
    <script>
function showpass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
