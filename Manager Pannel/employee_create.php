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
                        <h4>Form: Add Employee</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="employee_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Employee Name</strong></label>
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
                                <label class="col-sm-3 col-form-label"><strong>Salary</strong></label>
                                <div class="col-sm-9">
                                    <input step="0.01" min="0" type="number" class="form-control" value="salary" name="salary" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Status</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="status" name="status" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Designation</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="designation" name="designation" required>
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