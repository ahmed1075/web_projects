<?php
include '../core/header.html';
session_start();
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
    {
    ?>
     <script>
          window.alert('This email already exist');
          window.location.href= 'addstudent.php';
          </script>
    <?php
    }else{
    
    //Check
         if($pass!=$cpass){
            ?>
            <script>
                 window.alert('Your password should same!');
                 window.location.href= 'addstudent.php';
                 </script>
           <?php
         }
         else{
    //Insert Query
    $sql1="INSERT INTO register(firstName,lastName,email,password,contactno,company,country) VALUES('$fn','$ln','$email','$pass','$contact','$company','$country')";
    $query1=mysqli_query($conn,$sql1);
      if($query1)
      {
        header('location:student.php');
      }     
}
}
}
?>