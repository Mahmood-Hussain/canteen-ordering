  <?php
  include_once 'common.php';
  include_once 'action.php';
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-shopping-bag"></i>
              </div>
              <?php
                $where = array("emp_name"=>$_SESSION['user']);
                $row = $obj->sum("total_price","orders", $where);
               ?>
              <div class="mr-5">&#x20b9; <?php echo $row[0]; ?> Total Sale!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <?php
                $where = array(1=>1);
                $row = $obj->count("id","items", $where);
               ?>
              <div class="mr-5"><?php echo $row[0]; ?> Total tems!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <?php
                $where = array("emp_name"=>$_SESSION['user']);
                $row = $obj->count("id","orders", $where);
               ?>

              <div class="mr-5"><?php echo $row[0]; ?> Orders by <?php echo $_SESSION['user']; ?> in Total</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <?php
                $where = array("emp_name"=>$_SESSION['user']);
                $row = $obj->sum("quantity","orders", $where);
               ?>
              <div class="mr-5"> <?php echo $row[0]; ?> Total Quantity Sold!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Line Chart-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Total Sales Done For Each day</div>
        <div class="card-body">
          <canvas id="myLineChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">A Graph comparing the total sales done for each day</div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
          <div class="card mb-10">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Total Sales Done Product wise</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
              </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <!-- Example Pie Chart Card-->
          <div class="card mb-10">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Total Products sold by quantity</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="40"></canvas>
            </div>
            <div class="card-footer small text-muted">A pie chart showing Products sold by quantity</div>
          </div>
          <!-- Example Notifications Card-->
        </div>
      </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © ABS Restaurant 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="post" action="action.php">
              <button type="submit" class="btn btn-danger" name="logout">Logout</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/lineChart.js"></script>
    <script src="../js/barChart.js"></script>
    <script src="../js/pieChart.js"></script>
  </div>
</body>

</html>
