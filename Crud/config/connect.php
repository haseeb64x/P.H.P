<?php
    $servername = "localHost";
    $username = "root";
    $password = "";
    $dbName = "haseeb56";

    $conn = new mysqli($servername , $username, $password,$dbName);  //create connection
    if ($conn){
        echo "<br/> Connection Sucessful";
    }else{
        echo "<br/> Connection Failed";
    }
?>