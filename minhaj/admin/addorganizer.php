<?php
session_start();
if(isset($_SESSION['username']))
{

  $conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title> Minhaj University Conference </title> 
<link rel="icon" href="../images/favicon-96x96.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body class="bg">
  <div class="row">
    <div class="col-md-4">
    <img class="logo" src="../images/logo.png"></div>
    <div class="col-md-4">
    <input type="button" class="btn btn-success dash" onclick="window.location='admindash.php'" value="Dash Board">
    </div>
<div class="col-md-4 space2">
<input type="button" class="btn btn-primary" onclick="window.location='organizer.php'" value="Organizer">
<input type="button" class="btn btn-danger btn-style-6" onclick="window.location='logout.php'" value="Log out">
</div>
</div>
    <h3 class="h3 addspeaker"> Add Organizer </h3>
<div class="row restyle">
<form method="post" action="organizerproc.php" enctype="multipart/form-data">
<fieldset class="resize">
  <!-- Name -->
  <div class="form-group">
    <input name="name" type="text" class="form-control" placeholder="Enter name">
  </div>
  <!-- Designation -->
  <div class="form-group">
    <input name="desig" type="text" class="form-control" placeholder="Enter Designation">
  </div>

   <!-- Links -->
   <div class="form-group">
        <input name="link" type="text" class="form-control" placeholder="Enter Linkedin link"><br>
        <input name="fb" type="text" class="form-control" placeholder="Enter Facebook link"><br>
        <input name="google" type="text" class="form-control" placeholder="Enter Google+ link">
      </div>

  <!-- Description -->
  <div class="form-group">
    <textarea name="description" class="form-control" placeholder="Enter Description upto 25 Words" rows="3"></textarea>
</div>
  
      <!-- Type -->
<div class="form-group">
<select name="type" class="form-control">
        <option value="type" disabled selected>Select type of Organizer</option>
        <option value="VIP">VIP</option>
        <option value="General Speaker">General Organizer</option>
</select>
      </div>

      <!-- Image -->
<div class="form-group">
        <input name="image" type="file" class="form-control btn btn-success">
      </div>

  <input name="set" type="submit" value="Add Organizer" class="btn btn-primary spek">
  </fieldset>
</form>
</div>
</body>
</html>

<?php
}
else{
    header("location:index.php");
  }
?>