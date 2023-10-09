<!-- ############################## Header Section ############################## -->
<?php
$date = date("Y/m/d");
?>


<?php include("header.php"); ?>

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
<!-- ############################## Right Side Menue Section ############################## -->
<?php include("side-menue.php"); ?>



<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Total Order Soled</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Date</th>
                <th>Total Price</th>
                <th>Table Number</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $sql = "SELECT * FROM orders where status='Paid & Delivered' ORDER BY id ASC";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

              ?>

                  <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td>
                      <div class=""><?php echo $row['price'] ?></div>
                    </td>
                    <td>
                      <div><?php echo $row['date'] ?></div>
                    </td>
                    <td>
                      <div class=""><?php echo $row['total'] ?></div>
                    </td>
                    <td>
                      <div>
                        <?php echo $row['table_no'] ?>
                      </div>
                  </tr>
              <?php }
              } ?>
              <th>
                <h1>
                  Total Sales: <?php echo $total ?>
                </h1>
              </th>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>