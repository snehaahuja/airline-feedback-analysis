<?php
   session_start();
    if(isset($_POST['sub']))
    {
            unset($_SESSION['login_admin']);
            session_cache_expire();
            session_destroy();
            header("location: welcomemain.html");
        
    }

?>