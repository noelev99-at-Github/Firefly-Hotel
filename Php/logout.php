<?php
    //DESTROYS THE SESSION AND RETURNS TO homepage.php file
    session_start();
    if(session_destroy()){
        header("location: ../homepage.php");
    }
?>