<?php
include_once 'common.php';
include_once 'action.php';
 ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">make an order</li>
      </ol>
      <div class="container">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Enter The Deatils Of An Order</div>
          <div class="card-body">
          <form method="post" action="action.php">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Choose Date</label>
                    <input class="form-control" type="date" name="order_date" required>
                  </div>
                  <div class="col-md-6">
                    <label>Quantity</label>
                    <input input type="number" class="form-control" name="quantity" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Item</label>
                <select class="form-control" name="item" required>
                  <?php
                    $items = $obj->fetch("items");
                    foreach ($items as $row) {
                  ?>
                  <option class="doopdown-menu" value="<?php echo $row["title"]; ?>"><?php echo $row["title"]; ?></option>
                <?php } ?>
                </select>
              </div>
              <input type="hidden" name="emp_name" value="<?php echo $_SESSION['user']; ?>">
              <button type="submit" name="save_order" class="btn btn-primary btn-block">Make Order</button>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
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
