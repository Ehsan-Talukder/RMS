<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Add Food Item</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="food-item-store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">




                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category_name">
                                        <option style="display: none;">Please Select your food category</option>
                                        <?php

                                        $sql = "SELECT * FROM categories ORDER BY id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $category_name = $row['category_name'];
                                        ?>
                                                <option><?php echo $category_name ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Sub category</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="subcategoryName" name="subcategoryName" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Food Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="name" name="name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Price</strong></label>
                                <div class="col-sm-9">
                                    <input step="0.01" min="0" type="number" class="form-control" value="price" name="price" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Status</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="status" name="status" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Quantity</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" min="0" class="form-control" value="quantity" name="quantity" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="description" name="description" required>
                                </div>
                            </div>


                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>