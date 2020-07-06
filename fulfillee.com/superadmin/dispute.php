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
            <div class="container-fluid">
              <div class="row">
                     <h4 style="margin-top:20px">Order Dispute Form</h4>             <br>             <hr style="background-color:#c0c7bf;height:1px;width:100%">             <br>
               
               <div class="col-md-12">
                   <div class="row">
                       <div class="col-md-6">
                           <label><b>Dispute Type</b> </label>
                           <select class="form-control" style="background-color:#e8f1ff">
                               <option>Select Type</option>
                           </select>
                       </div>
                        <div class="col-md-6">
                           <label><b>Resolution</b> </label>
                           <select class="form-control" style="background-color:#e8f1ff">
                               <option>Select Type</option>
                           </select>
                       </div>
                   <div class="col-md-4" style="margin-top:10px">
                           <label><b>Evidence Upload</b> </label>
                           <input style="background-color:#e8f1ff" type="file" class="form-control">
                               
                       </div>
                   
                   
                    <div class="col-md-8" style="margin-top:10px">
                           <label><b>Text Box</b> </label>
                           <textarea style="background-color:#e8f1ff;height:100px" col="250" row="10"  class="form-control" placeholder="Type Here"></textarea>
                       </div>
                   
                   
                   <div class="col-md-12" style="margin-top:10px">                    
                                           <center><a href="#"><div style="background-color:black;color: white;height: 40px;width: 200px;border-radius: 30px;margin-bottom:"><p style="margin-top:10px;padding-top: 7px">Submit Dispute</p></div></a></center><br>
 </div>
                   
                   <br>

                   
                   </div>
                   
               </div>
               
               
               
               
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
}else {
          ?>
          <script>
          window.location.href= 'signin.php';
          </script>
        <?php
}
?>