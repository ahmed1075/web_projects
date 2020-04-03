<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title> Minhaj University Conference </title> 
<link rel="icon" href="images/favicon-96x96.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="bg">
  <div class="row">
    <div class="col-md-4">
    <img class="logo" src="images/logo.png"></div>

<div class="row topy">
 <div class="offset-md-6">
 <form action="upload.php" method="post" enctype="multipart/form-data">
    <input class="btn btn-success" type="file" name="file" required><br><br>
    <input class="btn btn-primary loop" type="submit" name="submit" value="Submit">
 </form>
</div>
</div>
<?php
}
else{
    header("location:index.php");
}
?>
</body>
</html>