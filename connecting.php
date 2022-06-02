<?php

    $db = mysqli_connect('localhost','root','','technicup');
        if(!$db){
            exit("Server Error");
        }
    $question = "INSERT INTO jobs (Name, Surname, Corpo, Position, Graduate, Email, Page) VALUES ('".$name."','".$surname."','".$corp."','".$posit."','".$gradu."','".$email."','".$page."')"; 
    $query = mysqli_query($db,$question);
    mysqli_close($db);
    
?>