<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dustrinox.Registar</title>
  <meta charset="utf-8">
  <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
  
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="onda" src="./img/outros/onda_azul.png">
	<div class="container" style="overflow-y: auto;">
  
        
		 <div class="img">
      <img src="./img/outros/dustrino_img.png">
    </div> 
		<div class="login_Registar-content" >

			<form action="php/Registar1.php" method="Post">
       <img src="./img/outros/avatar.svg">
				<h2 class="title">Registe-se aqui!</h2>
        <?php
     if (isset($_SESSION['msR'])){
         echo $_SESSION['msR'];
         unset($_SESSION['msR']);
     }
    ?>
           <div class="input-div one">
                 <div class="i">
                  <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Nome</h5>
                    <input type="text" class="input" name="nome" required>
                 </div>
              </div>
             
              <div class="input-div two">
                 <div class="i"> 
                   <i class="fas fa-phone"></i>
                 </div>
                 <div class="div">
                    <h5>Telefone</h5>
                    <input type="tel" class="input" name="tele">
                 </div>
             </div>
              
              

           		<div class="input-div three">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email"  required>
           		   </div>
           		</div>
           		<div class="input-div four">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" id="pass" class="input" name="pass"  required>
            	   </div>
            	</div>
              <input type="checkbox" onclick="showpass('pass')" >&nbsp <i class="far fa-eye">&nbspShow Password</i>
              <div class="input-div five">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Confirmação de Password</h5>
                    <input type="password" class="input" id="passC" name="passC"  required>
                 </div>
              </div>
              <input type="checkbox" onclick="showpass('passC')" >&nbsp <i class="far fa-eye">&nbspShow Password</i> 
               <div class="input-div six">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                <div class="div">
              Tipo de cliente:</div></div>
              <br>
              <input type="radio" name="tipo" id="empresa" value="empresa"required><h3>Empresa</h3><br>
              <input type="radio" name="tipo" id="particular" value="particular"required><h3>Particular</h3><br>


              <div class="input-div six">
                 <div class="i"> 
                   <i class="fas fa-warehouse"></i>
                 </div>
                 <div class="div">
                    <h5>Denominação Social(em caso de empresa)</h5>
                    <input type="text" class="input" id="enome" name="deno">
                 </div>
              </div>
            	
            	<button  type="submit" name="sub" class="btn btn-primary" value="Submeter">Submeter</button>
              <a href="login.php">Voltar</a>
              <br><br>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
function showpass(id) {
  var x = document.getElementById(id);
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
