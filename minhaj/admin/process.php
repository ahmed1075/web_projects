<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM admin where username='$name' && password='$pass'");
    $count=mysqli_num_rows($sql);
    $row=mysqli_fetch_assoc($sql);
    echo $count;
    if($count==1)
    {
          
            $_SESSION['username']=$name;
            $_SESSION['Password']=$pass;   
            ?>
          <script>
          window.location.href= 'admindash.php';
          </script>
          <?php
    }
          else {
          ?>
          <script>
          window.alert('Wrong email or password');
          window.location.href= 'index.php';
          </script>
          <?php
          }

}
?>