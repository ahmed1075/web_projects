<?php
session_start();
if(isset($_SESSION['username']))
{

    $conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
$id=$_GET['status'];
$name=$_GET['name'];
$sql=mysqli_query($conn,"DELETE FROM organizer where id='$id'");
if($sql){
    /*$path="organizer/$name";
    
     if(unlink($path)){*/
    ?>
    <script>
    window.alert('Organizer Deleted');
    window.location.href= 'organizer.php';
    </script>
    <?php
     /*}*/
}
else{
    ?>
    <script>
    window.alert('Organizer Not Added');
    window.location.href= 'organizer.php';
    </script>
    <?php
}
}
else{
    header("location:index.php");
  }