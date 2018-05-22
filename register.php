<?php require "protect.php";
if($_SESSION["type"] !=1)
{
    echo "<h1>You are not allowed to see the page</h1>";
    die();

}



$message = '';
if (isset($_POST['names'])) {
    require "connect.php";
    extract($_POST);
    $query = "insert into users values(null,'$names','$email','$password',2)";
    $result = mysqli_query($conn, $query);//or die(mysqli_error($conn));
    if ($result)
        $message = "<h4 class='text-primary text-center'>Registered successfully</h4>";
    else
        $message = "<h4 class='text-danger text-center'>This already exists</h4>";

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
        body {
            width: 100%;
            height: 100%;

        }

        .container {
            height: 100vh;
            display: flex;
            align-content: center;
            align-items: center;

        }


    </style>

</head>
<body>
<?php require "nzavbar.php"; ?>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <img src="img/mor.jpg" class="img-circle" style="height:250px ;
width: 250px;" alt="">
        <?=$message?>
        <form action="" method="post">
            <div class="form-group">
                <p>Name:<span class="glyphicon glyphicon-user"></span></p>
                <input type="text" name="names" class="form-control">
            </div>
            <div class="form-group">
                <p>email:<span class="glyphicon glyphicon-envelope"></span></p>
                <input type="text" name="email" id="username" class="form-control">
            </div>

            <div class="form-group">
                Password:
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-success btn-block" type="submit">submit</button>
        </form>


    </div>

</div>

</body>
</html>