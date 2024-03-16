<?php
     echo "<pre>";
     print_r($_POST);
     echo "</pre>";

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
                        <input type="password" class="form-control" name="passowrd" id="">
                    </div>

                    <button type="submit" value="submit" class="btn btn-dark mt-3" name="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>