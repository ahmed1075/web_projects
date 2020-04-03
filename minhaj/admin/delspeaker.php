<?php
session_start();
if(isset($_SESSION['username']))
{
    $conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
$id=$_GET['status'];
$sql=mysqli_query($conn,"DELETE FROM speaker where id='$id'");
if($sql){
    ?>
    <script>
    window.alert('Speaker Deleted');
    window.location.href= 'speaker.php';
    </script>
    <?php
}
else{
    ?>
    <script>
    window.alert('Speaker Not Added');
    window.location.href= 'speaker.php';
    </script>
    <?php
}
}
else{
    header("location:index.php");
  }