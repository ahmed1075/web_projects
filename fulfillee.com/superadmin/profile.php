<?php
session_start();
include '../admin/connection.php';

if (isset($_SESSION['email'])) {

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $em = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];


        if (empty($pass) || empty($cpass)) {
            $sql = mysqli_query($conn, "UPDATE user SET email='$em', first_name='$fname', last_name='$lname', phone_number='$mobile' where id='$id'");
            if ($sql) {
                ?>
                <script>
                    window.alert('Profile Updated');
                    window.location.href = '../admin/signin.php';
                </script>
                <?php
            }
        } else {
            if ($pass == $cpass) {
                $sql = mysqli_query($conn, "UPDATE user SET email='$em', password='$pass', first_name='$fname', last_name='$lname', phone_number='$mobile' where id='$id'");
                if ($sql) {
                    session_destroy();
                    ?>
                    <script>
                        window.alert('Profile Updated');
                        window.location.href = '../admin/signin.php';
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    window.alert('Password and Conform Password not Matched');
                    window.location.href = '../superadmin/profile.php';
                </script>
                <?php
            }
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1, shrink-to-fit=no"
                />
            <meta name="description" content="" />
            <meta name="author" content="" />

            <title>Fulfillee</title>

            <link href="img/Asset 8.png" rel="icon" />
            <!-- Bootstrap core CSS -->

            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
            <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                />
            <!-- Custom styles for this template -->
            <link href="css/simple-sidebar.css" rel="stylesheet" />
            <link
                href="https://fonts.googleapis.com/icon?family=Material+Icons"
                rel="stylesheet"
                />
            <link
                href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;700;900&display=swap"
                rel="stylesheet"
                />
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
            <style>
                .hh ul li::before {
                    content: "\2022";
                    color: #ecbe44;
                    font-weight: bold;
                    display: inline-block;
                    width: 1em;
                    margin-left: -1em;
                }

                h1,h2,h3,h5,h6,p,a,li{
                    font-family:Lato;

                }
                .aa:hover{

                    border:2px solid black;



                }
                .aa{

                    border:2px solid #F0F0F7;



                }
                .ll:hover{

                    background-color:#222222;
                    color:#ecbe44;
                }
                .ll{
                    border-radius: 20px;
                    height: 50px;
                    background-color: #333333;
                    color: white;
                    border-color: #333333; 
                }

            </style>
        </head>

        <body style="background-color: #eae8e8;">
            <div class="d-flex" id="wrapper">
                <!-- Sidebar -->
                
                                      <?php include 'layout/sidebar.php';  ?>

                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                   <?php include 'layout/header.php';  ?>
     
                        <div class="container-fluid">
                            <br />
 <?php
    $email = $_SESSION['email'];
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    while ($row = mysqli_fetch_assoc($sql)) {
        ?>
                            <div
                                class="col-md-12"
                                style="background-color: white; border-radius: 10px;"
                                >
                                <div class="container-fluid">
                                    <div class="row">
                                        <h4 style="margin-top:20px">Profile Setting</h4>             <br>             <hr style="background-color:#c0c7bf;height:1px;width:100%">             <br>
                                        <form method="post" action="profile.php" class="form">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">

                                                    <div class="col-md-6">
                                                        <label><b>First Name</b> </label>
                                                        <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><b>Last Name</b> </label>
                                                        <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name']; ?>">
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:10px">
                                                        <label><b>E-mail Address</b> </label>
                                                        <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:10px">
                                                        <label><b>Phone Number</b> </label>
                                                        <input type="text" name="mobile" class="form-control" value="<?php echo $row['phone_number']; ?>">
                                                    </div>                       
                                                    <div class="col-md-6" style="margin-top:10px">
                                                        <label><b>Password</b> </label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:10px">
                                                        <label><b>Conform Password</b> </label>
                                                        <input type="password" name="cpassword" class="form-control" placeholder="Conform Password">
                                                    </div>



                                                    <div class="col-md-12" style="margin-top:10px">                    
                                                        <center><button type="submit" name="submit" style="color: white;background-color: black;border-color: black;height: 40px;width: 200px;border-radius: 30px;margin-top: 10px">Update Settings</button></p></center><br>
                                                    </div>
                                                    <br>


                                                </div>

                                            </div>                                                    </form>
    <?php } ?>                   





                                </div>
                            </div>
                        </div>
                        <br />

                    </div>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
            <!-- /#wrapper -->

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Menu Toggle Script -->
            <script>
                    $("#menu-toggle").click(function (e) {
                        e.preventDefault();
                        $("#wrapper").toggleClass("toggled");
                    });
            </script>
        </body>
    </html>
    <?php
} else {
    ?>
    <script>
        window.location.href = 'signin.php';
    </script>
    <?php
}
?>