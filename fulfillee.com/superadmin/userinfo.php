<?php
session_start();
include '../admin/connection.php';
$_SESSION["heading"] = "User's Info";
if (isset($_SESSION['email'])) {
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
            <div class="d-flex" id="wrapper">
                <!-- Sidebar -->

                <?php include 'layout/sidebar.php'; ?>

                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <?php include 'layout/header.php'; ?>


                    <div class="container-fluid">
                        <br />

                        <div
                            class="col-md-12"
                            style="background-color: white; border-radius: 10px;"
                            >
                            <div class="col-md-12"><div class="row">


                                </div>
                                <br>
                                <br>

                                <div class="row table-responsive">
                                    <table class="table table-bordered" id="myTable" style="text-align:center;font-family: Raleway">
                                        <thead style="background-color:#333333;color: white">
                                            <tr>
                                                <th>User Name</th>
                                                <th>Phone Number</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Role</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM user WHERE role='client' || role='co-admin'");
                                            while ($row = mysqli_fetch_assoc($sql)) {
                                                ?>

                                                <tr>
                                                    <td><b><?php echo $row['email']; ?></b></td>
                                                    <td><b><?php echo '+'.$row['country_code'] . ' ' . $row['phone_number']; ?></b></td>
                                                    <td><b><?php echo $row['first_name']; ?></b></td>
                                                    <td><b><?php echo $row['last_name']; ?></b></td>
                                                    <td><b><?php echo $row['role']; ?></b></td>

                                                </tr>
                                            <?php } ?>

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