<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>


<!-- ############################## Right Side Menue Section ############################## -->




<div class="row">
    <div class="col-12">


    <div class="card">
            <div class="card-header">
                <h4>Your Order List</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th class="p-0 text-center">Name</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM orders where status='Order_Placed' ORDER BY id ASC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?> <td class="p-0 text-center"><?php echo $row['name'] ?></td>
                                                                <td>
                                        <div class=""><?php echo $row['price'] ?></div>
                                    </td>
                                    <td>
                                    <?php echo $row['quantity'] ?>
                                    </td>
                                    <td> <div class="badge badge-success"><?php echo $row['status'] ?></div></td>
                                    
                                    <td><a href="serve.php?id=<?php echo $row['id']?>" class="btn btn-primary">Ready to Serve</a></td>
                        </tr>
                            <?php }
                            } ?>

                    </table>
                </div>
            </div>
        </div>

      
    </div>
</div>




<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>