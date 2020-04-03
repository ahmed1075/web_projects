<?php
session_start();
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM reviewer where email='$name' && password='$pass'");
    $count=mysqli_num_rows($sql);
    $row=mysqli_fetch_assoc($sql);
    if($count==1)
    {
            
            $_SESSION['username']=$name;
            $_SESSION['Password']=$pass;
           ?>
          <script>
          window.location.href= 'reviewerdash.php';
          </script>
          <?php
            exit();
    }
          else {?>
          <script>
          window.alert('Wrong email or password');
          window.location.href= 'index.php';
          </script>
          <?php
          }

}
?>