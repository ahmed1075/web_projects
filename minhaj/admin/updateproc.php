<?php
session_start();
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    if(isset($_POST['update']))
    {
        $bronze=$_POST['Bronze'];
        $silver=$_POST['Silver'];
        $gold=$_POST['Gold'];
        $platinum=$_POST['Platinum'];
        $sql=mysqli_query($conn,"UPDATE price SET bronze='$bronze',silver='$silver',gold='$gold',platinum='$platinum'");
        if($sql)
        {
            ?>
    <script>
        window.alert("Data Updated");
         window.location.href= 'admindash.php';
         </script>
<?php
        }
        else{
            ?>
    <script>
        window.alert("Data not Updated");
         window.location.href= 'updateprice.php';
         </script>
<?php
        }




    }
}
else{
    ?>
    <script>
         window.location.href= 'index.php';
         </script>
<?php
}
?>