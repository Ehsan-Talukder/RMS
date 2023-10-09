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

            width: 500px;
            right: -485px;

        }
    </style>
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
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
                                    </tr>
                                    <tr>
                                        <td>Food</td>
                                        <td>Price</td>
                                        <td>
                                            <form>
                                                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                                            </form>
                                        </td>
                                        <td><a href="#" class="btn btn-success">Confirm</a></td>
                                        <td><a href="#" class="btn btn-danger">Cancel</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore
                        </a>
                        <a href="payment.php" class="btn btn-icon icon-left btn-primary btn-restore-theme"> Done</a>
                        <!-- <button class="btn btn-primary" id="swal-6">Launch</button> -->
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>