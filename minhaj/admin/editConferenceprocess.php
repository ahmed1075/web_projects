<?php
session_start();

$conn = mysqli_connect("localhost","root","","leadsdev_minhaj");

if(isset($_SESSION['username']))
{

  ?>


<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title> Minhaj University Conference </title> 
<link rel="icon" href="../images/favicon-96x96.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body class="bg">
  <div class="row">
    <div class="col-md-8">
    <img class="logo" src="../images/logo.png"></div>
<div class="col-md-4 space2">
<input type="button" class="btn btn-success dash" onclick="window.location='admindash.php'" value="Dash Board">
<input type="button" class="btn btn-danger num" onclick="window.location='logout.php'" value="Log out">
</div>
</div>

<div class="row">
 <div class="offset-md-5 offset-lg-5 offset-sm-5 col-md-6 dump">

<?php 

$id=$_GET['status'];
$sql=mysqli_query($conn,"SELECT * FROM schedule WHERE id = '$id' ");
$row=mysqli_fetch_assoc($sql);
?>

<form method="post" action="update.php" >
<fieldset class="size">
<h2> <legend class="head1"> Edit Conference Schedule </legend></h2>
 <input type="hidden" value="<?php echo $row['id']?>" name="id">
<div class="form-group">
<select name="Guest" type="number" class="form-control"  required >
    <?php 
    
    $sql= mysqli_query($conn,"SELECT * FROM speaker WHERE type= 'Guest Speaker'");
   while($row1 = mysqli_fetch_assoc($sql))
    {
    ?>    
      <option value="<?php echo $row1['id'] ?>"><?php echo $row1['name'] ?></option>

    <?php  }?>
    </select>
</div>

  <div class="form-group">
    <input name="title" type="text" class="form-control" value="<?php echo $row['Title'] ?>" placeholder="Title" required>
  </div>
  <div class="form-group">

  <textarea name="descp" class="form-control" placeholder="Description"  rows="4"><?php echo $row['Description'] ?></textarea>
  </div>

 
  <button name="submit" type="submit" value="submit" class="btn btn-primary merge">Submit</button>
  </fieldset>
</form>
</div>

</div>
</body>
</html>
<?php
  }
else{
    ?>
    <script>
         window.location.href= 'index.php';
         </script>
<?php
}
?>