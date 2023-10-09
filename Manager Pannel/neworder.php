<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
// include("config.php");
//error_reporting(0); 
?>

<!-- ############################## Right Side Menue Section ############################## -->
<!--<?php
    // <!--include("side-menue.php");
    ?>-->


<!-- Food Category -->
<form action="place_order.php" method="POST">
  <div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-pills" id="myTab3" role="tablist">
            <form action="order_store.php" method="post">

              <div class="card-body">

                <div class="form-group row">

                  <label class="col-sm-3 col-form-label"><strong>Food Name</strong></label>
                  <div class="col-sm-9">
                    <select class="form-control selectric" name="name">
                      <option style="display:none">Choose Your Food Here</option>
                      <?php

                      $sql = "SELECT * FROM food_item  ORDER BY id ASC";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                          <option name="name" value=<?php echo $row['id'] ?>><?php echo $row['name'] ?></option>
                      <?php }
                      } ?>

                    </select>
                  </div>
                </div>






                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Quantity" value="quantity" name="quantity" required>
                  </div>
                </div>

                <div class="form-group row">

                  <label class="col-sm-3 col-form-label"><strong>Table No</strong></label>
                  <div class="col-sm-9">
                    <select class="form-control selectric" name="table_no" value="table_no">
                      <option style="display:none">Take Away</option>
                      <?php

                      $sql = "SELECT * FROM table_no  ORDER BY id ASC";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                          <option><?php echo $row['table_no'] ?></option>
                      <?php }
                      } ?>

                    </select>
                  </div>
                </div>





                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Place Order</button>
                </div>

            </form>
          </ul>

        </div>
      </div>
    </div>
  </div>



  <!-- ############################## Footer Section ############################## -->
  <?php include("footer.php"); ?>