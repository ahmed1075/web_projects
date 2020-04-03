<?php
session_start();
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    if(isset($_POST['submit']))
    {
        $bronze=$_POST['Bronze'];
        $silver=$_POST['Silver'];
        $gold=$_POST['Gold'];
        $platinum=$_POST['Platinum'];
        $sql=mysqli_query($conn,"INSERT INTO price(bronze,silver,gold,platinum) VALUES('$bronze','$silver','$gold','$platinum')");
        if($sql)
        {
            ?>
    <script>
        window.alert("Data Inserted");
         window.location.href= 'admindash.php';
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