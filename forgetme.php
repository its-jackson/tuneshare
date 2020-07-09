<?php
    session_start();

    header("location:index.php");
    
    // kill session
    session_destroy();
?>