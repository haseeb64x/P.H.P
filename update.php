<?php
    include("config/connect.php");

    $sql = "Update Users set Name = 'Shapatar Man' where id = 2";
    $result =$conn->query($sql);

    if($result == true){
        echo "<br> Data Updated Successfully";

    }else{
        echo "<br>Data not Updated";
    }
?>