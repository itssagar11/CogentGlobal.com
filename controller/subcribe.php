<?php
require("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email= mysqli_real_escape_string($conn,$_POST["email"]);
    $sql= "INSERT into cpgent.subscribe(email) VALUES('$email')";
    if(mysqli_query($conn,$sql)){
        echo '1';
       }else{
        echo '0';
       } 
}



?>