<?php
session_start();

$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    $id=$_GET['status'];
    $sql=mysqli_query($conn,"DELETE from reviewer where id='$id'");
    header("location:reviewer.php");
}
else{
    header("location:index.php");
}