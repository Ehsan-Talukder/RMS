<?php include("header.php");
?>



<section class="section">
    <div class="section-body">
        <div class="invoice">

            <?php

            $sql = "SELECT * FROM orders where ((table_no=9)&&((status!='not_confirmed')&&(status!='Paid & Delivered'))) ORDER BY id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Invoice</h2>
                                    <div class="invoice-number">Order #<?php echo $row['id'] ?></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 text-md-left">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            <?php echo $row['date'] ?><br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Order Summary</div>
                                <p class="section-lead">All items here cannot be deleted.</p>
                                <div class="table-responsive">

                                    <?php
                                    $total = 0;
                                    $appox_total = 0;
                                    $sql = "SELECT * FROM orders where ((status='not_confirmed')&&(table_no=9)) ORDER BY id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $total += $row['total'];
                                            $appox_total += $row['total'];
                                    ?>
                                            <table class="table table-striped table-hover table-md">
                                                <tr>
                                                    <th>Item</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-right">Totals</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td class="text-center"><?php echo $row['price'] ?></td>
                                                    <td class="text-center"><?php echo $row['quantity'] ?></td>
                                                    <td class="text-right"><?php echo $row['total'] ?></td>
                                                </tr>
                                            </table>
                                    <?php }
                                    } ?>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="section-title">Payment Method</div>
                                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay
                                            invoices.</p>
                                        <div class="images">
                                            <img src="assets/img/cards/visa.png" alt="visa">
                                            <img src="assets/img/cards/jcb.png" alt="jcb">
                                            <img src="assets/img/cards/mastercard.png" alt="mastercard">
                                            <img src="assets/img/cards/paypal.png" alt="paypal">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg"><?php echo  $appox_total ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>
            <hr>
            <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">
                    <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process
                        Payment</button>
                    <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                </div>
                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
            </div>
        </div>
    </div>
</section>



<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>


<?php include("footer.php"); ?>