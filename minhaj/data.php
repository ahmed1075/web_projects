<?php
session_start();
include 'core/header.html';
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_POST['submit']))
{
    //Variables
    $fn=$_POST['first_name'];
    $ln=$_POST['last_name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $contact=$_POST['contact_no'];
    $company=$_POST['company'];
    $country=$_POST['country'];

    $check="SELECT * FROM register WHERE email='$email'";
    $query3=mysqli_query($conn,$check);
    $result=mysqli_num_rows($query3);
    if($result>=1)
    {echo "This Email already exist";
    ?><br>
<input type="button" class="btn btn-danger btn-style-2" onclick="window.location='login.php'" value="Back">
    <?php
    }else{
    
    //Check
         if($pass!=$cpass){
                    echo "Your password not same!";
                    header('location:register.php');
         }
         else{
    //Insert Query
    $sql1="INSERT INTO register(firstName,lastName,email,password,contactno,company,country) VALUES('$fn','$ln','$email','$pass','$contact','$company','$country')";
    $query1=mysqli_query($conn,$sql1);
      if($query1)
      {
       ?>
<script>
window.alert("Successfully Registor");
window.location.href= 'login.php';
</script>
<?php
      }else{
        ?>
        <script>
        window.alert(" Not Successfully Registor");
        window.location.href= 'register.php';
        </script>
        <?php
      }         
}
}}
else if(isset($_POST['log_in'])){
     $email=$_POST['email'];
     $pass=$_POST['password'];

     $sql2=mysqli_query($conn,"SELECT * FROM register WHERE email='$email' && password='$pass'");
     $count=mysqli_num_rows($sql2);
     $row=mysqli_fetch_assoc($sql2);
     if($count == 1)
{
  $_SESSION['id']=$row['id'];
  $_SESSION['email']=$email;
  $_SESSION['Password']=$pass;
  ?>
<script>
window.location.href= 'studash.php';
</script>
<?php
  exit();
}
else {?>
<script>
window.alert('Wrong email or password');
window.location.href= 'login.php';
</script>
<?php
}
}
?>