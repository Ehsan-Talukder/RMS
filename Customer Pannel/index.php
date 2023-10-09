$table_no<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>


<!-- ############################## Right Side Menue Section ############################## -->
<?php include("side-menue.php");
$table_no = 9;
?>

<?php

$sql = "SELECT * FROM orders where ((table_no='$table_no')&&(status='Order_Placed')) ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $key = 1;
} else {
    $key = 0;
} ?>

<div class="row">
    <div class="col-12 col-sm-6 col-lg-12">

        <?php if ($key == 1) { ?>
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



                            <?php

                            $sql = "SELECT * FROM orders where ((table_no='$table_no')&&(status='Order_Placed')) ORDER BY id ASC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?> <tr>
                                        <td class="p-0 text-center"><?php echo $row['name'] ?></td>
                                        <td>
                                            <div class=""><?php echo $row['p_price'] ?></div>
                                        </td>
                                        <td>
                                            <?php echo $row['quantiry'] ?>
                                        </td>
                                        <td>
                                            <div class="badge badge-success"><?php echo $row['status'] ?></div>
                                        </td>

                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                            <?php }
                            } ?>

                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>


        <div class="card">
            <div class="card-header">
                <h4>Our Food Items</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');

                        :root {
                            --bodyFonts: 'Josefin Sans', sans-serif;
                            --pinkColor: #5557F3;
                            --titleColor: #000000;
                            --bodyColor: #666666;
                            --lightblueColor: #8D99FF;
                            --whiteColor: #ffffff;
                            --fontSize: 16px;
                            --transition: .5s;
                        }

                        body {
                            padding: 0;
                            margin: 0;
                            font-family: 'Noto Sans', sans-serif !important;
                        }

                        a,
                        a:hover {
                            text-decoration: none !important;
                        }

                        img {
                            max-width: 100%;
                        }

                        hr {
                            margin-top: 0 !important;
                            margin-bottom: 0 !important;
                        }

                        .pt-100 {
                            padding-top: 15px;
                        }

                        .pt-45 {
                            padding-top: 45px;
                        }

                        #not_found {
                            text-align: center;
                            color: red;
                        }

                        .grand-total {
                            margin-top: 1rem;
                            text-align: center;
                            font-weight: 600;
                        }

                        .table {
                            margin-bottom: 0 !important;
                        }

                        .fault-btn {
                            padding: 12px 25px 10px;
                            text-align: center;
                            color: var(--whiteColor) !important;
                            font-size: var(--fontSize);
                            transition: var(--transition);
                            display: inline-block;
                            align-items: center;
                            justify-content: center;
                            position: relative;
                            border-radius: 8px;
                            z-index: 0;
                            background: var(--pinkColor);
                            overflow: hidden;
                            white-space: nowrap;
                            border: 0;
                        }

                        .default-btn:before {
                            content: '';
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            left: 50%;
                            width: 550px;
                            height: 550px;
                            margin: auto;
                            background: var(--lightblueColor);
                            border-radius: 8px;
                            z-index: -1;
                            transform-origin: top center;
                            transform: translateX(-50%) translateY(-5%) scale(0.4);
                            transition: transform .9s;
                        }

                        .default-btn:hover {
                            color: var(--whiteColor) !important;
                        }

                        .default-btn:hover:before {
                            transition: transform 1s;
                            transform: translateX(-45%) translateY(0) scale(1);
                            transform-origin: bottom center;
                        }

                        .btn-success {
                            background-color: #F96B6A !important;
                            border-color: #F96B6A !important;
                        }

                        .featured-area {
                            background-color: #EDEFF9;
                        }

                        .featured-tab-area .tabs {
                            margin: 0;
                            padding: 0;
                            list-style: none;
                            float: right;
                        }

                        .featured-tab-area .tabs li {
                            display: inline-block;
                            line-height: initial;
                            margin-right: 20px;
                        }

                        .featured-tab-area .tabs li a {
                            display: inline-block;
                            position: relative;
                            color: var(--titleColor);
                            padding: 13px 26px 10px;
                            background-color: #fff;
                            border-radius: 5px;
                            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                        }

                        .featured-tab-area .tabs li.active a {
                            background-color: var(--pinkColor);
                            color: var(--whiteColor);
                        }

                        .featured-tab-area .tabs li.current a {
                            background-color: var(--pinkColor);
                            color: var(--whiteColor);
                        }

                        .featured-tab-area-ml .tabs {
                            margin-top: 0 !important;
                            float: left;
                        }

                        .tab .tabs_item {
                            display: none;
                        }

                        .tab .tabs_item:first-child {
                            display: block;
                        }

                        .featured-item {
                            margin-bottom: 30px;
                            background-color: var(--whiteColor);
                            border-radius: 5px;
                            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                        }

                        .featured-item .featured-item-img {
                            position: relative;
                            z-index: 1;
                            transition: 0.3s linear;
                            overflow: hidden;
                        }

                        .featured-item .featured-item-img a {
                            display: block;
                        }

                        .featured-item .featured-item-img a img {
                            border-top-left-radius: 5px;
                            border-top-right-radius: 5px;
                            border: 4px solid var(--whiteColor);
                            transition: 0.3s linear;
                        }

                        .featured-item .featured-item-img a img:hover {
                            scale: 1.08;
                        }

                        .featured-item .content {
                            padding: 20px 15px;
                        }

                        .featured-item .content h3 {
                            margin-bottom: 10px;
                        }

                        .featured-item .content h3 a {
                            color: var(--titleColor);
                            -webkit-transition: var(--transition);
                            transition: var(--transition);
                            font-weight: bold;
                        }

                        .featured-item .content .content-in {
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                            padding: 12px 12px 10px;
                            border-radius: 3px;
                        }

                        .featured-item .content .content-in i {
                            color: #ffcc00;
                        }

                        .featured-item .content .content-in span {
                            font-size: 15px;
                            color: var(--titleColor);
                            font-weight: 500;
                        }

                        .featured-item .content .content-in h4 {
                            font-size: 15px;
                            color: var(--titleColor);
                            font-weight: 500;
                            margin-bottom: 0;
                        }

                        .featured-item .content .featured-content-list {
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                            padding: 15px 0 0;
                        }

                        .featured-tab-area .tabs li {
                            margin-right: 5px;
                        }

                        #staticBackdropLabel {
                            font-weight: bold;
                        }

                        /* responsive css */
                        @media only screen and (max-width: 767px) {
                            .featured-tab-area .tabs {
                                margin: 20px 0 0;
                                float: none;
                                text-align: left;
                            }

                            .featured-tab-area .tabs li:last-child {
                                margin-right: 5px;
                            }

                            .featured-tab-area .tabs li a {
                                font-size: 14px;
                                padding: 12px 16px 9px;
                            }

                            .featured-item .content {
                                padding: 20px 10px;
                            }

                            .featured-item .content h3 {
                                font-size: 19px;
                            }

                            .featured-item .content .content-in span {
                                font-size: 14px;
                            }

                            .featured-item .content .content-in h4 {
                                font-size: 14px;
                            }

                            .featured-item .content .featured-content-list {
                                padding: 12px 0 0;
                            }
                        }

                        @media only screen and (min-width: 576px) and (max-width: 767px) {
                            .featured-item .content {
                                padding: 20px 15px;
                            }
                        }

                        @media only screen and (min-width: 768px) and (max-width: 991px) {
                            .featured-tab-area .tabs li a {
                                font-size: 14px;
                                padding: 12px 16px 9px;
                            }

                            .featured-item .featured-item-img .featured-user {
                                top: 20px;
                            }

                            .featured-item .featured-item-img .featured-user .featured-user-option img {
                                margin-right: 7px;
                                width: 25px !important;
                                height: 25px !important;
                            }

                            .featured-item .featured-item-img .featured-user .featured-user-option span {
                                font-size: 13px;
                                padding-top: 2px;
                            }

                            .featured-item .featured-item-img .featured-item-clock {
                                font-size: 18px;
                            }

                            .featured-item .content {
                                padding: 20px 10px;
                            }

                            .featured-item .content h3 {
                                font-size: 19px;
                            }

                            .featured-item .content .content-in span {
                                font-size: 14px;
                            }

                            .featured-item .content .content-in h4 {
                                font-size: 14px;
                            }

                            .featured-item .content .featured-content-list {
                                padding: 12px 0 0;
                            }

                            .featured-item .content .featured-content-list p {
                                font-size: 14px;
                            }

                            .featured-item .content .featured-content-list p i {
                                font-size: 16px;
                            }
                        }

                        @media only screen and (min-width: 992px) and (max-width: 1199px) {
                            .featured-tab-area .tabs li {
                                margin-right: 5px;
                            }

                            .featured-tab-area .tabs li a {
                                font-size: 14px;
                                padding: 12px 16px 9px;
                            }

                            .featured-item .content h3 {
                                font-size: 16px;
                            }
                        }

                        @media only screen and (min-width: 1200px) and (max-width: 1299px) {
                            .featured-tab-area .tabs li a {
                                font-size: 14px;
                                padding: 12px 16px 9px;
                            }

                            .featured-item .content {
                                padding: 20px 20px;
                            }

                            .featured-item .content .content-in {
                                padding: 10px 5px 8px;
                            }

                            .featured-item .content h3 {
                                font-size: 18px;
                            }
                        }
                    </style>
                    <section>
                        <div class="featured-area pt-100 pb-70">
                            <div class="container">
                                <div class="tab featured-tab-area">
                                    <div class="row justify-content-center">

                                    </div>
                                    <div class="tab_content current active pt-45">

                                        <div class="tabs_item current">
                                            <div class="row justify-content-center">

                                                <?php

                                                $sql = "SELECT * FROM food_item ORDER BY id ASC";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {

                                                ?>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="featured-item">
                                                                <div class="featured-item-img">
                                                                    <a href="order_store.php?id=<?php echo $row['id'] ?>&&from=index.php&&table_no=<?php echo $table_no ?>">
                                                                        <img src="assets/image/<?php echo $row['image'] ?>" alt="" style="height: 209px;width: 100%;">
                                                                    </a>
                                                                </div>

                                                                <div class="content">
                                                                    <h3><a href="#" value="name" name="name"><?php echo $row['name'] ?></a></h3>
                                                                    <hr>
                                                                    <div class="content-in">
                                                                        <h4 value="price" name="price">Price: <?php echo $row['price'] ?></h4>
                                                                        <h4><?php echo $row['status'] ?></h4>

                                                                    </div>
                                                                    <div class="content-in">
                                                                        <h4><?php echo $row['description'] ?></h4>
                                                                    </div>
                                                                    <hr>

                                                                    <div class="featured-content-list">
                                                                        <!-- <button href="order_store.php" class="default-btn border-radius-5" name="uploadfile"> Add to cart</button> -->
                                                                        <!-- <a href="order_store.php?id=<?php echo $row['id'] ?>" class="fault-btn border-radius-5 settingPanelToggle"> Add to cart</a> -->
                                                                    </div>
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
                    </section>
                </div>
            </div>
        </div>




    </div>
</div>




<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>