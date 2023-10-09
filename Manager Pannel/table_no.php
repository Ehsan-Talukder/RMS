<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Table Number</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="table_no_store.php" method="post">

                        <div class="card-body">


                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Full Name</strong></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Table No" value="" name="table_no" required>
                                </div>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                                </div>
                            </div>
                            
                                
                          

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


<section>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Total Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th>Sl.</th>
                <th>Table NO</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $sl=0;
              $sql = "SELECT * FROM table_no order by id desc";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $sl++;
              ?>

                  <tr>
                    <td><?php echo $sl ?></td>
                    <td>
                      <div class=""><?php echo $row['table_no'] ?></div>
                    </td>
                    <td>
                      <div><?php echo $row['status'] ?></div>
                    </td>
                    <td>
                      <a href="#" class="btn btn-success">Edit</a>
                      <a href="#"class="btn btn-danger">Delete</a>
                  </tr>
              <?php }
              } ?>
              
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>