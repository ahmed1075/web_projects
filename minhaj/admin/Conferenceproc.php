<?php
session_start();

$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    if(isset($_POST['submit']))
    {
      $title=$_POST['title'];
      $decp=$_POST['descp'];
      
        $day=$_POST['day'];
        $speaker = $_POST['Guest'];
        $date=$_POST['Date'];
        $venue=$_POST['Venue'];
        $time=$_POST['Time'];
     
       $aa = mysqli_query($conn,"SELECT * FROM schedule WHERE  date = '$date'");
        $chk = mysqli_num_rows($aa);
        if($chk == 0)
      {
            $sql=mysqli_query($conn,"INSERT INTO schedule(day,date,time,Title, Description,venue,GustSpeaker) VALUES('$day','$date','$time','$title','$decp','$venue','$speaker')");
        
            if($sql)
            {
            ?>

          <script>
           window.alert('Data inserted successfully');
            window.location.href= 'Conference.php';
              </script>
          <?php
          }
        
           else{
          ?>
          <script>
           window.alert('Data not inserted ');
             window.location.href= 'Conference.php';
               </script>
          <?php
        }
      }else{



        //check     ?>
                  <script>
            window.alert('Already Conference Exist !');
            window.location.href= 'Conference.php';
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