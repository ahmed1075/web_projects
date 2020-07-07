<?php
session_start();
include 'connection.php';
$_SESSION["heading"]="Private Product List";
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
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Lato"
    />
    <style>
      .hh ul li::before {
        content: "\2022";
        color: #ecbe44;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
      }

      h1,
      h2,
      h3,
      h5,
      h6,
      p,
      a,
      li {
        font-family: Lato;
      }
      .aa:hover {
        border: 2px solid black;
      }
      .aa {
        border: 2px solid #f0f0f7;
      }
      .ll:hover {
        background-color: #222222;
        color: #ecbe44;
      }
      .ll {
        border-radius: 20px;
        height: 50px;
        background-color: #333333;
        color: white;
        border-color: #333333;
      }
      .dropbtn {
        background-color: #4caf50;
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
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown:hover .dropbtn {
        background-color: #3e8e41;
      }
      b,
      th,
      td {
        font-family: Raleway;
      }

      @media screen and (min-width: 768px) {
        .modal-dialog {
          width: 700px; /* New width for default modal */
        }
        .modal-sm {
          width: 350px; /* New width for small modal */
        }
      }
      @media screen and (min-width: 992px) {
        .modal-lg {
          width: 950px; /* New width for large modal */
        }
      }
      .model-span span{
          margin: 3px;
          padding: 5px;
          border: 1px solid #ecbe44;
          border-radius: 5px;
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
              <!--<br>-->
              <!--<button type="submit" class="btn btn-outline-dark"><b>Sourcing limit 0/20</b></button>-->

              <!--<button type="submit" class="btn btn-warning" ><b>Sourcing Form</b></button>-->

              <!--<br>-->
              <br />
              <!-- Modal -->
              <!-- Modal -->
 
  
</div>
              <div class="row table-responsive">
                <table
                  class="table table-bordered"
                  id="myTable"
                  style="text-align: center;"
                >
                  <thead style="background-color: #333333; color: white;">
                    <tr>
                      <th>Product Name</th>
                      <th>SKU</th>
                      <th>Product Type</th>
                      <th>Product Price</th>
                      <th>Weight</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><b>name will be here</b></td>
                      <td><b>CH424371</b></td>
                      <td><b>Type will be here</b></td>
                      <td><b>500$</b></td>
                      <td><b>60kg</b></td>
                      <td>
                        <button
                          type="button"
                          data-toggle="modal"
                          data-target="#myModal"
                          class="btn btn-outline-dark"
                        >
                          Details
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td><b>name will be here</b></td>
                      <td><b>CH424371</b></td>
                      <td><b>Type will be here</b></td>
                      <td><b>500$</b></td>
                      <td><b>60kg</b></td>
                      <td>
                        <button
                          type="button"
                          data-toggle="modal"
                          data-target="#myModal"
                          class="btn btn-outline-dark"
                        >
                          Details
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td><b>name will be here</b></td>
                      <td><b>CH424371</b></td>
                      <td><b>Type will be here</b></td>
                      <td><b>500$</b></td>
                      <td><b>60kg</b></td>
                      <td>
                        <button
                          type="button"
                          data-toggle="modal"
                          data-target="#myModal"
                          class="btn btn-outline-dark"
                        >
                          Details
                        </button>
                      </td>
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
    <div class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content" >
           
            <div class="modal-body">
                <center><h3>Product Details</h3></center>
             <form> 
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6" style="border: 1px solid #D9D9D9; border-radius: 10px;;"><img src="../product_images/929090336212_8.png" width="auto" height="300"></div>
                    <div class="col-lg-6">
                        <h5>Escape Blanket</h5>
                        <div>
                            <span>Product Price: </span> <span>$10.22</span>
                        </div>
                        <div class="model-span" style="margin-top:10px;">
                            <p>Quantity:  <span>1pc</span> <span>2pc</span> <span>3pc</span> <span>2Mx2M</span> </p>
                        </div>
                        <div class="form-group" style="margin-top:10px;">
                            <table>
                                <tr>
                                    <td><label>Warehouse: &nbsp; </label></td>
                                    <td><select class="form-control">
                                        <option disabled >---Please Select----</option>
                                        <option value="United States"> United States </option>
                                        <option value="United Kigdom"> United Kigdom </option>
                                        <option value="Nepal"> Nepal</option>
                                        <option value="China"> China</option>
                    
                                        </select></td>
                                </tr>
    
                                <tr style="margin-top:20px;">
                                    <td><label>Shipping Methode: &nbsp;</label></td>
                                    <td><select class="form-control">
                                        <option disabled >---Please Select----</option>
                                        <option value="United States"> China Post </option>
                                        <option value="United Kigdom"> DHL </option>
                                        <option value="Nepal"> UPS</option>
                                        <option value="China"> China Mail</option>
                    
                                        </select></td>
                                </tr>
                            </table>
                            
                            
                          
                            </div>
                        <hr>
    <div style="margin-top:10px;" >
        <p>
        <span>Shipping Cost</span></p>
    </div>
    <div>
        <table><tr style="margin-top:10px;"><td>Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td><td><input type="number" class="form-control"></td></tr></table>
                    </div>
                </div>
                <div class="col-lg-6"></div>
                  <div class="col-lg-6">
                    <div style="margin-top:10px;">
                        <span>Total Dropshipping Price: </span> <span>$10.22</span>
                    </div>
                    <div style="margin-top:10px;">
                        <span>Inventory: </span> <span>10000</span>
                    </div>
                    <div style="margin-top:10px;">
                        <span>Processing Time: </span> <span>10000</span>
                    </div>
                    <div style="margin-top:10px;">
                        <span>Weight: </span> <span>10000</span>
                    </div>
                    <div style="margin-top:10px;">
                        <span>SKU: </span> <span>10000</span>
                    </div>
                    <div style="margin-top:10px;">
                        <span>Product Attributes: </span> <span>10000</span>
                    </div>
                    <div style="margin-top:10px;">
                        <span>Lists: </span> <span>10000</span>
                    </div>
                 
              </div>
            </form>
            </div>
    
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
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
  window.location.href = "signin.php";
</script>
<?php
}
?>
