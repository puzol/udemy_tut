<?php 

    $server = "localhost";
    $user = "root";
    $password = "";
    $main_database = "shout_it";

    $database = new mysqli($server, $user, $password, $main_database);

    if($database->connect_error){
        die("Critical fail" . $database->connect_error);
    }
        
?>