<?php

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        if($first_name && $last_name){
            header("location: home.php");
        }
    }

    if(isset($_POST['reset'])){
        session_start();

        session_destroy();

        header("location: index.php");
    }

?>