<?php
$message="";
if(isset($_POST["email"]))
{
    require "connect.php";
    extract($_POST);
   $query="select * from users where email='$email'and password='$password'and type!=3";

   $result= mysqli_query($conn,$query) or die (mysqli_error($conn));
$count=mysqli_num_rows($result);
if($count==1)
{
    // success
    $row=mysqli_fetch_assoc($result);
    extract($row);
    session_start();
    $_SESSION["names"]=$names;
    $_SESSION["type"]=$type;
    header("location:issue.php");
}
else{
    $message="<p class='text-danger'>Wrong Email or Password</p>";
}

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bank</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            width:100%;
            height:100%;

        }
        .container{
            height:100vh;
            display:flex;
            align-content: center;
            align-items:center;

        }



    </style>

</head>
<body>

<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <img src="img/pep.jpg" class="img-circle" style="height:250px ;
width: 250px;" alt="">
  <?=$message?>
        <form action="login.php" method="post">
            <div class="form-group">

                <p>Email :</p>
                <input type="text" name="email" class="form-control"  >
            </div>

            <div class="form-group">
                <p>Password:</p>
                <input type="password" name="password" class="form-control"  >
            </div>
            <button class="btn btn-success btn-block" type="submit">submit</button>
        </form>
    </div>
</div>
</body>
</html><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bank</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            width:100%;
            height:100%;

        }
        .container{
            height:100vh;
            display:flex;
            align-content: center;
            align-items:center;

        }



    </style>

</head>
<body>
<?php require "nzavbar.php"?>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <img src="img/pep.jpg" class="img-circle" style="height:250px ;
width: 250px;" alt="">
        <?=$message?>
        <form action="" method="post">
            <div class="form-group">
                <p>ID Number:</p>
                <input type="number" name="natid" class="form-control"  >
            </div>
            <div class="form-group">
                <p>Name :</p>
                <input type="text" name="names" class="form-control"  >
            </div>

            <div class="form-group">
                <p>Phone number:</p>
                <input type="text" name="phone" class="form-control"  >
            </div>
            <button class="btn btn-success btn-block" type="submit">submit</button>
        </form>
    </div>
</div>
</body>
</html>
