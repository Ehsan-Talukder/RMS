<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
$name = $_GET['name'];

?>

<!-- ############################## Right Side Menue Section ############################## -->
<?php include("side-menue.php"); ?>


<!-- Food Category -->





<div class="row ">
  <?php

  $sql = "SELECT * FROM subcategory where categoryName='$name' ORDER BY id ASC";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $subcategory=$row['subcategoryName'];
  ?>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      
          <div class="card">
          <a href=" .php?name=<?php echo $name?>&&subcategory=<?php echo $subcategory ?>">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">

                <div class="row ">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15"><?php echo $row['subcategoryName'] ?></h5>
                      <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->

                    </div>
                  </div>
               
                </div>
              </div>
            </div>
            </a>
          </div>
       
      </div>

  <?php }
  } ?>



</div>

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

<main>

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
              
                $sql = "SELECT * FROM food_item  where category_name='$name' ORDER BY id ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                  
                ?>

                    <div class="col-lg-3 col-md-6">
                      <div class="featured-item">
                        <div class="featured-item-img">
                          <a href="order_store.php?id=<?php echo $row['id']?>&&from=category_food.php?name=<?php echo $name?>">
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
                            <!-- <a href="order_store.php?id=<?php echo $row['id']?>" class="fault-btn border-radius-5 settingPanelToggle"> Add to cart</a> -->
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
</main>

<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>



<script>
  var shoppingCart = (function() {

    cart = [];

    function Item(name, price, count) {
      this.name = name;
      this.price = price;
      this.count = count;
    }

    // Save cart
    function saveCart() {
      localStorage.setItem('shoppingCart', JSON.stringify(cart));
    }

    // Load cart
    function loadCart() {
      cart = JSON.parse(localStorage.getItem('shoppingCart'));
    }
    if (localStorage.getItem("shoppingCart") != null) {
      loadCart();
    }


    var obj = {};

    // Add to cart
    obj.addItemToCart = function(name, price, count) {
      for (var item in cart) {
        if (cart[item].name === name) {
          cart[item].count++;
          saveCart();
          return;
        }
      }
      var item = new Item(name, price, count);
      cart.push(item);
      saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(name, count) {
      for (var i in cart) {
        if (cart[i].name === name) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(name) {
      for (var item in cart) {
        if (cart[item].name === name) {
          cart[item].count--;
          if (cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
      }
      saveCart();
    }

    // Remove all items from cart
    obj.removeItemFromCartAll = function(name) {
      for (var item in cart) {
        if (cart[item].name === name) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }

    // Clear cart
    obj.clearCart = function() {
      cart = [];
      saveCart();
    }

    // Count cart 
    obj.totalCount = function() {
      var totalCount = 0;
      for (var item in cart) {
        totalCount += cart[item].count;
      }
      return totalCount;
    }

    // Total cart
    obj.totalCart = function() {
      var totalCart = 0;
      for (var item in cart) {
        totalCart += cart[item].price * cart[item].count;
      }
      return Number(totalCart.toFixed(2));
    }

    // List cart
    obj.listCart = function() {
      var cartCopy = [];
      for (i in cart) {
        item = cart[i];
        itemCopy = {};
        for (p in item) {
          itemCopy[p] = item[p];
        }
        itemCopy.total = Number(item.price * item.count).toFixed(2);
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }
    return obj;
  })();


  // Add item
  $('.default-btn').click(function(event) {
    // alert('working');
    event.preventDefault();
    var name = $(this).data('name');
    var price = Number($(this).data('price'));
    shoppingCart.addItemToCart(name, price, 1);
    displayCart();
  });

  // Clear items
  $('.clear-cart').click(function() {
    shoppingCart.clearCart();
    displayCart();
  });


  function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for (var i in cartArray) {
      output += "<tr>" +
        "<td>" + cartArray[i].name + "</td>" +
        "<td>(" + cartArray[i].price + ")</td>" +
        "<td><div class='input-group'>" +
        "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
        "</div></td>" +
        "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>" +
        " = " +
        "<td>" + cartArray[i].total + "</td>" +
        "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(shoppingCart.totalCart());
    $('.total-count').html(shoppingCart.totalCount());
  }

  // Delete item button

  $('.show-cart').on("click", ".delete-item", function(event) {
    var name = $(this).data('name')
    shoppingCart.removeItemFromCartAll(name);
    displayCart();
  })

  // Item count input
  $('.show-cart').on("change", ".item-count", function(event) {
    var name = $(this).data('name');
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
  });
  displayCart();

  //////// ui script start /////////
  // Tabs Single Page
  $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
  $('.tab ul.tabs li a').on('click', function(g) {
    var tab = $(this).closest('.tab'),
      index = $(this).closest('li').index();
    tab.find('ul.tabs > li').removeClass('current');
    $(this).closest('li').addClass('current');
    tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
    tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
    g.preventDefault();
  });

  // search function
  $('#search_field').on('keyup', function() {
    var value = $(this).val();
    var patt = new RegExp(value, "i");

    $('.tab_content').find('.col-lg-3').each(function() {
      var $table = $(this);

      if (!($table.find('.featured-item').text().search(patt) >= 0)) {
        $table.not('.featured-item').hide();
      }
      if (($table.find('.col-lg-3').text().search(patt) >= 0)) {
        $(this).show();
        document.getElementById('not_found').style.display = 'none';
      } else {
        document.getElementById("not_found").innerHTML = " Product not found..";
        document.getElementById('not_found').style.display = 'block';
      }

    });

  });
</script>