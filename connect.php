<?php
$conn = mysqli_connect("localhost","root","","bank");
if(!$conn){
    die("Failed to connect to the database");

}