<?php
session_start();
include "connection.php";
if(isset($_SESSION['email']))
{
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"DELETE FROM sourcing WHERE id='$id'");
    if($sql)
    { 
        ?>
        <script>
        window.location.href= 'sourcing.php';
        </script>
        <?php

    }
    else{
        ?>
        <script>
        window.alert('Source Not Removed');
        window.location.href= 'sourcing.php';
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