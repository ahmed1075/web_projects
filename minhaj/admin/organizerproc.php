<?php
session_start();
$conn=mysqli_connect("localhost","root","","leadsdev_minhaj");
if(isset($_SESSION['username']))
{
    if(isset($_POST['set']))
    {
        $name=$_POST['name'];
        $desig=$_POST['desig'];
        $link=$_POST['link'];
        $fb=$_POST['fb'];
        $google=$_POST['google'];
        $description=$_POST['description'];
        $type=$_POST['type'];

        $vip=mysqli_query($conn,"SELECT * from organizer where type='VIP'");
        $number=mysqli_num_rows($vip);
        if($number!=0 && $type=='VIP')
        {
         ?>
         <script>
         window.alert('VIP Speaker already added');
         window.location.href= 'addspeaker.php';
         </script>
         <?php
        }
       else
       {
        $allow=array("png","jpg","jpeg");
        $fold=$_FILES['image']['name'];
        $temp=explode('.',$fold);
        $ext=end($temp);
        $img=$name.'.'.$ext;

        $tmp=$_FILES['image']['tmp_name'];
        $des="organizer/".$img;
 if(in_array($ext,$allow))
    {
        $sql=mysqli_query($conn,"INSERT into organizer(name,designation,linked,fb,google,description,type,image) 
        VALUES('$name','$desig','$link','$fb','$google','$description','$type','$img')");
        if($sql)
        {
            $upload=move_uploaded_file($tmp,$des);  
            
                ?>
                <script>
                window.alert('Organizer Added');
                window.location.href= 'organizer.php';
                </script>
                <?php
        }
        else{
            ?>
          <script>
          window.alert('Organizer Not Added');
          window.location.href= 'addorganizer.php';
          </script>
          <?php
      }
    }
    else{
        ?>
        <script>
        window.alert('Only png,jpg and jpeg allowed!');
        window.location.href= 'addorganizer.php';
        </script>
        <?php
    }
}

    }
}
else{
    header("location:index.php");
}?>