<?php
session_start();
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    $id=$_GET['data'];
    $sql=mysqli_query($conn,"UPDATE fullpaper SET status='paperReject' WHERE stdid='$id'");
    if($sql)
      {?>
        <script>
        window.alert('Paper Rejected');
        window.location.href= 'reviewerdash.php';
        </script>
        <?php
      }else{
        ?>
        <script>
        window.alert('Paper not Rejected');
        window.location.href= 'reviewerdash.php';
        </script>
        <?php
      } 
}
?>