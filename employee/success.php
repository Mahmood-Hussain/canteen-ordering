<?php include_once 'common.php' ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">order placed</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2>Details of Order</h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr>
                  <th>Order Date</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Placed Date</th>
                  <th>Total Price</th>
                  <th>username</th>
                </tr>
                <tr>
                  <?php
                    $myrow = $_SESSION['details'];
                    ?>
                    <td><?php echo $myrow["order_date"]; ?></td>
                    <td><?php echo $myrow["item"]; ?></td>
                    <td><?php echo $myrow["quantity"]; ?></td>
                    <td><?php echo $myrow["auto_date"]; ?></td>
                    <td><?php echo $myrow["total_price"]; ?></td>
                    <td><?php echo $myrow["emp_name"]; ?></td>
                    </tr>
              </table>
            </div>
            <div class="panel-footer">
              <a href="newOrder.php" class="btn btn-primary">Make One More</a>
              <a href="index.php" class="btn btn-success pull-right">Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © ABC Restaurant 2018</small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
