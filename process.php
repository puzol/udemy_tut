<?php 
    include 'database.php';

    //Check if form is submitted
/*
    if(isset($_POST['submit'])){
        $user = mysqli_real_escape_string($database, $_POST['user']);
        $message = mysqli_real_escape_string($database, $_POST['message']);

        //SET TIMEZONE
        date_default_timezone_set('Europe/Belgrade');
        $time = date('h:i:s a',time());

        if(!isset($user) || $user == '' || !isset($message) || $message == ''){
            echo "bad";
        }else{
            $query = "INSERT INTO shouts (user, message, time)
            VALUES ('$user', '$message', '$time')";

            if(!mysqli_query($database, $query)){
                die('error'.mysqli_error($database));
            }else{
                header("Location: index.php");
                exit();
            }
        }
    }
    */

    if(isset($_POST['submit'])){


        $user = $_POST['user'];
        $message = $_POST['message'];
        date_default_timezone_set('Europe/Belgrade');
        $time = date('h:i:s a',time());
        $length = strlen($message);
    

        $sql = "INSERT INTO shouts (user, message, time)
        VALUES ('$user', '$message', '$time')";
    
        if(!mysqli_query($database, $sql)){
            echo "NO!";
        }
        else{
            header('location:index.php');
            echo $length;
        }
    }
 
    /*
    if($length > 10){
        ?><p class="manja"></p> <?php
    }
    else{
        ?><p class="veca"></p><?php
    }
      */  

?>