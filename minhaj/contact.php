<?php
$conn=mysqli_connect("localhost","leadsdev","digital@#$%123","leadsdev_minhaj");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['massage'];
    $sql=mysqli_query($conn,"INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')");
    if($sql)
    {
        ?>
        <script>
            window.alert('Record Saved');
            window.location.href= 'index.php';
        </script>
        <?php
    }
    else{
         ?>
        <script>
            window.alert('Record not Saved');
            window.location.href= 'index.php';
        </script>
        <?php
    }
    }
   
?>