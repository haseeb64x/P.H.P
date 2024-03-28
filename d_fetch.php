<?php
    include("config/connect.php");
    $sql = "select * from users";
    $result = mysqli_query($conn , $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <style>
        body {
            background-color: black;
        }
    </style>
</body>
<div class="container">
    <table class="table table-borderd text-white text-center">
       <tr class="bg-primary">
       <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
       </tr>

       <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                 <td>". $row['id']. "</td>
                 <td>". $row['name']. "</td>
                 <td>". $row['email']. "</td>
                 <td>". $row['password']. "</td>
                 <td><a href='d_update.php?id=".$row['id']."'class='btn btn-success'>Edit</a></td>
                 <td><a href='d_delete.php?id=".$row['id']."'class='btn btn-danger'>Delete</a></td>
                 </tr>";
            }
           ?>
    </table>
</div>