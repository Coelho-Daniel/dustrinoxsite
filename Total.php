<?php session_start(); 

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
        <li><a href="contaResgistada.php">Contas Registadas</a></li>
        <li><a href="contaLog.php">Contas Logadas</a></li>
        <li class="active"><a href="Total.php">Total</a></li>
        <li><a><?php echo "Nome: "; echo $_SESSION['login_user']['Nome'];?></a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <br><br>
     <div id="total"></div>
    </div>
  </div>
</div>

</body>
<script>  
$(document).ready(function(){

 fetch_user();
 tot();
 setInterval(function(){
  update_last_activity();
  fetch_user();
  tot();
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
 
function tot()
 {
  $.ajax({
   url:"php/tot.php",
   method:"POST",
   success:function(data){
    $('#total').html(data);
   }
  })
 }

});  
</script>
</html>

