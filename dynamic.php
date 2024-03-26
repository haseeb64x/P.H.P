<?php
      include("config/connect.php");

      if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "insert into users (name , email , password) values
        ('$username' , '$email' , '$password')";

        $result = mysqli_query($conn , $sql);

        if($result == true){
            echo "<br/> Your Record has beeen insterted";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                    </div>

                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>

                    <div class="form-grp">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>

                    <div class="form-grp">
                        <label for="">Select your course</label> <br>
                        <input type="radio" name="course" value="Flutter">Flutter <br>
                        <input type="radio" name="course" value="Python">Python <br>
                        <input type="radio" name="course" value="JAVA">JAVA <br>
                        <input type="radio" name="course" value="NEXT JS">NEXT JS <br>
                    </div>

                    <div class="form-grp">
                        <label for="">Select your course</label> <br>
                        <input type="checkbox" name="food[]" value="FRIES">FRIES <br>
                        <input type="checkbox" name="food[]" value="STEAK">STEAK <br>
                        <input type="checkbox" name="food[]" value="SANDWICH">SANDWICH <br>
                        <input type="checkbox" name="food[]" value="BURGER">BURGER <br>
                    </div>
                    

                        <input type="password" class="form-control" name="passowrd" id="">


                    <button type="submit" value="submit" class="btn btn-dark mt-3" name="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>