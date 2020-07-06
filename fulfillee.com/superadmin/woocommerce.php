<?php
session_start();
include '../admin/connection.php';

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
                            <div class="row">
                                 <div
                                    class="col-lg-2 aa"
                                    style="
                                    margin: 20px 10px 10px 10px;
                                    background-color: #F0F0F7;
                                    border-radius: 10px;
                                    font-family: Raleway;
                                    "
                                    ><a href="authorization.php" style="text-decoration:none;">
                                    <center><img src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/shopify-512.png" style="height:30px;margin-top: 10px"/>
                                        <h4><b style="font-size:15px;margin-top: -20px;color:black;style:none">Shopify</b></h4></center>
                                </a></div>
                            <div
                                    class="col-lg-2 aa"
                                    style="
                                    margin: 20px 10px 10px 10px;
                                    background-color: #F0F0F7;
                                    border-radius: 10px;
                                    font-family: Raleway
                                    "
                                    >
                                    <a href="woocommerce.php" style="text-decoration:none;">    <center><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 height="30"
                                                 viewBox="0 0 172 172"
                                                 style=" fill:#000000;;margin-top: 10px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M110.0585,162.68513c-2.21719,0 -4.18712,-1.24431 -5.1385,-3.2465l-16.51738,-43.4945c-0.29563,-0.77937 -0.97556,-0.86538 -1.25506,-0.86538c-0.2795,0 -0.96212,0.086 -1.25775,0.87075l-16.29163,43.27681c-1.03737,2.20913 -3.00731,3.45881 -5.22988,3.45881c-2.21719,0 -4.18444,-1.24431 -5.1385,-3.2465l-53.019,-139.67475c-0.31444,-0.82237 -0.20156,-1.75225 0.301,-2.47787c0.50256,-0.72831 1.32762,-1.161 2.21181,-1.161h21.5c1.12069,0 2.12581,0.69606 2.51819,1.74687l35.68462,95.54331c0.29294,0.78744 0.97825,0.87344 1.25775,0.87075c0.28219,0 0.9675,-0.08331 1.26044,-0.87344l8.31781,-22.4675c0.0215,-0.20694 0.0645,-0.4085 0.13169,-0.59663l7.83944,-21.20975c0.80894,-2.18762 2.838,-3.60394 5.17075,-3.60394c2.322,0 4.35106,1.40556 5.16537,3.58244l16.54156,44.29537c0.29294,0.78744 0.97825,0.87344 1.26044,0.87075c0.2795,0 0.96481,-0.08331 1.26044,-0.87344l35.3675,-95.53525c0.38969,-1.04812 1.3975,-1.74956 2.52088,-1.74956h10.75c0.8815,0 1.70925,0.43269 2.20913,1.15831c0.50256,0.72831 0.61544,1.65012 0.30369,2.47787l-52.49763,139.46513c-1.03469,2.20913 -3.00731,3.45881 -5.22719,3.45881z" fill="#000000"></path><path d="M6.07375,17.76706l54.88144,143.018c7.25625,-2.86219 9.202,-15.34562 6.39356,-22.6395l-41.17787,-107.17212c-2.81112,-7.29387 -12.48612,-12.97794 -20.09712,-13.20638zM87.59638,113.39906l19.00869,48.97163c7.25625,-2.86219 9.202,-15.34563 6.39356,-22.6395l-7.51425,-18.12181c-2.81113,-7.29387 -10.277,-7.98456 -17.888,-8.21031z" fill="#333333"></path><path d="M143.82694,16.57919c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39212,0.516 2.10162,2.06131 1.58831,3.45344zM139.16412,29.18088c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86513c1.39213,0.516 2.10431,2.06131 1.58831,3.45344zM134.504,41.78525c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86512c-1.39213,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86513c1.39213,0.516 2.10163,2.06131 1.58831,3.45344zM125.17838,66.99131c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39213,0.51331 2.10431,2.06131 1.58831,3.45344zM129.84119,54.38694c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86512c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39213 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39212,0.516 2.10431,2.06131 1.58831,3.45344zM120.51825,79.593c-0.516,1.39212 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39213,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39213 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39213,0.516 2.10162,2.06131 1.58831,3.45344zM28.1865,45.23063c-1.08037,0 -2.10162,-0.65844 -2.51012,-1.73075l-3.83506,-10.04319c-0.52944,-1.38675 0.16662,-2.94012 1.55069,-3.46956c1.39213,-0.52944 2.94012,0.16931 3.46956,1.55337l3.83506,10.04319c0.52944,1.38675 -0.16662,2.94013 -1.55069,3.46956c-0.31444,0.12362 -0.63963,0.17737 -0.95944,0.17737zM39.69438,75.3575c-1.08037,0 -2.10163,-0.65844 -2.51013,-1.73075l-7.67012,-20.08637c-0.52944,-1.38675 0.16662,-2.94013 1.55069,-3.46956c1.38944,-0.52675 2.94012,0.16931 3.46956,1.55337l7.67013,20.08637c0.52944,1.38675 -0.16662,2.94013 -1.55069,3.46956c-0.31712,0.12362 -0.63963,0.17737 -0.95944,0.17737z" fill="#000000"></path><path d="M30.22363,18.8125l35.68731,95.54331c0.65306,1.74688 2.2145,2.62031 3.77594,2.62031c1.56681,0 3.13094,-0.87881 3.78131,-2.63106l8.49519,-22.94319l-0.04569,-0.11825l7.83944,-21.20975c0.45419,-1.23087 1.55338,-1.84631 2.64987,-1.84631c1.09381,0 2.19031,0.61275 2.64719,1.83825l16.54425,44.29269c0.65306,1.74687 2.2145,2.62031 3.77594,2.62031c1.56681,0 3.13094,-0.87881 3.78131,-2.63106l35.36481,-95.53525h10.75l-52.49762,139.46513c-0.54287,1.14488 -1.62863,1.72 -2.71438,1.72c-1.08306,0 -2.16881,-0.56975 -2.71169,-1.71194l-16.43137,-43.29025c-0.65844,-1.73344 -2.2145,-2.6015 -3.76788,-2.6015c-1.55875,0 -3.1175,0.87075 -3.77325,2.61225l-16.28894,43.27412c-0.54287,1.14488 -1.62862,1.72 -2.71438,1.72c-1.08306,0 -2.16881,-0.56975 -2.71169,-1.71194l-52.93569,-139.47587h21.5M30.22363,13.4375h-21.5c-1.76569,0 -3.42119,0.86806 -4.42363,2.322c-1.00244,1.45394 -1.22819,3.30831 -0.602,4.96112l52.93569,139.47319c0.05106,0.13706 0.11019,0.27144 0.172,0.40312c1.40287,2.94819 4.3,4.77837 7.56531,4.77837c3.27338,0 6.17587,-1.83825 7.57337,-4.79719c0.06181,-0.13169 0.11825,-0.26606 0.172,-0.40312l15.03656,-39.947l15.16825,39.96581c0.05106,0.13706 0.11019,0.27144 0.172,0.40313c1.40287,2.94819 4.3,4.77837 7.56531,4.77837c3.27338,0 6.17588,-1.83825 7.57337,-4.79719c0.06181,-0.13169 0.11825,-0.26606 0.172,-0.40313l52.49763,-139.46781c0.62081,-1.65012 0.39238,-3.50181 -0.61006,-4.95306c-1.00512,-1.45125 -2.65794,-2.31663 -4.42094,-2.31663h-10.75c-2.24944,0 -4.25969,1.40019 -5.04175,3.50988l-34.10975,92.14094l-15.28113,-40.90644c-1.20938,-3.23844 -4.22475,-5.332 -7.68087,-5.332c-3.46956,0 -6.49031,2.10163 -7.69163,5.35888l-7.83944,21.20975c-0.11019,0.29831 -0.1935,0.602 -0.24725,0.91106l-6.9445,18.76144l-34.42419,-92.15975c-0.78744,-2.10162 -2.79231,-3.49375 -5.03637,-3.49375z" fill="#000000"></path></g></g></svg>
                                        <h4><b style="font-size:15px;color:black;style:disable">Woocommerce</b></h4></center>
                                </a></div>
                                                                <div
                                    class="col-lg-2 aa"
                                    style="
                                    margin: 20px 10px 10px 10px;
                                    background-color: #F0F0F7;
                                    border-radius: 10px;
                                    font-family: Raleway
                                    "
                                    >
                                    <center><img src="https://cdn4.iconfinder.com/data/icons/picons-social/57/39-ebay-3-512.png" style="height:30px;margin-top: 10px"/>
                                        <h4><b style="font-size:15px">Ebay</b></h4></center>
                                </div>                                <div
                                    class="col-lg-2 aa"
                                    style="
                                    margin: 20px 10px 10px 10px;
                                    background-color: #F0F0F7;
                                    border-radius: 10px;
                                    font-family: Raleway
                                    "
                                    >
                                    <center><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/27-amazon-512.png" style="height:30px;margin-top: 10px"/>
                                        <h4><b style="font-size:15px"> Amazon</b></h4></center>
                                </div>                                <div
                                    class="col-lg-2 aa"
                                    style="
                                    margin: 20px 10px 10px 10px;
                                    background-color: #F0F0F7;
                                    border-radius: 10px;
                                    font-family: Raleway
                                    "
                                    >
                                    
                                    <center style="margin-top:20px"><i style='font-size:24px' class='fas' >&#xf290;</i>
                                        <h4><b style="font-size:15px">Shopee</b></h4></center>
                                </div>

                            </div>
                        </div>
                        <center><a><div style="background-color:black;color: white;height: 40px;width: 200px;border-radius: 30px;margin-bottom:"><p data-toggle="modal" data-target="#myModal" style="margin-top:10px;padding-top: 7px">Add Stores</p></div></a></center><br>

                    </div>
                    <br />


                </div>
                           <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                    <center><h3><b>Add Store</b></h3></center>
    
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
            <p>Store type: <span style="font-size:20px"><b>Woocommerce</b></span></p>
            
            <form style="margin-bottom:10px">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Site Url:">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Consumer Key:">
  </div>
    <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Consumer Secret:">
  </div>
 <center> <button type="submit" class="btn btn-warning">Authorize</button></center>
</form>

            <p style="color: #999999;font-size:12px">Steps to connect your Woocommerce store:</p>
            <p style="color: #999999;font-size:12px;margin-top:-10px">1. Login your Wordpress admin > Woocommerce > Settings > Advanced</p>
            <p style="color: #999999;font-size:12px;margin-top:-10px">2. Click REST API and fill in the Description and choose Read/Write permission to generate API Key</p>
            <p style="color: #999999;font-size:12px;margin-top:-10px">3. Go back to CJ app, fill in the information of authorization page</p>
            <p style="color: #999999;font-size:12px;margin-top:-10px">4. Click Plugins > Search keyword Shipment Tracking > Install Now > Activate</p>
            <p style="color: #ecbe44;font-size:12px;margin-top:-10px"><a href="https://cjdropshipping.com/2018/05/24/how-to-connect-woocommerce-manually/" style="color:#ecbe44"><u>you can refer to this tutorial</u></a></p>

        </div>
        </div>
      
    </div>
  </div>
                <div class="container-fluid">
                    <br />

                    <div
                        class="col-md-12"
                        style="background-color: white; border-radius: 10px;"
                        >
                        <div class="col-md-12"><div class="row">
                        <div class="container col-md-3">
                            <br>
  <div class="input-group-append">
                                                            <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Search for Store names" title="Type in a name">

    <span class="input-group-text" id="basic-addon2" style="background-color:#ecbe44">Search</span>

  </div>
                               

</div>
<div class="col-md-9" style="padding-left:0px;">
       <button type="submit" class="btn btn-outline-dark" style="margin-top:24px;margin-left:0px;"><b>Transfer Store</b></button>
</div>
        </div>
<br>
<br>

                            <div class="row table-responsive">
                                <table class="table table-bordered" id="myTable" style="text-align:center;font-family: Raleway">
                                    <thead style="background-color:#333333;color: white">
                                        <tr>
                                            <th>Date</th>
                                            <th>Store Name</th>
                                            <th>Platform</th>
                                            <th>Store Status</th>
                                            <th>Token Status</th>
                                            <th>PayPal Tracking</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>2019-05-20</b></td>
                                            <td><b>Doe</b></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 height="30"
                                                 viewBox="0 0 172 172"
                                                 style=" fill:#000000;;margin-top: 10px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M110.0585,162.68513c-2.21719,0 -4.18712,-1.24431 -5.1385,-3.2465l-16.51738,-43.4945c-0.29563,-0.77937 -0.97556,-0.86538 -1.25506,-0.86538c-0.2795,0 -0.96212,0.086 -1.25775,0.87075l-16.29163,43.27681c-1.03737,2.20913 -3.00731,3.45881 -5.22988,3.45881c-2.21719,0 -4.18444,-1.24431 -5.1385,-3.2465l-53.019,-139.67475c-0.31444,-0.82237 -0.20156,-1.75225 0.301,-2.47787c0.50256,-0.72831 1.32762,-1.161 2.21181,-1.161h21.5c1.12069,0 2.12581,0.69606 2.51819,1.74687l35.68462,95.54331c0.29294,0.78744 0.97825,0.87344 1.25775,0.87075c0.28219,0 0.9675,-0.08331 1.26044,-0.87344l8.31781,-22.4675c0.0215,-0.20694 0.0645,-0.4085 0.13169,-0.59663l7.83944,-21.20975c0.80894,-2.18762 2.838,-3.60394 5.17075,-3.60394c2.322,0 4.35106,1.40556 5.16537,3.58244l16.54156,44.29537c0.29294,0.78744 0.97825,0.87344 1.26044,0.87075c0.2795,0 0.96481,-0.08331 1.26044,-0.87344l35.3675,-95.53525c0.38969,-1.04812 1.3975,-1.74956 2.52088,-1.74956h10.75c0.8815,0 1.70925,0.43269 2.20913,1.15831c0.50256,0.72831 0.61544,1.65012 0.30369,2.47787l-52.49763,139.46513c-1.03469,2.20913 -3.00731,3.45881 -5.22719,3.45881z" fill="#000000"></path><path d="M6.07375,17.76706l54.88144,143.018c7.25625,-2.86219 9.202,-15.34562 6.39356,-22.6395l-41.17787,-107.17212c-2.81112,-7.29387 -12.48612,-12.97794 -20.09712,-13.20638zM87.59638,113.39906l19.00869,48.97163c7.25625,-2.86219 9.202,-15.34563 6.39356,-22.6395l-7.51425,-18.12181c-2.81113,-7.29387 -10.277,-7.98456 -17.888,-8.21031z" fill="#333333"></path><path d="M143.82694,16.57919c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39212,0.516 2.10162,2.06131 1.58831,3.45344zM139.16412,29.18088c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86513c1.39213,0.516 2.10431,2.06131 1.58831,3.45344zM134.504,41.78525c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86512c-1.39213,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86513c1.39213,0.516 2.10163,2.06131 1.58831,3.45344zM125.17838,66.99131c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39213,0.51331 2.10431,2.06131 1.58831,3.45344zM129.84119,54.38694c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86512c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39213 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39212,0.516 2.10431,2.06131 1.58831,3.45344zM120.51825,79.593c-0.516,1.39212 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39213,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39213 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39213,0.516 2.10162,2.06131 1.58831,3.45344zM28.1865,45.23063c-1.08037,0 -2.10162,-0.65844 -2.51012,-1.73075l-3.83506,-10.04319c-0.52944,-1.38675 0.16662,-2.94012 1.55069,-3.46956c1.39213,-0.52944 2.94012,0.16931 3.46956,1.55337l3.83506,10.04319c0.52944,1.38675 -0.16662,2.94013 -1.55069,3.46956c-0.31444,0.12362 -0.63963,0.17737 -0.95944,0.17737zM39.69438,75.3575c-1.08037,0 -2.10163,-0.65844 -2.51013,-1.73075l-7.67012,-20.08637c-0.52944,-1.38675 0.16662,-2.94013 1.55069,-3.46956c1.38944,-0.52675 2.94012,0.16931 3.46956,1.55337l7.67013,20.08637c0.52944,1.38675 -0.16662,2.94013 -1.55069,3.46956c-0.31712,0.12362 -0.63963,0.17737 -0.95944,0.17737z" fill="#000000"></path><path d="M30.22363,18.8125l35.68731,95.54331c0.65306,1.74688 2.2145,2.62031 3.77594,2.62031c1.56681,0 3.13094,-0.87881 3.78131,-2.63106l8.49519,-22.94319l-0.04569,-0.11825l7.83944,-21.20975c0.45419,-1.23087 1.55338,-1.84631 2.64987,-1.84631c1.09381,0 2.19031,0.61275 2.64719,1.83825l16.54425,44.29269c0.65306,1.74687 2.2145,2.62031 3.77594,2.62031c1.56681,0 3.13094,-0.87881 3.78131,-2.63106l35.36481,-95.53525h10.75l-52.49762,139.46513c-0.54287,1.14488 -1.62863,1.72 -2.71438,1.72c-1.08306,0 -2.16881,-0.56975 -2.71169,-1.71194l-16.43137,-43.29025c-0.65844,-1.73344 -2.2145,-2.6015 -3.76788,-2.6015c-1.55875,0 -3.1175,0.87075 -3.77325,2.61225l-16.28894,43.27412c-0.54287,1.14488 -1.62862,1.72 -2.71438,1.72c-1.08306,0 -2.16881,-0.56975 -2.71169,-1.71194l-52.93569,-139.47587h21.5M30.22363,13.4375h-21.5c-1.76569,0 -3.42119,0.86806 -4.42363,2.322c-1.00244,1.45394 -1.22819,3.30831 -0.602,4.96112l52.93569,139.47319c0.05106,0.13706 0.11019,0.27144 0.172,0.40312c1.40287,2.94819 4.3,4.77837 7.56531,4.77837c3.27338,0 6.17587,-1.83825 7.57337,-4.79719c0.06181,-0.13169 0.11825,-0.26606 0.172,-0.40312l15.03656,-39.947l15.16825,39.96581c0.05106,0.13706 0.11019,0.27144 0.172,0.40313c1.40287,2.94819 4.3,4.77837 7.56531,4.77837c3.27338,0 6.17588,-1.83825 7.57337,-4.79719c0.06181,-0.13169 0.11825,-0.26606 0.172,-0.40313l52.49763,-139.46781c0.62081,-1.65012 0.39238,-3.50181 -0.61006,-4.95306c-1.00512,-1.45125 -2.65794,-2.31663 -4.42094,-2.31663h-10.75c-2.24944,0 -4.25969,1.40019 -5.04175,3.50988l-34.10975,92.14094l-15.28113,-40.90644c-1.20938,-3.23844 -4.22475,-5.332 -7.68087,-5.332c-3.46956,0 -6.49031,2.10163 -7.69163,5.35888l-7.83944,21.20975c-0.11019,0.29831 -0.1935,0.602 -0.24725,0.91106l-6.9445,18.76144l-34.42419,-92.15975c-0.78744,-2.10162 -2.79231,-3.49375 -5.03637,-3.49375z" fill="#000000"></path></g></g></svg></td>
                                            <td><b>Activated</b></td>
                                            <td><b>Activated</b></td>
                                            <td><b>Enabled</b></td>
                                            <!--<td style=" border-right-width: 0px;padding: 5px;background-color: white">-->
                                            <!--    <div class="btn-group">-->
                                            <!--        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                            <!--            Authorized-->
                                            <!--        </button>-->
                                            <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                            <!--            <button class="dropdown-item" type="button">Authorized</button>-->
                                            <!--            <button class="dropdown-item" type="button">Un Authorized</button>-->
                                            <!--        </div>-->
                                            <!--    </div>  -->
                                            <!--</td>-->
                                            <!--<td style=" border-right-width: 0px;border-left-width: 0px;padding: 5px;background-color: white">                                                    <div class="btn-group">-->
                                            <!--        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                            <!--            POD-->
                                            <!--        </button>-->
                                            <!--        <div class="dropdown-menu dropdown-menu-right">-->
                                            <!--            <button class="dropdown-item" type="button">Authorized</button>-->
                                            <!--            <button class="dropdown-item" type="button">Un Authorized</button>-->
                                            <!--        </div>-->
                                            <!--    </div></td>-->
                                            <!--<td style=" border-left-width: 0px;padding: 5px;background-color: white">-->
                                            <!--    <button style="background-color:#000000;color: white;height: 40px;width: 200px;border-radius: 6px;font-size: 15px">Logistic</button>-->
                                            <!--    <button style="background-color:#000000;color: white;height: 40px;width: 200px;border-radius: 6px;font-size: 15px">Disable Inventory Sync</button>-->
                                            <!--</td>-->
                                            <td>
                                            <button type="button" class="btn btn-outline-danger" >
                                            Remove Store
                                        </button></td>
                                        </tr>
                                        <tr>
                                            <td><b>2019-05-20</b></td>
                                            <td><b>Doe</b></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 height="30"
                                                 viewBox="0 0 172 172"
                                                 style=" fill:#000000;;margin-top: 10px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M110.0585,162.68513c-2.21719,0 -4.18712,-1.24431 -5.1385,-3.2465l-16.51738,-43.4945c-0.29563,-0.77937 -0.97556,-0.86538 -1.25506,-0.86538c-0.2795,0 -0.96212,0.086 -1.25775,0.87075l-16.29163,43.27681c-1.03737,2.20913 -3.00731,3.45881 -5.22988,3.45881c-2.21719,0 -4.18444,-1.24431 -5.1385,-3.2465l-53.019,-139.67475c-0.31444,-0.82237 -0.20156,-1.75225 0.301,-2.47787c0.50256,-0.72831 1.32762,-1.161 2.21181,-1.161h21.5c1.12069,0 2.12581,0.69606 2.51819,1.74687l35.68462,95.54331c0.29294,0.78744 0.97825,0.87344 1.25775,0.87075c0.28219,0 0.9675,-0.08331 1.26044,-0.87344l8.31781,-22.4675c0.0215,-0.20694 0.0645,-0.4085 0.13169,-0.59663l7.83944,-21.20975c0.80894,-2.18762 2.838,-3.60394 5.17075,-3.60394c2.322,0 4.35106,1.40556 5.16537,3.58244l16.54156,44.29537c0.29294,0.78744 0.97825,0.87344 1.26044,0.87075c0.2795,0 0.96481,-0.08331 1.26044,-0.87344l35.3675,-95.53525c0.38969,-1.04812 1.3975,-1.74956 2.52088,-1.74956h10.75c0.8815,0 1.70925,0.43269 2.20913,1.15831c0.50256,0.72831 0.61544,1.65012 0.30369,2.47787l-52.49763,139.46513c-1.03469,2.20913 -3.00731,3.45881 -5.22719,3.45881z" fill="#000000"></path><path d="M6.07375,17.76706l54.88144,143.018c7.25625,-2.86219 9.202,-15.34562 6.39356,-22.6395l-41.17787,-107.17212c-2.81112,-7.29387 -12.48612,-12.97794 -20.09712,-13.20638zM87.59638,113.39906l19.00869,48.97163c7.25625,-2.86219 9.202,-15.34563 6.39356,-22.6395l-7.51425,-18.12181c-2.81113,-7.29387 -10.277,-7.98456 -17.888,-8.21031z" fill="#333333"></path><path d="M143.82694,16.57919c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39212,0.516 2.10162,2.06131 1.58831,3.45344zM139.16412,29.18088c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86513c1.39213,0.516 2.10431,2.06131 1.58831,3.45344zM134.504,41.78525c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86512c-1.39213,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86513c1.39213,0.516 2.10163,2.06131 1.58831,3.45344zM125.17838,66.99131c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39212 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39213,0.51331 2.10431,2.06131 1.58831,3.45344zM129.84119,54.38694c-0.516,1.39213 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86512c-1.39212,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39213 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39212,0.516 2.10431,2.06131 1.58831,3.45344zM120.51825,79.593c-0.516,1.39212 -2.06131,2.10431 -3.45344,1.58831l-5.04175,-1.86513c-1.39213,-0.516 -2.10431,-2.06131 -1.58831,-3.45344c0.516,-1.39213 2.06131,-2.10431 3.45344,-1.58831l5.04175,1.86512c1.39213,0.516 2.10162,2.06131 1.58831,3.45344zM28.1865,45.23063c-1.08037,0 -2.10162,-0.65844 -2.51012,-1.73075l-3.83506,-10.04319c-0.52944,-1.38675 0.16662,-2.94012 1.55069,-3.46956c1.39213,-0.52944 2.94012,0.16931 3.46956,1.55337l3.83506,10.04319c0.52944,1.38675 -0.16662,2.94013 -1.55069,3.46956c-0.31444,0.12362 -0.63963,0.17737 -0.95944,0.17737zM39.69438,75.3575c-1.08037,0 -2.10163,-0.65844 -2.51013,-1.73075l-7.67012,-20.08637c-0.52944,-1.38675 0.16662,-2.94013 1.55069,-3.46956c1.38944,-0.52675 2.94012,0.16931 3.46956,1.55337l7.67013,20.08637c0.52944,1.38675 -0.16662,2.94013 -1.55069,3.46956c-0.31712,0.12362 -0.63963,0.17737 -0.95944,0.17737z" fill="#000000"></path><path d="M30.22363,18.8125l35.68731,95.54331c0.65306,1.74688 2.2145,2.62031 3.77594,2.62031c1.56681,0 3.13094,-0.87881 3.78131,-2.63106l8.49519,-22.94319l-0.04569,-0.11825l7.83944,-21.20975c0.45419,-1.23087 1.55338,-1.84631 2.64987,-1.84631c1.09381,0 2.19031,0.61275 2.64719,1.83825l16.54425,44.29269c0.65306,1.74687 2.2145,2.62031 3.77594,2.62031c1.56681,0 3.13094,-0.87881 3.78131,-2.63106l35.36481,-95.53525h10.75l-52.49762,139.46513c-0.54287,1.14488 -1.62863,1.72 -2.71438,1.72c-1.08306,0 -2.16881,-0.56975 -2.71169,-1.71194l-16.43137,-43.29025c-0.65844,-1.73344 -2.2145,-2.6015 -3.76788,-2.6015c-1.55875,0 -3.1175,0.87075 -3.77325,2.61225l-16.28894,43.27412c-0.54287,1.14488 -1.62862,1.72 -2.71438,1.72c-1.08306,0 -2.16881,-0.56975 -2.71169,-1.71194l-52.93569,-139.47587h21.5M30.22363,13.4375h-21.5c-1.76569,0 -3.42119,0.86806 -4.42363,2.322c-1.00244,1.45394 -1.22819,3.30831 -0.602,4.96112l52.93569,139.47319c0.05106,0.13706 0.11019,0.27144 0.172,0.40312c1.40287,2.94819 4.3,4.77837 7.56531,4.77837c3.27338,0 6.17587,-1.83825 7.57337,-4.79719c0.06181,-0.13169 0.11825,-0.26606 0.172,-0.40312l15.03656,-39.947l15.16825,39.96581c0.05106,0.13706 0.11019,0.27144 0.172,0.40313c1.40287,2.94819 4.3,4.77837 7.56531,4.77837c3.27338,0 6.17588,-1.83825 7.57337,-4.79719c0.06181,-0.13169 0.11825,-0.26606 0.172,-0.40313l52.49763,-139.46781c0.62081,-1.65012 0.39238,-3.50181 -0.61006,-4.95306c-1.00512,-1.45125 -2.65794,-2.31663 -4.42094,-2.31663h-10.75c-2.24944,0 -4.25969,1.40019 -5.04175,3.50988l-34.10975,92.14094l-15.28113,-40.90644c-1.20938,-3.23844 -4.22475,-5.332 -7.68087,-5.332c-3.46956,0 -6.49031,2.10163 -7.69163,5.35888l-7.83944,21.20975c-0.11019,0.29831 -0.1935,0.602 -0.24725,0.91106l-6.9445,18.76144l-34.42419,-92.15975c-0.78744,-2.10162 -2.79231,-3.49375 -5.03637,-3.49375z" fill="#000000"></path></g></g></svg></td>
                                            <td><b>Activated</b></td>
                                            <td><b>Activated</b></td>
                                            
                                            <td><b>Enabled</b></td>
                                            <td>
                                            <button type="button" class="btn btn-outline-danger" >
                                            Remove Store
                                        </button></td>
                                        </tr>

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
}else {
          ?>
          <script>
          window.location.href= 'signin.php';
          </script>
        <?php
}
?>