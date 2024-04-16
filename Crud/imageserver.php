<?php
     include("config/connect.php");

     if(isset($_POST['submit'])){
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $image = $_FILES['image']['name'];

         $sql = "insert into image (username , email, password ,image) values 
         ('$username' , '$email' , '$password' , '$image')";
         $result = mysqli_query($conn, $sql);
         if($result == true){
             echo "<br> Your record has been inserted";
         }

         if(isset($_FILES['image'])){
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];

            move_uploaded_file($file_tmp , "image/" .$file_name);
         }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control ">
                    </div>

                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control ">
                    </div>

                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control ">
                    </div>

                    <div class="form-grp">
                        <label for="">Select your Image</label>
                        <input type="file" name="image" class="form-control ">
                    </div>

                    <input type="submit" value="submit" name="submit" class="btn btn-success mt-3">
                </form>
            </div>
            <div class="col-lg-6">
                <?php
                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";

                    echo "<pre>";
                    print_r($_FILES);
                    echo "</pre>";

                ?>
            </div>
        </div>
    </div>
</body>
</html>