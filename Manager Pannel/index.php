<!-- ############################## Header Section ############################## -->
<?php include("header.php");
$date = date("Y/m/d");
$month = date('m');
?>


<!-- ############################## Right Side Menue Section ############################## -->

<?php
$count_day = 0;
$sql = "SELECT * FROM orders  where ((date='$date')&&(status='Paid & Delivered')) ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $count_day++;
  }
} ?>

<?php
$total_month = 0;
$sql = "SELECT * FROM orders  where ((month='$month')&&(status='Paid & Delivered')) ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $total_month += $row['total'];
  }
} ?>

<?php
$total = 0;
$sql = "SELECT * FROM orders  where status='Paid & Delivered' ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $total += $row['total'];
  }
} ?>
<!-- ############################## Manager Top section ############################## -->
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon l-bg-purple">
        <i class="fas fa-cart-plus"></i>
      </div>
      <div class="card-wrap">
        <div class="padding-20">
          <div class="text-right">
            <h3 class="font-light mb-0">
              <i class="ti-arrow-up text-success"></i><?php echo  $count_day; ?>
            </h3>
            <span class="text-muted">Today's Total Sale</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon l-bg-cyan">
        <i class="fas fa-chart-line"></i>
      </div>
      <div class="card-wrap">
        <div class="padding-20">
          <div class="text-right">
            <h3 class="font-light mb-0">
              <i class="ti-arrow-up text-success"></i><?php echo $total_month ?>
            </h3>
            <span class="text-muted">This Month Sale</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon l-bg-orange">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <div class="card-wrap">
        <div class="padding-20">
          <div class="text-right">
            <h3 class="font-light mb-0">
              <i class="ti-arrow-up text-success"></i><?php echo $total ?>
            </h3>
            <span class="text-muted">Total Sale</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon l-bg-purple">
        <i class="fas fa-cart-plus"></i>
      </div>
      <div class="card-wrap">
        <div class="padding-20">
          <div class="text-right">
            <h3 class="font-light mb-0">
              <i class="ti-arrow-up text-success"></i><?php echo  $count_day; ?>
            </h3>
            <span class="text-muted">Today's Total Sale</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon l-bg-cyan">
        <i class="fas fa-chart-line"></i>
      </div>
      <div class="card-wrap">
        <div class="padding-20">
          <div class="text-right">
            <h3 class="font-light mb-0">
              <i class="ti-arrow-up text-success"></i><?php echo $total_month ?>
            </h3>
            <span class="text-muted">This Month Sale</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon l-bg-orange">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <div class="card-wrap">
        <div class="padding-20">
          <div class="text-right">
            <h3 class="font-light mb-0">
              <i class="ti-arrow-up text-success"></i><?php echo $total ?>
            </h3>
            <span class="text-muted">Total Sale</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- ############################## Body Section ############################## -->

<!-- Order List -->




<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <h3>View Your Order List</h3>
  </div>
  <?php
  $sql = "SELECT * FROM table_no where status='busy' ORDER BY id ASC";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $table_no=$row['table_no'];
  ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a href="order_list.php?table_no=<?php echo $table_no?>">
        <div class="card card-statistic-1">
          <div class="card-icon l-bg-purple">
            <i class="fas fa-cart-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="padding-20">
              <div class="text-right">
                <span class="text-muted">Order From Table No.</span>
                <h3 class="font-light mb-0">
                  <i class="ti-arrow-up text-success"></i><?php echo  $row['table_no']; ?>
                </h3>

              </div>
            </div>
          </div>
        </div>
    </a >
      </div>
  <?php }
  } ?>

</div>

<!-- Order Llidst -->




<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>