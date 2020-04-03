<?php
session_start();
include 'core/header.html';
if(isset($_SESSION['email']))
{
  $status="pending";
$email=$_SESSION['email'];
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
$que=mysqli_query($conn,"SELECT id FROM register where email='".$email."'");
$result=mysqli_fetch_assoc($que);
$res=$result['id'];

$check=mysqli_query($conn,"SELECT * FROM abstract where stdid='$res'");
$cross=mysqli_num_rows($check);
if($cross>=1)
{
   ?>
   <script>
window.alert('You are Already submit your Abstract');
window.location.href= 'studash.php';
</script>
   <?php
}
else
{
    if(isset($_POST['send']))
{
    //Variables
    $fa=$_POST['fa'];
    $sa=$_POST['sa'];
    $ins=$_POST['institute'];
    $email=$_POST['email'];
    $altemail=$_POST['alt_email'];
    $add=$_POST['address'];
    $title=$_POST['title'];
    $theme=$_POST['sub_theme'];


    $allow=array("docx","pdf","docs","doc");
    $fold=$_FILES['file']['name'][0];
    $temp=explode('.',$fold);
    $ext=end($temp);


    $fold2=$_FILES['file']['name'][1];
    $temp2=explode('.',$fold2);
    $ext2=end($temp2);

    if(in_array($ext,$allow) && in_array($ext2,$allow))
    {
        $name=$_SESSION['id'].'.'.$ext;
        $file_temp=$_FILES['file']['tmp_name'][0];
        $des="abstract/".$name;
        $name2=$_SESSION['id'].'.'.$ext2;
        $file_temp2=$_FILES['file']['tmp_name'][1];
        $des2="turnitin/".$name2;


        $sql1="INSERT INTO abstract(stdid,firstAuthor,secondAuthor,instituite,authoremail,alteremail,address,paperTitle,abstract,subTheme,Status,Turnitin)
          VALUES('$res','$fa','$sa','$ins','$email','$altemail','$add','$title','$name','$theme','$status','$name2')";
                  
                  
         
         $query1=mysqli_query($conn,$sql1);
           if($query1)
           {
            
             move_uploaded_file($file_temp,$des);
              move_uploaded_file($file_temp2,$des2);

           }


        
    }
    else{
      ?>
      <script>
window.alert('Wrong File type only word and pdf allowed!');
window.location.href= 'abstract.php';
</script>
      <?php
    }
      if($query1)
      {?>
        <script>
        window.alert('Paper Uploaded');
        window.location.href= 'studash.php';
        </script>
        <?php
      }else{
        ?>
        <script>
        window.alert('Paper not Uploaded');
        window.location.href= 'abstract.php';
        </script>
        <?php
      } 
    }
  }
}
?>