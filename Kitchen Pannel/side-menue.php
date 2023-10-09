<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <?php
    $name = $_GET['name'];

    ?>
    <!-- ############################## Right Side Menue Section ############################## -->
    <style>
        .settingSidebar {

            width: 500px;
            right: -485px;
            padding-bottom: 30px;
            ;

        }
    </style>

    <?php
    $count = 0;
    $sql = "SELECT * FROM order_list where ((table_no=9)&&(status='not_confirmed')) ORDER BY id ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $count++;
        }
    } ?>


    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <?php echo $count ?>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">
                </div>



                <!-- Table -->


                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>Your Current Orders</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>Items</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th></th>
                                        <th>Total</th>
                                    </tr>
                                    <?php
                                    $total = 0;
                                    $appox_total=0;
                                    $sql = "SELECT * FROM order_list where ((table_no='$table_no')&&(status='not_confirmed')) ORDER BY id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $total += $row['total'];
                                            $appox_total+=$row['total'];

                                    ?>
                                            <tr class="text-center">
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['p_price'] ?></td>
                                                <td>
                                                <?php echo $row['quantiry'] ?>
                                                </td>
                                                <td>
                                                    <form action="order_delete.php?id=<?php echo $row['id'] ?>" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">X</button>
                                                    </form>
                                                </td>
                                                <td><?php echo $row['total'] ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </table>
                            </div>
                        </div>


                        <div class="row">
                            <div class="card-body text-center">
                                Total Bill:<?php echo  $appox_total?>
                                <!-- <button class="btn btn-primary" id="swal-6">Launch</button> -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-body text-center">
                                <a href="reset.php?table_no=<?php echo $table_no?>" type="reset" value="reset" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i></a>
                                <a href="confirm_order.php?table_no=<?php echo $table_no?>" class="btn btn-icon icon-left btn-success btn-restore-theme"> Confirm</a>
                                <!-- <button class="btn btn-primary" id="swal-6">Launch</button> -->
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</body>

</html>