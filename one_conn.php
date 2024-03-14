<?php

    include("config/connect.php");

    $sql = "insert into users (name , email , password) values
    ('Dexter' , 'dexter12@gmail.com' , 'dex1234')";

    $result = $conn->query($sql);

    if($result == true){
        echo "<br/> Your Record has beeen insterted";
    }else{
        echo "<br/> No Record insterted";
    }

?>