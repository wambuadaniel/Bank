<?php require "protect.php";
if(isset($_GET["id"]))
{
    extract($_GET);
    require"connet.php";
    $query="update users set type=$type WHERE id=$id";
    mysqli_query($conn,$query) ;
    header("location:guys.php");

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Issue Loan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

<?php require "nzavbar.php";
if(isset($_GET))


?>

<div class="container" style="margin-top: 70px;">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAMES</th>
                <th>TYPE</th>
            <th>ADMIN</th>
            <th>NORMAL</th>
            <th>DISABLE</th>
        </tr>
        </thead>
        <tbody>





        <?php
        require "connect.php";
        $query="select * from users";
        $result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_assoc($result))
        {
            extract($row);
            echo "<tr>
                     <td>$id</td>
                     <td>$names</td>
                     <td>$type</td>    
                     <td><a class='btn btn-danger'href='guys.php?=$id&type=1'>Make Admin</a></td>
                     <td><a class='btn btn-info'href='guys.php?=$id&type=2'>Make Normal</a></td>
                     <td><a class='btn btn-warning'href='guys.php?=$id&type=3'>Disable</a></td>
                     <td></td>
                     <td></td>
                 </tr>";
        }


        ?>

        </tbody>
    </table>
</div>
</body>
</html>