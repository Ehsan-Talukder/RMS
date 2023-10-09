<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
// include("config.php");
//error_reporting(0); 
?>

<!-- ############################## Right Side Menue Section ############################## -->
<?php include("side-menue.php"); ?>


<!-- Food Category -->

<div class="row">
  <div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-pills" id="myTab3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Category 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Category 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Category 3</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent2">
          <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
            <div class="row ">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 1</h5>
                            <h2 class="mb-3 font-18">25899</h2>
                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/image/fast food/1.jpg" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>

                        <!-- Modal -->
                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>



                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15"> Food 2</h5>
                            <h2 class="mb-3 font-18">1,28700</h2>
                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 3</h5>
                            <h2 class="mb-3 font-18">128890</h2>
                            <p class="mb-0"><span class="col-green">18%</span>
                              Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/3.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 4</h5>
                            <h2 class="mb-3 font-18">$48,697</h2>
                            <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                          </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/4.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>



                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" style="padding-left: 500px;">

                <div style="padding-right: 15px;">
                  <a href="#" class="btn btn-success">Success</a>
                </div>
                <div>
                  <a href="#" class="btn btn-danger">Danger</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
            <div class="row ">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 1</h5>
                            <h2 class="mb-3 font-18">25899</h2>
                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <!-- Modal -->
                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>



                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15"> Food 2</h5>
                            <h2 class="mb-3 font-18">1,28700</h2>
                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 3</h5>
                            <h2 class="mb-3 font-18">128890</h2>
                            <p class="mb-0"><span class="col-green">18%</span>
                              Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/3.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 4</h5>
                            <h2 class="mb-3 font-18">$48,697</h2>
                            <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                          </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/4.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>



                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="padding-left: 500px;">

                <div style="padding-right: 15px;">
                  <a href="#" class="btn btn-success">Success</a>
                </div>
                <div>
                  <a href="#" class="btn btn-danger">Danger</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
            <div class="row ">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 1</h5>
                            <h2 class="mb-3 font-18">25899</h2>
                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <!-- Modal -->
                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>



                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15"> Food 2</h5>
                            <h2 class="mb-3 font-18">1,28700</h2>
                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 3</h5>
                            <h2 class="mb-3 font-18">128890</h2>
                            <p class="mb-0"><span class="col-green">18%</span>
                              Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/3.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 4</h5>
                            <h2 class="mb-3 font-18">$48,697</h2>
                            <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                          </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/4.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <form>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10000">
                          </form>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>



                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 5</h5>
                            <h2 class="mb-3 font-18">258</h2>
                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15"> Food 6</h5>
                            <h2 class="mb-3 font-18">1,287</h2>
                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/2.png" alt="">
                          </div>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 7</h5>
                            <h2 class="mb-3 font-18">128</h2>
                            <p class="mb-0"><span class="col-green">18%</span>
                              Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/3.png" alt="">
                          </div>
                        </div>


                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">

                            <h5 class="font-15">Food 8</h5>
                            <h2 class="mb-3 font-18">$48,697</h2>
                            <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/4.png" alt="">
                          </div>
                        </div>

                        <div class="card-body">
                          <a href="javascript:void(0)" class="btn btn-icon icon-left btn-success settingPanelToggle"> Add</a>
                        </div>


                        <div class="custom-checkbox custom-control" style="margin-top: 10px;">
                          <h2 class="mb-3 font-18">--Description--</h2>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="padding-left: 500px;">

                <div style="padding-right: 15px;">
                  <a href="#" class="btn btn-success">Success</a>
                </div>
                <div>
                  <a href="#" class="btn btn-danger">Danger</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>