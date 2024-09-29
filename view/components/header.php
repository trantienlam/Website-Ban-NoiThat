<?php
include_once('./model/user.classes.php');
include_once('./model/category.classes.php');
include_once('./model/cart.classes.php');
$User = new User();
$Category = new Category();
$Cart = new Cart();
?>

<header>
  <!-- Begin Sub-Header -->
  <div class="sub-header">
    <div class="sub-header-img">
      <a href="http://localhost/Website/index.php">
      <img src="./assets/images/giakhanh.png" alt="" class="logo" />
     </a>
    </div>
    <!-- Menu Bar -->
    <label for="menu-mobile-input" class="menu_bar_btn">
      <i class="fa-solid fa-bars"></i>
    </label>

    <input hidden type="checkbox" name="" class="menu-input" id="menu-mobile-input" />

    <label for="menu-mobile-input" class="menu_overlay"> </label>
    <!-- Menu Mobile -->
    <ul class="menu-mobile">
      <label for="menu-mobile-input" class="menu-mobile-close">
        <i class="fa-solid fa-square-xmark"></i>
      </label>
      <li class="menu_mobile_item">
        <a href="" class="menu_mobile_link">Home<i class="fa-solid fa-angle-down"></i></a>
        <div class="menu_child">
          <div class="menu_child_item">
            <ul class="menu_child_list">
              <li><a href="">Home1</a></li>
              <li><a href="">Home2</a></li>
              <li><a href="">Home3</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="menu_mobile_item">
        <a href="../index/shop.html" class="menu_mobile_link">Features<i class="fa-solid fa-angle-down"></i></a>
        <div class="menu_child">
          <div class="menu_child_item">
            <ul class="menu_child_list">
              <li><a href="../index/login.html">Login</a></li>
              <li><a href="">Pages</a></li>
              <li><a href="../index/contact.html">Contact</a></li>
              <li><a href="../index/shop.html">Shop</a></li>
              <li><a href="">Color Schemes</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="menu_mobile_item">
        <a href="" class="menu_mobile_link">Band & Orchestra<i class="fa-solid fa-angle-down"></i></a>
        <div class="menu_child">
          <div class="menu_child_item">
            <ul class="menu_child_list">
              <li><a href="">Bags and Cases</a></li>
              <li><a href="">Instruments</a></li>
              <li><a href="">Mouthpieces</a></li>
              <li><a href="">Orchestral String</a></li>
              <li><a href="">Upright Basses</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="menu_mobile_item">
        <a href="" class="menu_mobile_link">Recording<i class="fa-solid fa-angle-down"></i></a>
        <div class="menu_child">
          <div class="menu_child_item">
            <ul class="menu_child_list">
              <li><a href="">Audio Interfaces</a></li>
              <li><a href="">Audio Workstations</a></li>
              <li><a href="">Midi Controller</a></li>
              <li><a href="">Midi Interfaces</a></li>
              <li><a href="">Software</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="menu_mobile_item">
        <a href="" class="menu_mobile_link">DJ & Karaoke<i class="fa-solid fa-angle-down"></i></a>
        <div class="menu_child">
          <div class="menu_child_item">
            <ul class="menu_child_list">
              <li><a href="">Accessories</a></li>
              <li><a href="">Controller</a></li>
              <li><a href="">Headphones</a></li>
              <li><a href="">Mixers</a></li>
              <li><a href="">Turntables</a></li>
            </ul>
          </div>
        </div>
      </li>

      <!-- <li class="menu_mobile_item"><a href="" class="menu_mobile_link">Sale</a></li>
        <div class="icon">
        <li class="menu_icon">
          <a href="" class="menu_mobile_link"
            ><i class="fa-solid fa-cart-shopping"></i
          ></a>
        </li>
      </div>
      <div class="icon">
        <li class="menu_icon">
          <div class="search-box">
            <div class="search-txt">
              <input type="text" placeholder="Search..." />
            </div>
            <div class="search-btn">
              <a href="" class="menu_link"
                ><i class="fa-solid fa-magnifying-glass"></i
              ></a>
            </div>
          </div>
        </li>
      </div> -->
    </ul>
    <!-- Menu PC -->
    <ul class="menu">
      <li class="menu_item">
        <a href="index.php" class="menu_link active-button">Trang chủ
        </a>
      </li>



      <li class="menu_item">
        <a href="index.php?quanly=cuahang" class="menu_link">Bộ sưu tập<i class="fa-solid fa-angle-down"></i></a>
        <div class="menu_child">
          <div class="menu_child_item">
            <ul class="menu_child_list">
              <?php
                  $listParentCategory = $Category->getParentCategory();
                  foreach($listParentCategory as $row_parent) {
                    $id_parent = $row_parent['id_category'];
              ?>
              <li class="menu_parent">
                <a href="index.php?quanly=cuahang&id_category=<?php echo $id_parent ?>">
                  <?php echo $row_parent['name_category'] ?>
                </a>

                <?php
                  $listChildCategory = $Category->getChildCategory($id_parent);
                  if(count($listChildCategory) > 1) {                
                ?>
                <div class="sub__menu-child">

                  <?php
                    foreach($listChildCategory as $row_child) {
                  ?>
                    <div class="sub__menu-child-item">
                      <a href="index.php?quanly=cuahang&id_category=<?php echo $row_child['id_category'] ?>">
                        <?php echo $row_child['name_category'] ?>
                      </a>
                    </div>
                  <?php }?>

                </div>
                <?php } ?>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>


      </li>
      <li class="menu_item">
        <a href="index.php?quanly=cuahang" class="menu_link">Cửa hàng</a>
      </li>
      <li class="menu_item">
        <a href="index.php?quanly=<?php echo Session::getValueSession('user') ? 'giohang' : 'login' ?>" class="menu_link">Giỏ hàng</a>
      </li>

      <li class="menu_item">
        <a href="index.php?quanly=gioithieu" class="menu_link">Giới thiệu</a>
      </li>


    </ul>
    <div class="icon-list">
      <div class="icon ">
        <div class="menu_icon">
          <a href="index.php?quanly=<?php echo Session::getValueSession('user') ? 'giohang' : 'login' ?>" class="">
            <!-- Cart Layout -->
            <div class="header-cart">
              <div class="header-cart-wrap">
                <i class="fa-solid fa-cart-shopping" >
                <?php 
                  if(Session::getValueSession('user')) {
                    $count = count($Cart->getCartOfUser(Session::getValueSession('user')));
                    echo "<p class='numProCart'> $count </p>";
                  }             
                ?>
                  
                </i>
                <span class="header-cart-notice"></span>
                <!-- No cart: header-cart-list_no-cart -->
                <!-- <div class="header-cart-list">
                    <img
                      src="../images/no-cart.png"
                      alt=""
                      class="header-cart-no-cart-img"
                    />
                    <p class="header-cart-no-cart-text">No items in cart</p> -->
                <!-- Add Cart -->
                <!-- <h4 class="header-cart-heading">Add Products</h4> -->
                <!-- Cart Item -->
                <!-- <ul class="header-cart-list-item">
                      <li class="header-cart-item">
                        <img
                          src="../images/goods/good1.jpg"
                          alt=""
                          class="header-cart-img"
                        />
                        <div class="header-cart-item-info">
                          <div class="header-cart-item-head">
                            <h5 class="header-cart-item-name">
                              Guitar Pro 210
                            </h5>
                            <div class="header-cart-item-price-wrap">
                              <span class="header-cart-item-price"
                                >$1234</span
                              >
                              <span class="header-cart-item-mutiply">x</span>
                              <span class="header-cart-item-quantity">2</span>
                            </div>
                          </div>
                        </div>
                        <div class="header-cart-item-body">
                          <span class="header-cart-item-desciption">
                            Phân loại: Bạc
                          </span>
                          <span class="header-cart-item-remove">Remove</span>
                        </div>
                      </li>
                    </ul>
                    <button class="btn-cart-item">See More</button>
                  </div> -->
              </div>
            </div>
          </a>
        </div>
      </div>


        <div class="icon">
          <form action="index.php?quanly=cuahang" method = "POST" class="search-btn">
            <a href="#" class="menu_link"><i class="fa-solid fa-magnifying-glass"></i></a>
            <div class="search-txt">
              <input name="searchName" type="text" placeholder="Nhập tên sản phẩm" />/
            </div>
          </form>
        </div>
      <div class="icon icon-user">
        <a href="index.php?quanly=<?php echo Session::getValueSession('user') ? 'user' : 'login' ?>" class="menu_link <?php echo Session::getValueSession('user') ? 'login-success' : '' ?>">
          <i class="fa-solid fa-user"></i>
          <?php
          if (Session::getValueSession('user')) {
            $id_user = Session::getValueSession('user');
            $row_user = $User->getUserId($id_user);
            // echo var_dump($row_user);
            foreach ($row_user as $item ) {
              echo $item['user_name'];
            }
          }
          ?>
        </a>
      
      
        <?php
        if (Session::getValueSession('user')) {
          $id_user = Session::getValueSession('user');
          $row_user = $User->getUserId($id_user);
          foreach ($row_user as $item) {
            if ($item['user_role'] == 1) {
              echo '<ul class="menu-user">
                                        <li><a href="index.php?quanly=user">Thông tin cá nhân</a></li>
                                        <li><a href="index.php?quanly=user&action=mycart">Chi tiết đơn hàng</a></li>
                                        <li><a href="index.php?quanly=admin">Quản trị Admin</a></li>
                                        <li><a href="index.php?quanly=login&delete_userSession=true">Đăng xuất</a></li>
                                    </ul>';
            } else {
              echo '<ul class="menu-user">
                                        <li><a href="index.php?quanly=user">Thông tin cá nhân</a></li>
                                        <li><a href="index.php?quanly=user&action=mycart">Chi tiết đơn hàng</a></li>
                                        <li><a href="index.php?quanly=login&delete_userSession=true">Đăng xuất</a></li>
                                    </ul>';
            }
          }
        };
        ?>
      </div>
    </div>
  </div>
  <!-- End Sub-Header -->
</header>