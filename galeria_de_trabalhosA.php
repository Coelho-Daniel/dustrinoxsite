<?php session_start(); 

include "php/verificationA.php"?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta charset="utf-8">
	  <b><title>Dustrinox-Estruturas e Ferragens</title></b>
	  <link rel="stylesheet" type="text/css" href="./css/teste.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

   
</head>
<style>
.p1{
  font-size: 25px;}
</style>
<body>

    <div class="logo">
        <a href="indexA.php"><img class="logo1" src="./img/outros/Dustrinox_logo.png"></a>        
    </div>

<nav class="nav">
<div>


    <div class="main-menu">

   <ul class="navbar">
    <li><a href="homeA.php">Home</a></li>
    <li><a href="nossosServicosA.php">Nossos Serviços</a></li>
    <li><a href="galeria_de_trabalhosA.php">Galeria de trabalhos</a></li>
     <!--<li><a href="formA.php">Formulário</a></li>-->
    <li><a href="dash.php">Dashboard</a></li>
    <li><a href="aboutA.php">About</a></li>
    <li><a  href="https://pt-pt.facebook.com/pages/category/Company/Dustrinox-Lda-748571481948796/" class="fab fa-facebook" size= "5x"></a></li>
    <li class="right"><a href="php/log_out.php">LogOut</a></li>
    <li class="right" style="color: white"><?php echo $_SESSION['login_user']['Nome']; echo ' is Admin';?></li>

 </ul>
    </div>
</div>
</nav>
<main class="fundo">
    <center><h1>Palco Rotativo de 5 Anéis</h1></center>
<center>
      <img id="whoops" src="./img/galeria/palco_Russia.png" alt="palco_Russia align="left">
      <video controls id="vid" >
	  <source src="Vid\Russia_video.mp4" type="video/mp4" >
	  </video>
	</center>
      <br>
        <center><a href="https://www.youtube.com/embed/n9HpjoZd2kc?vq=hd1080&fs=0"><p><b>\ SE QUISER VER O VIDEO NO YOUTUBE CLIQUE AQUI /</b></p></a></center>
        <br>
        <center><p><b>Cliente:</b> Máquinas Ibérica</p>
        <br>
        <p class="p1" > Desenvolvimento do projeto estrutural e respetiva construção e ensaio da estrutura rotativa em perfis de alumínio bruto.</p>
        </center>
        <hr>
    </div>
    </br>
    <div id="bigWhoops">
      <center><h1>Moradia Unifamiliar</h1><b>Cliente:</b> LN Ribeiro Construções Lda.<br></center>
      
      <img id="whoops" src="./img/galeria/moradia_uni_Familiar.PNG" alt="Empreendimento_California" align="left">
      <br><br><p class="p1" align="justify"> Fabrico e montagem de portadas, guarda-corpos, portões, claraboia, portas de armário exteriores e venezianas fixas de alçado principal em ferro decapado metalizado e pintado com aplicação de madeira exótica devidamente tratada.</h3>
    </div><br><hr>
    <br>

     <div id="bigWhoops">
      <center><h1>Empreendimento Mar da Califórnia</h1><b>Cliente:</b> Mar Califórnia, S.A.<br></center>
      <img id="whoops" src="./img/galeria/Empreendimento_California.PNG" alt="Empreendimento_California" align="left">
      <br><br><p class="p1" align="justify"> Fabrico e montagem de guarda-corpos em inox e vidro, sendo o inox de Aisi 316 de acabamento polido (espelho) e vidro laminado temperado 10+10 com butiral de 2mm.<h3>
    </div><br><hr>
    <br>

     <div id="bigWhoops">
      <center><h1>Armazém Virgin</h1><b>Cliente:</b> Eurofenix, S.A.<br></center>
      <img id="whoops"  src="./img/galeria/armazen_virgin.PNG" alt="armazen_virgin" align="left">
      <br><br><p class="p1" align="justify"> Trabalhos de soldadura em chapa Calzipe de 0,6 mm de espessura (alumínio) de cobertura e paramentos de alumínio.<h3>
    </div><br><hr>
    <br>

     <div id="bigWhoops">
      <center><h1>Vivenda Unifamiliar</h1><b>Cliente:</b> Particular<br></center>
      <img id="whoops" src="./img/galeria/moradia_uni_Familiar1.PNG" alt="moradia_uni_Familiar1" align="left">
      <br><br><p class="p1" align="justify"> Fabrico e montagem de guarda-corpos e corrimão para escadas.<h3>
    </div><br><hr>
    <br>
</main>

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