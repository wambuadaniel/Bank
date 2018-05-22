<?php
 if (isset($_GET["names"])){
     extract($_GET);//
 }

 if (isset($_POST["amount"]))
 {
     extract($_POST);
     require "connect.php";
     $balance = $amount * 1.3;
     $date_borrowed= date("Y-m-d");
     $query="insert into loans values
        (null,$customer_id,$amount,'$date_borrowed',$balance)";

     $result= mysqli_query($conn,$query)or die(mysqli_error($conn));
     header("location:issue.php");

 }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Loan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

<?php require "nzavbar.php"?>

<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <p class="text-center">
            <span class="glyphicon glyphicon-user"></span>
        </p>
        <p class="text-center">Issue Loan To <?=$names?> </p>
        <form role="form" method="post" action="process.php">
            <div class="form-group">
                <label for="email">Enter Loan Amount</label>
                <input type="number" name="amount" required class="form-control" id="email">
            </div>
            <input type="hidden" name="customer_id" value="<?=$customer_id?>">
            <button type="submit" class="btn btn-info btn-block">Issue Loan</button>
        </form>
    </div>
</div>
</body>
</html>