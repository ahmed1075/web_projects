<?php
session_start();
include 'connection.php';
$_SESSION["heading"]="Marketplace";
if(isset($_SESSION['email']))
{
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
        .button {
  position: absolute;
  width: 120px;
  left:0;
  top: 90px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}
.card:hover .button {
  opacity: 1;
}

        .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}


.card button:hover {
  opacity: 0.7;
}

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
                        <div class="container">
                            <br><div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" style=" border-color: gray;background-color:#e6e3e3;text-align:left;margin-bottom:20px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Product Category
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="dropdown-item" type="button">Danam Jeans</button>
                                                        <button class="dropdown-item" type="button">Simple Jeans</button>
                                                    </div>
                                                </div>
                            <div class="row">
                                <?php for($i=0;$i<12;$i++) { ?>
                                <div class="col-md-2">
<div class="card" style="height:280px;margin-top:10px;font-family:raleway;">
  <img src="img/img1.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:8px" class="img-fluid">  <div class="button d-flex justify-content-center text-center" style="justify-content: center;width:100%" ><a href="#" class="btn btn-warning" > Add to List </a></div>
<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>
 <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>
</div>                                </div>
                                                          
                                                          <?php }?>
                                                          

                                                          
                                                          
<!--                                                                <div class="col-md-2">-->
<!--      <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img2.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--     <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img3.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px;font-family:raleway" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--      <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img4.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px;font-family:raleway" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--<div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img1.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                                </div>-->
<!--                                                                <div class="col-md-2">-->
<!--      <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img2.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--     <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img3.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--      <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img4.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                                                <div class="col-md-2">-->
<!--<div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img1.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                                </div>-->
<!--                                                                <div class="col-md-2">-->
<!--      <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img2.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--     <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img3.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
<!--                                <div class="col-md-2">-->
<!--      <div class="card" style="height:280px;margin-top:10px;font-family:raleway">-->
<!--  <img src="img/img4.jpg" alt="Denim Jeans" style="width:90%;height:180px;margin-top:10px;margin-left:10px;font-family:raleway" class="img-fluid">  <div class="button"><a href="#" class="btn btn-warning"> Add to List </a></div>-->
<!--<p class="text-align:justify" style="margin-top:4px;font-family:raleway">Some text about the jeans. Super slim and .</p>-->
<!-- <center><h4 style="margin-top:-10px;font-family:raleway">$19.99</h4></center>-->
<!--</div>                              -->
<!--                                </div>-->
                                        

                            </div>
                            <br>
                            <br>
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
}else {
          ?>
          <script>
          window.location.href= 'signin.php';
          </script>
        <?php
}
?>