<?php
session_start();
if(isset($_SESSION['username']))
{
  $name=$_SESSION['username'];
  $pass=$_SESSION['Password'];
  
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
$sql1=mysqli_query($conn,"SELECT * FROM reviewer where email='$name' && password='$pass'");

    $count=mysqli_num_rows($sql1);
    $row=mysqli_fetch_assoc($sql1);
    $dept=$row['dept'];
    $sql2="SELECT * FROM abstract where subTheme='$dept' && Status='pending'";
$query=mysqli_query($conn,$sql2);


  $sql3=mysqli_query($conn,"SELECT * FROM fullpaper where sub_theme='$dept' && status='paperuploaded'");
}
else
{
 header("location:index.php");
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title> Minhaj University Conference </title> 
<link rel="icon" href="../images/favicon-96x96.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body class="bg">
  <div class="row">
    <div class="col-md-4">
    <img class="logo" src="../images/logo.png"></div>
<div class="style">
<input type="button" class="btn btn-success btn-style-1" onclick="window.location='reviewerdash.php'" value="Dashboard">
<input type="button" class="btn btn-primary btn-style-1" onclick="window.location='history.php'" value="History">
<input type="button" class="btn btn-danger btn-style-1" onclick="window.location='logout.php'" value="Log out">
</div>
</div>

    <h3 class="h3 mar"> Welcome to Reviewer Dashboard </h3>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th class="colo" colspan="4"> <h2> Abstract Table  </h2> </th>
    </tr>
    <tr>
    <th scope="col">Registration No</th>
      <th scope="col">Paper Title  </th>
      <th scope="col">Abstract  </th>
      <th scope="col">Status  </th>
    </tr>
  </thead>
  <?php
  while($row=mysqli_fetch_assoc($query))
{
  $set=$row['stdid'];
  ?>
  <tr>
    <td>MU-<?php echo $set; ?></td>
    <td> <?php echo $row['paperTitle']; ?> </td>
    <td> <a href="../abstract/<?php echo $row['abstract']; ?>"> <?php echo $row['abstract']; ?>  </a></td>
    <td> <input type="button" class="btn btn-success btn-style-1" onclick="window.location='accept.php?status=<?php echo $set; ?>'" value="Accept">
<input type="button" class="btn btn-danger btn-style-1" onclick="window.location='reject.php?status=<?php echo $set; ?>'" value="Reject">

 </td>
    

  </tr>
<?php
}
?>
</table>
</div>
</body>
</html>