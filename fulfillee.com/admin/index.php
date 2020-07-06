<?php
session_start();
include 'connection.php';
$_SESSION["heading"]="Overview";
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
 <script type="application/javascript" src="rbar.js"></script>
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
      
      
      @media screen and (max-width: 940px) {
  .graph{
  overflow-x:scroll;
  }
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
                >
                  <h6 style="color: #ecbe44; margin-top: 10px;"><b>Total User</b></h6>
                  <h4><b>26,300</b></h4>
                </div>
                <div
                  class="col-lg-2 aa"
                  style="
                    margin: 20px 10px 10px 10px;
                    background-color: #F0F0F7;
                    border-radius: 10px;
                    font-family: Raleway;
                  "
                >
                  <h6 style="color: #ecbe44; margin-top: 10px;">
                    <b>Total Product</b>
                  </h6>
                  <h4><b>26,300</b></h4>
                </div>
                <div
                  class="col-lg-2 aa"
                  style="
                    margin: 20px 10px 10px 10px;
                    background-color: #F0F0F7;
                    border-radius: 10px;
                    font-family: Raleway;
                  "
                >
                  <h6 style="color: #ecbe44; margin-top: 10px;">
                    <b>Total Orders</b>
                  </h6>
                  <h4><b>26,300</b></h4>
                </div>
                <div
                  class="col-lg-2 aa"
                  style="
                    margin: 20px 10px 10px 10px;
                    background-color: #F0F0F7;
                    border-radius: 10px;
                    font-family: Raleway;
                  "
                >
                  <h6 style="color: #ecbe44; margin-top: 10px;"><b>Total Sales</b></h6>
                  <h4><b>26,300</b></h4>
                </div>
                <div
                  class="col-lg-2 aa"
                  style="
                    margin: 20px 10px 10px 10px;
                    background-color: #F0F0F7;
                    border-radius: 10px;
                    font-family: Raleway;
                  "
                >
                  <h6 style="color: #ecbe44; margin-top: 10px;">
                    <b>Total Profits</b>
                  </h6>
                  <h4><b>26,300</b></h4>
                </div>
              </div>
            </div>
          </div>
          <br />
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Latest Announcement</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

          <div class="container">
            <div class="row">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div
                class="col-md-6 col-lg-6 col-sm-6 col-xs-6 graph"
                style="
                  background-color: white;
                  height: 300px;
                  border-radius: 10px;
                "
              >
                <!--<img-->
                <!--  src="img/Calander.PNG"-->
                <!--  class="img-responsive"-->
                <!--  style="height: 250px; width: 100%;"-->
                <!--/>-->
                <canvas
      id="myCanvas"
      height="300"
      width="520"
    "
    >
    </canvas>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div
                class="col-md-5 col-sm-5 col-lg-5 col-xs-5 hh"
                style="
             background: transparent linear-gradient(344deg, var(--unnamed-color-111111) 0%, #666666 100%) 0% 0% no-repeat padding-box;
background: transparent linear-gradient(344deg, #111111 0%, #666666 100%) 0% 0% no-repeat padding-box;
box-shadow: 0px 4px 12px #A1ABC681;
                 padding-bottom:10px; ;
                  border-radius: 10px;
                "
              >
                <div class="row" style="margin-leftt:6px">
                  <div class="col-lg-8">
                    <h4 style="color: white; margin-top: 15px;">
                      Latest Announcement
                    </h4>

                    <p style="opacity: 0.5; color: white;margin-top:-5px">
                      You have 3 Announcements
                    </p>
                  </div>
                </div>

                <ul style="margin-left:-20px">
                  <li >
                    <span data-toggle="modal" data-target="#myModal" style="color: white;text-align:justify;font-size:15px"
                      >Lorem ipsum dolor, sit amet consectetur adipisicing elit.Duis sit amet luctus metus
                      </span
                    >

                    <p style="color: white; opacity: 0.8;font-size:13px">
                      <span style="color: #ecbe44;">Publish:</span>12 June 2020
                    </p>
                  </li>
                  <li >
                    <span data-toggle="modal" data-target="#myModal" style="color: white;font-size:15px"
                      >Lorem ipsum dolor, sit amet consectetur adipisicing elit.Duis sit amet luctus metus</span
                    >

                    <p style="color: white; opacity: 0.8;font-size:13px">
                      <span style="color: #ecbe44;">Publish:</span>12 June 2020
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
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
    <script type="application/javascript">
      var data = [
        { Jan: 90 },
        { Feb: 80 },
        { Mar: 65 },
        { Apr: 110 },
        { May: 55 },
        { Jun: 55 },
        { Jul: 65 },
        { Aug: 75 },
        { Sep: 85 },
        { Oct: 95 },
        { Nov: 115 },
        { Dec: 5 },
      ];
      var barcolor = [
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
        "#ecbe44",
      ];
      var obj = {
        barId: "myCanvas", // Need To pass canvas id  and mandatory to generate the bar graph
        barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
        barColour: barcolor, // Bar colour as array and the default value is '#020202'
        barStroke: 10, // Bar Stroke as per your requirement and the default value is 50
        barSpaces: 35, // Space between 2 bar graph and the default value is 80
        barInnerPadding: 40, // Padding inside all side of the canvas and the default value is 80
        barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
        barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
        barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
        barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
        barTextFont: "14px Lato", // Define font size with font family name and the default value is 14px Arial
        barDivision: 5, // Define the division to the Y-Axis and the default value is 5
        barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
        barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
        barScaleDivisionY: 10, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null
        barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
        barScaleDivisionColour: "#333", //Define the stroke colour of the scale division and the default value is #333
        barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
        barAxisLineColour: "#333", //Define the stroke colour of the X & Y-axis line and the default value is #333
        barMaxHeight: 120, // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
      };

      generateBarGraph(obj);
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