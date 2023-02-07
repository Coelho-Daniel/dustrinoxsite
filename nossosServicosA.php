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
<body>
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
    <div id="bigWhoops">
      <img id="whoops" src="./img/nossos/Esmerelamento.JPG" alt="Esmerelamento" align="left">
      <h1>Esmerilamento e polimento em aço inox:</h1><br><p align="justify">Em tubos redondos com o mínimo de (diâmetro) Ø5mm e o máximo de (diâmetro) Ø104mm num comprimento mínimo de 500mm e ainda tubos já curvados com um raio mínimo de 80mm.<br>Para barras a espessura mínima é de 1mm por 200mm de largura num comprimento mínimo de 300mm.<br>Tubos quadrados e rectangulares, varão quadrado e perfis estruturais vão de 6x6mm até 200mm.</p>
    </div>
    </br>
    <div id="bigWhoops">
      <img id="whoops" src="./img/nossos/corte.JPG" alt="corte" align="left">
      <h1>Corte em chapa até 3000mm de comprimento:</h1><br><p align="justify">Em aço inox até uma espessura máxima de 10mm.<br>Em ferro até uma espessura de 13mm.</p>
    </div>
    <br>
    <div id="bigWhoops">
      <img id="whoops" src="./img/nossos/quinagem.JPG" alt="quinagem" align="left">
      <h1>Quinagem em chapa de aço inox e ferro:</h1><br><p align="justify">Num comprimento máximo de 4000mm até uma espessura de 10mm.</p>
    </div>
    <br>
    <div id="bigWhoops">
      <img id="whoops" src="./img/nossos/serralheria.JPG" alt="serralheria" align="left">
      <h1>Serralharia geral:</h1><br><p align="justify">Na área de fabrico e montagem todos os produtos a ela inerentes.</p>
    </div>


    <!---
    <table>
  <tr>
    <th><center><img src="servicos/Esmerelamento.jpg" alt="Esmerelamento" width="567" height="320"></center></th>
    <th><center><br><h1>Esmerilamento e polimento em aço inox:</h1><br><p>Em tubos redondos com o mínimo de (diâmetro)Ø5mm e o máximo de (diâmetro)Ø104mm num comprimento mínimo de 500mm e ainda tubos já curvados com um raio mínimo de 80mm.<br>Para barras a espessura mínima é de 1mm por 200mm de largura num comprimento mínimo de 300mm.<br>Tubos quadrados e rectangulares, varão quadrado e perfis estruturais vão de 6x6mm até 200mm.<p><br><br></th>

  </tr>
  <tr>
    <th><center><img src="servicos/corte.jpg" alt="corte" width="567" height="320"></center></th>
    <th><center><br><h1>Corte em chapa até 3000mm de comprimento:</h1><br><p>Em aço inox até uma espessura máxima de 10mm.<br>Em ferro até uma espessura de 13mm.<p><br><br></th>

  </tr>
  <tr>
      <th><center><img src="servicos/quinagem.jpg" alt="quinagem" width="567" height="320"></center></th>
    <th><center><br><h1>Quinagem em chapa de aço inox e ferro:</h1><br><p>Num comprimento máximo de 4000mm até uma espessura de 10mm.<p><br><br></th>     
  </tr>

  <tr>
    <th><center><img src="servicos/serralheria.jpg" alt="serralheria" width="567" height="320"></center></th>
    <th><center><br><h1>Serralharia geral:</h1><br><p>Na área de fabrico e montagem todos os produtos a ela inerentes.<p><br><br></th>

  </tr>
  </table>
  --->
  </main>

<br>
<br>

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