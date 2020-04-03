<?php

$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
$id=$_GET['status'];
$sql=mysqli_query($conn,"DELETE FROM contact where id='$id'");
if($sql)
{
        ?>
        <script>
        window.alert('Record Deleted');
        window.location.href= 'message.php';
        </script>
        <?php
}
else{
    ?>
        <script>
        window.alert('Record not Deleted');
        window.location.href= 'message.php';
        </script>
        <?php
}
?>