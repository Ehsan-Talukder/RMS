<!-- ############################## Header Section ############################## -->
<?php include("header.php");
$table_no = $_GET['table_no'];
?>


<!-- ############################## Right Side Menue Section ############################## -->
<?php include("side-menue.php"); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Order From <?php echo $table_no ?></h4>
                <div class="card-header-form">
                    <form>
                    <div style="text-align: center;">
                            <a href="payment.php?table_no=<?php echo $table_no ?>" class="btn btn-primary">Go for Payment</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th class="p-0 text-center">Name</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                        <?php

                        $sql = "SELECT * FROM orders where ((table_no=9)&&((status!='not_confirmed')&&(status!='Paid & Delivered'))) ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <tr>
                                    <td class="p-0 text-center"><?php echo $row['name'] ?></td>
                                    <td>
                                        <div class=""><?php echo $row['price'] ?></div>
                                    </td>
                                    <td>
                                        <?php echo $row['quantity'] ?>
                                    </td>
                                    <td>
                                        <div class="badge badge-success"><?php echo $row['status'] ?></div>
                                    </td>

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