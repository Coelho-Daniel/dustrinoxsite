
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<link rel="shortcut icon" href="./img/outros/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<b><title>Dustrinox-Estruturas e Ferragens</title></b>
	
    <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="apresentacao.css">
    <link rel="stylesheet" type="text/css" href="./css/teste.css">
    <link rel="stylesheet" type="text/css" href="./css/logos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <!--<a href="indexL.php">carrega crl</a>-->
</head>

<style>
  .but{
  align-self: center;
  height:50px;
  width: 140px;
}
body {
background-color: lightblue;
}
</style>
<body>



	<div class="logo">
		<a href="index.php"><img class="logo1" src="./img/outros/Dustrinox_logo.png"></a>        
    </div>

<nav class="nav" style="
    height: 80px;">
<div>


    <div class="main-menu">

   <ul class="navbar">
    <li><a href="home.php">Home</a></li>
    <li><a href="nossosServicos.php">Nossos Serviços</a></li>
    <li><a href="galeria_de_trabalhos.php">Galeria de trabalhos</a></li>
    <!--<li><a href="form.php">Formulário</a></li>-->
    <li><a href="about.php">About</a></li>
    <li><a  href="https://pt-pt.facebook.com/pages/category/Company/Dustrinox-Lda-748571481948796/" class="fab fa-facebook" size= "5x"></a></li>
    <li class="right"><a href="Registar.php">Registar</a></li>
    <li class="right"><a href="Login.php">Login</a></li>
   </ul>
    </div>
</div>
</nav>

<div class="container"> 

  <audio id="./audio/demo1" src="n1.mp3"></audio>
<div align="center">
  <button class= "but"onclick="document.getElementById('demo1').play()">Reproduzir o áudio</button>
  <button class="but"onclick="document.getElementById('demo1').pause()">Pausar o áudio</button>
</div> 

  <h1>Bem vindo ao Site da Dustrinox</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="d-block w-100" src="./img/index/img1.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3 >     Portadas</h3>
        </div>
      </div>

      <div class="item">
        <img class="d-block w-100" src="./img/index/img2.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3 >     Teto Neospace</h3>
        </div>
      </div>
    
      <div class="item">
        <img class="d-block w-100" src="./img/index/img3.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3 >Passa mãos em inox</h3>
        </div>
      </div>
   
    
    <div class="item">
        <img class="d-block w-100" src="./img/index/img4.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3 >    Palco Rotativo</h3>
          <p >              Russia</p>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br><br>
</body>
</html>