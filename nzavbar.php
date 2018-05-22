<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="login.php">Micro Bank</a>


        </div>
        <ul class="nav navbar-nav">
            <li><a href="customer.php"><b>New Customer</b></a></li>
            <?php if ($_SESSION["type"]==1): ?>
            <li><a href="register.php">New user</a></li>
            <li><a href="guys.php"> view user</a></li>
            <?php endif;?>
            <li><a href="issue.php">Issue Loans</a></li>
            <li><a href="pending.php">pending loans</a></li>


        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?=$_SESSION["names"]?></a></li>
            <li><a href="logout.php">logout</a></li>

        </ul>
    </div>

</nav>