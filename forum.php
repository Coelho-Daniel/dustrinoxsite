<?php session_start(); 

include "php/verificationL.php";
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<b><title>Dustrinox-Estruturas e Ferragens</title></b>
	<link rel="stylesheet" type="text/css" href="./css/teste.css">
   <link rel="stylesheet" href="./css/estrela.css">
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
<center>
<form action="php/forum1.php" method="POST">

        <h2 class="title">Avaliações</h2>
 <?php if (isset($_SESSION['for'])){echo $_SESSION['for'];unset($_SESSION['for']);}?>
      
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                 <div class="div">
                    <input type='text' name='id_user' style='display:none;' class='id_user' value="<?php echo $_SESSION['login_user']['id'];?>">
                 </div>
              </div>
              <div class="input-div two">
                 <div class="i"> 
                    <!--<i class="fas fa-lock"></i>-->
                 </div>
                 <div class="div">
                    <h5>Titulo</h5>
                    <input type="Titulo" class="input" name="Titulo" id="Titulo"  >
                 </div>
                <div class="input-div two">
                 <div class="i"> 
                    <!--<i class="fas fa-lock"></i>-->
                 </div>
                 <div class="div">
                    <h5>Comentario</h5>
                    <textarea type="Comentario" class="input" name="Comentario" id="Comentario" maxlength="30"></textarea>
                 </div>
              </div>
              <div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
			</div>
               
               <br>
              <button  type="submit" name="ins" class="btn btn-primary" value="concluir">concluir</button><br>  
            </form></center>
<?php 
include 'php/conectar.php'; 



  $sql = "select comentários.id, comentários.`Data`, comentários.`Titulo`,comentários.`comentario`, comentários.`estrela`, comentários.`id_user`, users.Nome  from comentários, users where comentários.id_user = users.id";
  $result = $conectar1->query($sql);

  //var_dump($result);//
  
  if ($result->num_rows > 0) {
  echo '<div class="container">';

    // output data of each row
    while ($row = $result->fetch_assoc()) {

      $nome = $row["Nome"];
      $Titulo = $row["Titulo"];
      $Comentario = $row["comentario"];
      $estrela = $row["estrela"];
      $dad = $row["id"];
      $_SESSION['editar']=$row;
      $dad1 = $row["id_user"];
      $dad3 = $_SESSION['login_user']['id'];
      
      If ($estrela==0)
      {
         $valorEstrela = "vazio";
      }
      elseif ($estrela==1){
         $valorEstrela = "estrela_um";
      }
      elseif ($estrela==2){
         $valorEstrela = "estrela_dois";
      }
      elseif ($estrela==3){
         $valorEstrela = "estrela_tres";
      }
      elseif ($estrela==4){
         $valorEstrela = "estrela_quatro";
      }
      elseif ($estrela==5){
         $valorEstrela = "estrela_cinco";
         
      }

      echo "<div class='row'>
              <p class='Nome'> Nome do user: $nome </p>           
              <p class='titulo'> Titulo: $Titulo </p>
              <p class='comentario'> Comentário: $Comentario </p>
              <div class='estrela'>
              <p class='estrela'> Avaliação: $estrela</p>
              <div class='estrelas'>
              <label for='estrela_um'><i class='fa'></i></label>
				  <input type='radio' id='estrela_um' name='estrela' value='1'>
              </div>
              </div>
   ";
   if ($dad1 == $dad3)
      {
            $stat='
            <div class="object">
            <form action="php/forum1.php" method="POST">
               <input type="hidden" name="ide" value='.$dad.'>
               <button type="submit" name="eli" style="width:50px; height:50px;"><a class="fas fa-trash" ></a></button></input></td>
            </form>
            
            <form action="forum2.php" method="POST">
            <input type="hidden" name="idei" value='.$dad.'>
            <input type="hidden" name="titulo" value="'.$Titulo.'">
            <input type="hidden" name="comentario" value="'.$row["comentario"].'">
            <input type="hidden" id="'.$valorEstrela.'" name="estrela" value="'.$estrela.'">
            <button type="submit" name="edi" style="width:50px; height:50px;"><a class="fas fa-edit" ></a></button></input></td>
            </form>
            </div>
      ';
      echo $stat;
      }
      echo'</div>';
            }

            
echo'</div>';
}
?>

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