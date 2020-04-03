<?php
session_start();

$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    if(isset($_POST['submit']))
    {
      $title=$_POST['title'];
      $decp=$_POST['descp'];
      $id=$_POST['id'];
       
        $speaker = $_POST['Guest'];
       
       
   
       
      
            $sql=mysqli_query($conn,"UPDATE schedule SET Title = '$title', Description = '$decp', GustSpeaker='$speaker' where id = '$id' ");
        
            if($sql)
            {
            ?>

          <script>
           window.alert('Data Update successfully');
            window.location.href= 'editConference.php';
              </script>
          <?php
          }
        
           else{
          ?>
          <script>
           window.alert('Data not update ');
             window.location.href= 'editConference.php';
               </script>
          <?php
        }
   
      }
    }

else{
    ?>
    <script>
         window.location.href= 'index.php';
         </script>
<?php
}
?>