<?php

    if(empty($_SESSION['login_email'])) {
        header("location:php/alertL.php");
    }
    
?>