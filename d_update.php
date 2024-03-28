<?php
    include("config/connect.php");

    $Id = $_GET['id'];
    $sql = "update users set name = 'Jack' where id = '$Id'";
    $result = mysqli_query($conn , $sql);

    if($result == true){
        echo "<br> Data Updated Successfully";
    }else{
        echo "<br>Data not Updated";
    }
?>