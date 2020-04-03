<?php
session_start();
if(isset($_SESSION['username']))
{

    $conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
$id=$_GET['status'];
$sql=mysqli_query($conn,"DELETE FROM register where id='$id'");
if($sql){
    ?>
    <script>
    window.alert('Student Deleted');
    window.location.href= 'student.php';
    </script>
    <?php
}
else{
    ?>
    <script>
    window.alert('Student Not Deleted');
    window.location.href= 'student.php';
    </script>
    <?php
}
}
else{
    header("location:index.php");
  }