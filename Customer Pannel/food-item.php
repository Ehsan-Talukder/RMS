<!-- ############################## Header Section ############################## -->
<?php include("header.php"); ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Food Item List</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="food-item-create.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Quantity</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                <?php
                                        $count = 0;
                                        $sql = "SELECT * FROM food_item ORDER BY id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $count++;
                                ?>
                                                <tr>
                                                    <td><?php echo $count ?></td>
                                                    <td><img alt="image" src="assets/image/<?php echo $row['image'] ?>" width="35"></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['price'] ?></td>
                                                    <td><?php echo $row['categories'] ?></td>
                                                    <td><?php echo $row['status'] ?></td>
                                                    <td><?php echo $row['quantity'] ?></td>
                                                    <td><?php echo $row['description'] ?></td>
                                                    <td>
                                                        <form action="food-item-delete.php?id=<?php echo $row['id'] ?>" method="post">
                                                            <a href="food-item-edit.php?id=<?php echo $row['id'] ?>" class="btn btn-icon icon-left btn-warning mr-1"><i class="fas fa-edit"></i> Edit</a>

                                                            <button type="submit" class="btn btn-icon icon-left btn-danger ml-1"><i class="fas fa-trash"></i> Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>