<?php
session_start();
error_reporting(0);
include 'core/header.html';
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];
    $id=$_SESSION['id'];
    $sql=mysqli_query($conn,"SELECT * FROM register where email='$email'");
    $row=mysqli_fetch_assoc($sql);
    $query=mysqli_query($conn,"SELECT * FROM abstract where stdid='$id'");
    $row2=mysqli_fetch_assoc($query);
    $Status=$row2['Status'];

    $query3=mysqli_query($conn,"SELECT * FROM fullpaper where stdid='$id'");
    $row5=mysqli_fetch_assoc($query3);
    $work=$row5['status'];
?>
<div class="style">
<input type="button" class="btn btn-danger btn-style-1" onclick="window.location='logout.php'" value="Log out">
</div>
</div>

    <h3 class="h3"> Welcome to Minhaj University Conference Management System </h3>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Register no</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">upload  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>MUL-<?php echo $row['id']; ?></td>
      <td> <?php echo $row['firstName']?>  <?php echo $row['lastName']; ?> </td>
      <td> <?php echo $Status; ?></td>
      <td>
       
      <?php 
        if($Status == "")
        {
          ?>
    <input type="button" class="btn btn-Success btn-style-2" onclick="window.location='abstract.php'" value="Abstract Paper">
          <?php
        }
          ?>

<?php 
        if($Status == "pending")
        {
          echo "Your abstract is under Review";
        }
          ?>

<?php 
        if($Status == "Accept")
        {
          ?>
    <input type="button" class="btn btn-Success btn-style-2" onclick="window.location='full.php'" value="Full Paper">
          <?php
        }
          ?>

<?php 
        if($Status == "Reject")
        {
          echo "Your Paper is Rejected! Better luck next time";   
        }
          ?>
        
        <?php 
        if($work == "paperuploaded")
        {
          echo "Your Full paper is under Review";
        }
          ?>

<?php 
        if($work == "paperAccept")
        {
          echo "Your Full paper is Accepted you can come for presenation";
        }
          ?>

<?php 
        if($work == "paperReject")
        {
          echo "Your Full paper is Rejected! Better luck next time";
        }
          ?>
</td>
    </tr>
  </tbody>
</table>
<?php }
else{
  @header("location:index.php");
}
?>
</div>