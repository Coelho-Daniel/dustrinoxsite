<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <link rel="icon" href="./img/outros/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <b><title>Dustrinox-Estruturas e Ferragens</title></b>
    <link rel="stylesheet" type="text/css" href="./css/teste.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
</head>

<body>

    <div class="logo">
        <a href="index.php"><img class="logo1" src="./img/outros/Dustrinox_logo.png"></a>        
    </div>

<nav class="nav">
<div>


    <div class="main-menu">

   <ul class="navbar">
    <li><a href="home.php">Home</a></li>
    <li><a href="nossosServicos.php">Nossos Serviços</a></li>
    <li><a href="galeria_de_trabalhos.php">Galeria de trabalhos</a></li>
    <li><a href="form.php">Formulário</a></li>
    <li><a href="about.php">About</a></li>
    <li><a  href="https://pt-pt.facebook.com/pages/category/Company/Dustrinox-Lda-748571481948796/" class="fab fa-facebook" size= "5x"></a></li>
    <li class="right"><a href="Registar.php">Registar</a></li>
    <li class="right"><a href="Login.php">Login</a></li>  
    
     </ul>
    </div>
</div>
</nav>
<main>

    <center><h1>Precisa dos nossos Serviços?</center></h1><br>
            <h2>Por favor preencha este Formulário:</h2>
<div class="form">
  <form action="php/enviar_formulario.php" class="formulario" method="POST">

<!--
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" placeholder="Digite o seu nome... "required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" placeholder="Numero..."required>
    <br>

    <label for="cliente">Tipo de cliente:</label>
    <br>
    <input type="radio" name="tipo" id="empresa" value="empresa"required>Empresa<br>
    <input type="radio" name="tipo" id="particular" value="particular"required>Particular<br>

    <label for="enome">Denominação Social(em caso de empresa)</label>
    <input type="text" id="enome" name="deno" placeholder="Campo opcional...">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Escreva aqui o seu email..."required>
-->
  <label for="messagem">Ecreva a Mensagem</label>
  <textarea name="mensagem" id="mensagem" placeholder="Escreva aqui a sua mesagem..."required></textarea>

  
    <center><input type="submit" name="submit" value="Enviar"></center>
  </form>


</div></main>
</body>
</html>