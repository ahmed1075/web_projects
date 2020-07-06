<?php
session_start();
$_SESSION["heading"]="Account Management
";
include '../admin/connection.php';

if (isset($_SESSION['email'])) {


    if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];

 $sql = mysqli_query($conn,"SELECT * from user WHERE email='$email'");
        if($sql){
            ?>
            <script>
                window.alert('The Email that you Entered is Already Registered');
                window.location.href = 'accountmanage.php';
            </script>
            <?php
            
            
        }else{
        If ($pass == $cpass) {
            $sql = mysqli_query($conn, "INSERT INTO user(email,password,first_name,last_name,role,shows,client_id)
                VALUES('$email','$pass','$fname','$lname','co-admin','enable','$id')");

            if ($sql) {
                ?>
                <script>
                    window.alert('Client Registered Successfuly');
                    window.location.href = 'accountmanage.php';
                </script>
                <?php
            } else {
                ?>
                <script>
                    window.alert('Employee Not Registered');
                    window.location.href = 'accountmanage.php';
                </script>
                <?php
            }
        } else {
            ?>   <script>

                window.alert('Password and Conform Password must be matched');
                window.location.href = 'accountmanage.php';
            </script>
            <?php
        }}
    } else {
        if (isset($_POST['selecte'])) {
            $show = $_POST['select'];
            $id = $_POST['id'];

            $sql = mysqli_query($conn, "UPDATE user SET shows='$show' where id='$id'");
            if ($sql) {
                if ($show == 'enable') {
                    ?>
                    <script>
                        window.alert('Account Enabled');
                        window.location.href = 'accountmanage.php';
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        window.alert('Account Disabled');
                        window.location.href = 'accountmanage.php';
                    </script>

                    <?php
                }
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
                .dropbtn {
                    background-color: #4CAF50;
                    color: white;
                    padding: 16px;
                    font-size: 16px;
                    border: none;
                    cursor: pointer;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {background-color: #f1f1f1}

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .dropdown:hover .dropbtn {
                    background-color: #3e8e41;
                }

            </style>
        </head>

        <body style="background-color: #eae8e8;">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <center><h4><b>Add Account</b></h4></center>

                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="accountmanage.php">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION['id']; ?>">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="cpassword" placeholder="Enter conform Password" required>
                                </div>

                                <center> <button type="submit" name="submit" class="btn btn-warning">Conform</button></center>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex" id="wrapper">
                <!-- Sidebar -->
               <?php include 'layout/sidebar.php';  ?>

                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                   <?php include 'layout/header.php';  ?>

                    <div class="container-fluid">
                        <br />

                        <div
                            class="col-md-12"
                            style="background-color: white; border-radius: 10px;"
                            >
                            <div class="container-fluid">
                                <br>

                                <a type="submit" data-toggle="modal" data-target="#myModal" class="btn" style="background-color:#ecbe44;font-family:raleway" ><b>+ Add Staff  Account</b></a>

                                <br>
                                <br>

                                <div class="row table-responsive">
                                    <table class="table table-bordered" id="myTable" style="text-align:center">
                                        <thead style="background-color:#333333;color: white;font-family:raleway">
                                            <tr>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-family:raleway">
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM user WHERE role='employee'");
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                              if($row['client_id'] == $_SESSION['id'])  {?>
                                                <tr>
                                                    <td><b><?php echo $row['email']; ?></b></td>
                                                    <td><b><?php echo $row['role'] ?></b></td>
                                                    <td>
                                                        <div class="col-lg-6 offset-lg-3">
                                                        <form method="post" action="accountmanage.php">
                                                        <div class="input-group">
                                                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                                                    <select class="form-control" name="select" style="background-color:#e8f1ff;width:200px">
                                                        <option <?php if ($row['shows'] == 'enable') echo 'selected'; ?> value="enable">Enable</option>
                                                        <option <?php if ($row['shows'] == 'disable') echo 'selected'; ?> value="disable">Disable</option>
                                                    </select><span class="input-group-btn"> <button type="submit" name="selecte" class="btn" style="background-color:#ecbe44;"><span class="fa fa-pencil-square-o"></span></button></span></div></form></div></td>
                                            <td><?php $id = $row['id']; ?>
                                                <button onclick="{
                                        var x = confirm('Are you sure you want to delete?');
                                        if (x) {
                                            window.location = 'deleteemployee.php?id=<?php echo $id; ?>';
                                        }
                                    }" type="button" class="btn btn-outline-danger" >
                                                    Remove
                                                </button>
                                            </td>
                                            </tr>
                                            <?php }} ?>
                                        </tbody>
                                    </table>


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
            <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("myTable");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[1];
                                if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
            </script>

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