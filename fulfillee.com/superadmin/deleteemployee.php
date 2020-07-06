<?php
session_start();
include '../admin/connection.php';
if(isset($_SESSION['email']))
{
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"DELETE FROM user WHERE id='$id'");
    if($sql)
    { 
        ?>
        <script>
        window.location.href= 'accountmanage.php';
        </script>
        <?php

    }
    else{
        ?>
        <script>
        window.alert('Employee Not Removed');
        window.location.href= 'accountmanage.php';
        </script>
        <?php
    }
}
else {
          ?>
          <script>
          window.location.href= 'signin.php';
          </script>
        <?php
}
?>