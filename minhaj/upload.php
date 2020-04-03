<?php
session_start();
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['email']))
{
    $id=$_SESSION['id'];
    if(isset($_POST['submit']))
    {
        $file_tmp =$_FILES['file']['tmp_name'];
      

        $allow=array("docx","pdf","docs");
        $fold=$_FILES['file']['name'];
        $temp=explode('.',$fold);
        $ext=end($temp);
        $name=$_SESSION['id'].'.'.$ext;
        $des="paper/".$name;
        if(in_array($ext,$allow))
        {
        $upload=move_uploaded_file($file_tmp,$des);
        if($upload)
        {
            $status="paperuploaded";
            $sub=mysqli_query($conn,"SELECT * FROM abstract where stdid='$id'");
            $row=mysqli_fetch_assoc($sub);
            $result=$row['subTheme'];
            $sql=mysqli_query($conn,"INSERT INTO fullpaper(stdid,sub_theme,paper,status) VALUES('$id','$result','$name','$status')");
            $sql1=mysqli_query($conn,"UPDATE abstract SET Status='paperUploaded' WHERE stdid='$id'");
            ?>
          <script>
          window.alert('File Uploaded');
          window.location.href= 'studash.php';
          </script>
          <?php
        }else{
          ?>
          <script>
          window.alert('File not Uploaded');
          window.location.href= 'studash.php';
          </script>
          <?php
        }}
        else{
          ?>
           <script>
            window.alert('Wrong File type only word and pdf allowed!');
            window.location.href= 'studash.php';
            </script>
          <?php
        } 
    }
}
else{
    header("location:index.php");
}
?>