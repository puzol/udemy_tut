<?php 
    include 'database.php';

    //Check if forme is submitted

    if(isset($_POST['submit'])){
        $user = mysqli_real_escape_string($database, $_POST['user']);
        $message = mysqli_real_escape_string($database, $_POST['message']);

        //SET TIMEZONE
        date_default_timezone_set('Europe/Belgrade');
        $time = date('h:i:s a',time());

        if(!isset($user) || $user == '' || !isset($message) || $message == ''){
            echo "bad";
        }else{
            echo "good";
        }
    }
?>