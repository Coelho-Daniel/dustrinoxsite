<?php session_start(); 

include "php/verificationL.php"?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <b><title>Dustrinox-Estruturas e Ferragens</title></b>
    <link rel="stylesheet" type="text/css" href="./css/teste.css">
    <link rel="stylesheet" type="text/css" href="./css/logos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    <a href="editar.php"><li class="right" style="color: white"><?php echo $_SESSION['login_user']['Nome'];?></li></a>
    

   </ul>
    </div>
</div>
</nav>

<audio id="demo1" src="./audio/n2.mp3"></audio>
<div align="center">
  <button class="but" onclick="document.getElementById('demo1').play()">Reproduzir o áudio</button>
  <button class ="but "onclick="document.getElementById('demo1').pause()">Pausar o áudio</button>
</div> 

<main class="fundo">
    <br>
    <!--<div class="o_que_fazemos">!-->
        <center><img  src="./img/home/o que fazemos.JPG" class="o_que_fazemos"></center>

    <h1>O que fazemos?</h1>
    <p align="justify">A DUSTRINOX foi fundada em Setembro de 2001, com o objectivo de desenvolver a sua actividade no fabrico e montagem de serralharias de aço inox e ferro para incorporação no sector da construção civil.</p>

<p align="justify">Apostando numa eficiente organização interna, alicerçada no desempenho dos seus quadros e das novas técnicas conseguiu alcançar um lugar de algum destaque entre as empresas do ramo.</p>

<p align="justify">Decididamente voltada para o futuro a Dustrinox utiliza as tecnologias mais modernas, para desenvolver uma gama de produtos mais evoluídos, respondendo aos desafios do presente e do futuro permitindo-lhe assim uma capacidade produtiva acima da média.</p>

<p align="justify">Todas as soluções apresentadas aos nossos clientes são criadas com base nas tendências mais modernas o que permite oferecer soluções versáteis de grande qualidade e esteticamente atraentes.</p>

<p align="justify">Pelo tipo de trabalho executado a empresa entendeu ser política de qualidade dividir as áreas de fabrico do aço inox e ferro. Desta forma a condução dos diferentes sectores em espaços físicos e ambientes diferentes, permite o aumento da eficiência e qualidade do produto acabado e consequentemente o grau de satisfação dos clientes.</p>

<p align="justify">Os nossos principais clientes se dividem pela área da construção civil, metalomecânica, catering, restauração e hotelaria, farmácia, alimentar e decoração de interiores. Entre elas podemos distinguir:</p>

<p align="justify">Cateringpor S.A. • Eurofrozen• Obriverca S.A. • Omnitrade S.A.• Eurofénix S.A. • Monumenta Lda.• Neopul •Eurofrutas S.A.• France Air • Edinvil• Sotécnica •EC Build• Confiarq-Engenharia e Construções, Lda.• Zublin – ZPC, Lda. •Engiclass, Lda.• Engavac, Lda. •FCM – Construções S.A.</p>
<hr>
<h1>Como fazemos?</h1>

<table>
<center>
         <tr >
    <th>
    	<div class="container">
        <img src="./img/home/definicoes.png" alt="Tecnologia" class="image">
        <div class="middle">
        <div class="text"><h1 class="logos">Com tecnologia:</h1></div> 
        </div>
        </div>
        
 </th>
    <th><p>A Dustrinox utiliza as mais modernas tecnologias de forma a poder oferecer aos nossos clientes uma gama de produtos mais evoluídos e de qualidade.</p></th>     </tr>

    <th>
        <div class="container">
        <img src="./img/home/Expecializacao.png" alt="Tecnologia" class="image">
        <div class="middle">
        <div class="text"><h1 class="logos">Com expecialização:</h1></div> 
        </div>
        </div>
       </th>
    <th><p>Emprega cerca de 10 funcionários, divididos pelas diferentes áreas técnica, de produção e Administrativa.</p></th>
        
         <tr>
    <th>
        <div class="container">
        <img src="./img/home/Com Experiencia.png" alt="Tecnologia" class="image">
        <div class="middle">
        <div class="text"><h1 class="logos">Com experência:</h1></div> 
        </div>
        </div>
        </th>
    <th><p>Conta com a colaboração de algumas firmas ligadas no sector da carpintaria, vidraceiro e automatismos, permitindo-nos oferecer um trabalho completo de qualidade.</p></th>
         </tr>

    
    </center>
</table>
</main>

<br>
<br>
    
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
</body>
 
</html>