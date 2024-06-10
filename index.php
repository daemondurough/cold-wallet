<?php
     include ('connection.php');
     include ('login-action.php');
    /*session_start();*/
    
?>

<?php
     if (!isset($_SESSION['username'])) {
         
         
    include ('login/index.php');
    
    
} else if (isset($_SESSION['username'])) { 
 
 ?>
 
    
    <?php  if (isset($_SESSION['username'])) { $username = $_SESSION['username']; $users = $mysqli->query("SELECT * FROM users WHERE username = '$username'"); while ($user_data = $users->fetch_assoc()) {  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Bounce Rate</p>
                              <h3 class="rate-percentage">32.53%</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Page Views</p>
                              <h3 class="rate-percentage">7,682</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <!--<h4 class="card-title card-title-dash">Performance Line Chart</h4>-->
                                      <table style="width:100%;">
                                        <thead>
                                          <tr class="head">
                                            <th>Cryptocurrency</th>
                                            <th>Total Amount</th>
                                            <th>USD ($)</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                          <tr>
                                            <td>Bitcoin <span>BTC</span></td>
                                            <td>0</td>
                                            <td>0</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!--<h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>-->

                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <!--<div class="chartjs-wrapper mt-4">
                                    <canvas id="performanceLine" width=""></canvas>
                                  </div>-->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>

<?php
    } }}
?>