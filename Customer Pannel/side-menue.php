<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <!-- ############################## Right Side Menue Section ############################## -->
    <style>
        .settingSidebar {

            width: 351px;
            right: -351px;
            padding-bottom: 30px;
            ;

        }
    </style>

    <?php
    $count = 0;
    $sql = "SELECT * FROM orders where ((table_no=9)&&(status='not_confirmed')) ORDER BY id ASC";
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
                            <div class="container">
                                <div class="tab featured-tab-area">
                                    <div class="row justify-content-center">

                                    </div>
                                    <div class="tab_content current active">

                                        <div class="tabs_item current">
                                            <div class="row justify-content-center">

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

                                                        <div class="col col-md-12 col-sm-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-12" style="text-align: right;">
                                                                    <form action="order_delete.php?id=<?php echo $row['id'] ?>" method="post">
                                                                        <button type="submit" class="btn btn-icon" style="margin-left: 5px">X</button>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5><a href="#" value="name" name="name"><?php echo $row['name'] ?></a></h1>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6 value="price" name="price">Price: <?php echo $row['price'] ?></h6>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h2 class="badge badge-success"><?php echo $row['status'] ?></h4=2>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>Q:<?php echo $row['quantity'] ?></h6>
                                                                </div>

                                                            </div>

                                                        </div>
                                                <?php }
                                                } ?>
                                            </div>
                                        </div>


                                        <p id="not_found"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-body text-center">
                                Total Bill:<?php echo  $appox_total ?>
                                <!-- <button class="btn btn-primary" id="swal-6">Launch</button> -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-body text-center">
                                <a href="reset.php?table_no=9" type="reset" value="reset" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i></a>
                                <a href="confirm_order.php?table_no=9" class="btn btn-icon icon-left btn-success btn-restore-theme"> Confirm</a>
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