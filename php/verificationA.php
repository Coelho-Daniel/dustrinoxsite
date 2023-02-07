<?php

    if(empty($_SESSION['login_admin'])) {
        header("location:php/alertA.php");
        session_destroy();
    }

    
?>