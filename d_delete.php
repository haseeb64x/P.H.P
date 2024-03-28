<?php
    include("config/connect.php");

    $Id = $_GET['id'];
    $sql = "delete from users  where id = '$Id'";
    $result = mysqli_query($conn , $sql);

    if($result == true){
        echo "<br> Data Deleted Successfully";
    }else{
        echo "<br>Data not Deleted";
    }
?>