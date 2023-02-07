<?php  

include "php/edita1.php";
include "php/verificationA.php"
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
      <a href="indexA.php"><img class="logo1" style="margin-top: 15px;  margin-left:10px;   width: 200px;  border: 5px;" src="./img/outros/Dustrinox_logo.png"></a>
      <ul class="nav nav-pills nav-stacked" ><br>
        <li  class="active"><a href="contaResgistada.php">Contas Registadas</a></li>
        <li><a href="contaLog.php">Contas Logadas</a></li>
        <li><a href="Total.php">Total</a></li>
       <li><a><?php echo "Nome: "; echo $_SESSION['login_user']['Nome'];?></a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9"  style="overflow-y: auto;">
      <br> <br>
      <center><?php if (isset($_SESSION['statusEdit'])){echo $_SESSION['statusEdit'];unset($_SESSION['statusEdit']);}?></center>
     <div>
       <center><form action="php/edita2.php" method="Post">

      <img style="margin-top: 15px;  margin-left:10px;   width: 200px;  border: 5px;" src="./img/outros/avatar.svg" >

        <h2 class="title">Edite o usuario aqui!</h2>

           <div class="input-div one">
                 <div class="i">
                  <i class="fas fa-user"></i>
                 </div>

                 <div class="div">
                    <h5>Nome</h5>
                    <input type="text" class="input" name="nome" placeholder="nome" value="<?php echo $_SESSION['edit_usuario']['Nome']?>">
                 </div>
              </div>
             
              <div class="input-div two">
                 <div class="i"> 
                   <i class="fas fa-phone"></i>
                 </div>
                 <div class="div">
                    <h5>Telefone</h5>
                    <input type="tel" class="input" name="tele" value="<?php echo $_SESSION['edit_usuario']['Telefone']?>">
                 </div>
             </div>
              
              

              <div class="input-div three">
                 <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                 <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" name="email"  value="<?php echo $_SESSION['edit_usuario']['Email']?>">
                 </div>
              </div>
              <!--
              <div class="input-div four">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" id="pass" class="input" name="pass" placeholder="Insira a pass nova!" value="<?php //echo $_SESSION['edit_usuario']['Password']?>">
                 </div>
              </div>
               <input type="checkbox" onclick="showpass('pass')" >&nbsp <i class="far fa-eye" >&nbspShow Password</i>
              <div class="input-div five">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Confirmação de Password</h5>
                    <input type="password" class="input" id="passC" name="passC" placeholder="Confira a pass nova!" value="<?php //echo $_SESSION['edit_usuario']['Password']?>" required>
                 </div>
              </div>
              <input type="checkbox" onclick="showpass('passC')" >&nbsp <i class="far fa-eye">&nbspShow Password</i> 
-->
               <div class="input-div six">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                <div class="div">
              Tipo de cliente:</div></div>
              <br>
              <?php
               if ($_SESSION['edit_usuario']['tipo_cliente']== 'empresa') 
               {


              ?>
              <input type="radio" name="tipo" id="empresa" value="empresa" checked><h3>Empresa</h3><br>
              <input type="radio" name="tipo" id="particular" value="particular"><h3>Particular</h3><br>
              <?php }
              else
              {


              ?>
              <input type="radio" name="tipo" id="empresa" value="empresa" ><h3>Empresa</h3><br>
              <input type="radio" name="tipo" id="particular" value="particular" checked><h3>Particular</h3><br>
            <?php }?>
              <div class="input-div six">
                 <div class="i"> 
                   <i class="fas fa-warehouse"></i>
                 </div>
                 <div class="div">
                    <h5>Denominação Social(em caso de empresa)</h5>
                    <input type="text" class="input" id="enome" name="deno" value="<?php echo $_SESSION['edit_usuario']['denominacao']?>">
                 </div>
              </div>
              <br>
              <button  type="submit" name="sub" class="btn btn-primary" value="Submeter">Submeter</button>
              
              <br><br>
            </form>
            </center>
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













     </div>

    </div>
    </div>
</div>


</body>
 
</html>

