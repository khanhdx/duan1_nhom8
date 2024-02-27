<body>
   <header class="header3">
      <div class="header3-top d-none d-lg-block">
         <div class="container header-container">
            <div class="row align-items-center">
               <div class="col-lg-4">
                  <!-- <form action="#" class="filter-search-input header-search-3 d-none d-lg-inline-block">
                     <input type="text" placeholder="Search Products.....">
                     <button><i class="fal fa-search"></i></button>
                  </form> -->
               </div>
               <div class="col-lg-4">
                  <div class="header-logo header3-logo">
                     <a href="index.php" class="logo-bl"><img width="150px" src="assets/img/logo/GroupThree.png" alt="logo-img"></a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="action-list d-none d-md-flex action-list-header3">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="header-sticky" class="header-main header-main3">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12">
                  <div class="header-main-content-wrapper">
                     <div class="header-logo header3-logo d-lg-none">

                     </div>
                     <div class="main-menu main-menu3 d-none d-lg-block">
                        <nav id="mobile-menu">
                           <ul>
                              <!-- <li><a href="index.php">Home</a></li> -->
                              <li><a href="index.php?act=shops">Shop</a></li>
                              <li class="menu-item-has-children"><a href="index.php">Option</a>
                                 <ul class="sub-menu">
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                       extract($_SESSION['user']);
                                       if ($roles == 1 || $roles == 2) {
                                    ?>
                                          <li><a href="trangadmin/admin/index.php" style="color:black">Ad_<?= $user ?></a></li>
                                          <li><a href="index.php?act=edit_taikhoan" style="color:black">Up_Account</a></li>
                                          <li><a href="index.php?act=mybill" style="color:black">My order</a></li>

                                          <li><a href="index.php?act=thoat" style="color:black">Logout</a></li>
                                       <?php
                                       } else {
                                       ?><li><a href="#" style="color:black">User_<?= $user ?></a></li>
                                          <li><a href="index.php?act=edit_taikhoan" style="color:black">Account_ed</a></li>
                                          <li><a href="index.php?act=mybill" style="color:black">My order</a></li>
                                          <li><a href="index.php?act=thoat" style="color:black">Logout</a></li><?php } ?>
                                    <?php
                                    } else {
                                    ?>
                                       <li><a href="index.php?act=dangnhap" style="color:black">Login</a></li>
                                       <li><a href="index.php?act=dangky" style="color:black">Register</a></li>

                                    <?php
                                    }   ?>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="menu-bar d-lg-none ml-20">
                        <a class="side-toggle" href="javascript:void(0)">
                           <div class="bar-icon">
                              <span></span>
                              <span></span>
                              <span></span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <!-- Add your site or application content here -->
   <main>


      <!-- side toggle start -->
      <div class="fix">
         <div class="side-info">
            <div class="side-info-content">
               <div class="offset-widget offset-logo mb-40">
                  <div class="row align-items-center">
                     <div class="col-9">
                        <a href="index.html">
                           <img src="assets/img/logo/logo-bl.png" alt="Logo">
                        </a>
                     </div>
                     <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                     </div>
                  </div>
               </div>
               <div class="mobile-menu d-lg-none fix"></div>
               <div class="offset-profile-action d-lg-none">
                  <div class="offset-widget mb-40">
                     <div class="action-list action-list-header1">
                        <div class="action-item action-item-cart">
                           <a href="javascript:void(0)" class="view-cart-button">
                              <i class="fal fa-shopping-bag"></i>
                              <span class="action-item-number">3</span></a>
                        </div>
                        <div class="action-item action-item-wishlist">
                           <a href="javascript:void(0)" class="view-wishlist-button">
                              <i class="fal fa-heart"></i>
                              <span class="action-item-number">2</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offset-widget offset_searchbar mb-30">
                  <form action="#" class="filter-search-input">
                     <input type="text" placeholder="Search keyword">
                     <button><i class="fal fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas-overlay"></div>
      <div class="offcanvas-overlay-white"></div>

      <div class="fix">
         <div class="sidebar-action sidebar-cart">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Shopping Cart</h4>
            <div class="sidebar-action-list">
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/shirt/3/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Felted Shirt for Man</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$24.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/pant/1/4.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Denim Jeans Pant</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$12.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/jacket/2/2.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Denim Official Jacket</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$42.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>

            </div>
            <div class="product-price-total">
               <span>Subtotal :</span>
               <span class="subtotal-price">$78.00</span>
            </div>
            <div class="sidebar-action-btn">
               <a href="cart.html" class="fill-btn">View cart</a>
               <a href="checkout.html" class="border-btn">Checkout</a>
            </div>
         </div>
      </div>
      <div class="fix">
         <div class="sidebar-action sidebar-wishlist">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Wishlist</h4>
            <div class="sidebar-action-list">
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/shirt/1/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                     <div class="product-pricing">
                        <span class="price-now">$20.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/pant/1/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                     <div class="product-pricing">
                        <span class="price-now">$24.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>

            </div>
            <div class="product-price-total">
               <span>Subtotal :</span>
               <span class="subtotal-price">$44.00</span>
            </div>
            <div class="sidebar-action-btn">
               <a href="cart.html" class="fill-btn">View cart</a>
               <a href="cart.html" class="border-btn">Checkout</a>
            </div>
         </div>
      </div>
      <!-- side toggle end -->

      <!-- banner area start  -->
      <div class="banner-area banner-area2 pos-rel">
         <div class="swiper-container slider__active">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-2-1.jpg">
                     </div>
                     <div class="container pos-rel">
                        <div class="row align-items-center">
                           <div class="col-lg-10 col-md-10">
                              <div class="banner-content banner-content2 banner-content2-1 pt-0">
                                 <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                                    <!-- <span>Fashion Everyday</span> -->
                                 </div>
                                 <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                                    <br>
                                    <!-- Shop -->
                                 </h1>
                                 <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                                    <!-- <a href="shop.html" class="border-btn">Shop Now</a> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-2">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-2-2.jpg">
                     </div>
                     <div class="container pos-rel">
                        <div class="row align-items-center">
                           <div class="col-lg-10 col-md-10">
                              <div class="banner-content banner-content2 banner-content2-2 pt-0">
                                 <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                                    <!-- <span>Fashion Everyday</span> -->
                                 </div>
                                 <!-- <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                                    Winter Exclusive
                                    Collection</h1> -->
                                 <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                                    <!-- <a href="shop.html" class="border-btn">Shop Now</a> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-2">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-2-3.jpg">
                     </div>
                     <div class="container pos-rel">

                        <div class="row align-items-center">
                           <div class="col-lg-2 col-md-2"></div>
                           <div class="col-lg-10 col-md-10">
                              <div class="banner-content banner-content2 banner-content2-3 pt-0">

                                 <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                                    <!-- <span>Fashion Everyday</span> -->
                                 </div>
                                 <!-- <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                                    Stylist Sunglass
                                    For Hot Guy</h1> -->
                                 <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                                    <!-- <a href="shop.html" class="border-btn">Shop Now</a> -->
                                 </div>
                                 <!-- <div class="banner-pricing" data-animation="fadeIn" data-delay=".7s">
                                    Exclusively
                                    <span class="price-now">£89</span>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="slider-nav d-none">
               <div class="slider-button-prev"><i class="fal fa-long-arrow-left"></i></div>
               <div class="slider-button-next"><i class="fal fa-long-arrow-right"></i></div>
            </div>
            <div class="slider2-pagination-container">
               <div class="container">
                  <!-- If we need pagination -->
                  <div class="slider-pagination slider2-pagination"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner area end  -->

      <!-- product area start  -->
      <section class="product-area pt-120 pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="section-title text-center">
                     <h2 class="section-main-title mb-35">Products Group</h2>
                  </div>
               </div>
            </div>
            <div class="product-tab-wrapper">
               <div class="product-tab-nav mb-60">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <?php
                        foreach ($dsdm as $dm) {
                           extract($dm);
                           $linkdm = "index.php?act=sanphamhome&id_groupproduct=" . $id;
                           echo '  <a href="' . $linkdm . '" class="category-item">' . $name . ' </a>';
                           // echo '<a href="index.php">All</a>';

                        }
                        ?>
                        <a href="index.php">All</a>
                     </div>

                  </nav>
               </div>
               <form action="index.php?act=addtocart" method="POST">
                  <input type="hidden" name="id" value="''">
               </form>
               <div class="product-tab-content">
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                        <div class="products-wrapper">
                           <!-- <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add toCart</a> -->
                           <?php
                           foreach ($listproducts as $sanpham) {
                              extract($sanpham);
                              $linksp = "index.php?act=sanphamct&idsp=" . $id;
                              $hinh = $img_path . $img;
                              echo ' <div class="single-product">
                              <div class="product-image pos-rel">
                              <a href="' . $linksp . '" class=""><img style="border-radius:4px;" src="' . $hinh . '" alt="img"></a>
                              <div class="product-action-bottom">
                              </form>
                              </div>
                              </div>
                              <div class="product-desc">
                              <div class="product-name"><a href="' . $linksp . '">' . $name . '</a></div>
                              <div class="product-price">
                              <span class="price-now">$' . $price . '</span>
                              </div>
                              </div>
                              </div>';
                           }
                           ?>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                        <div class="products-wrapper">

                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/pant/1/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>

                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£45.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-navy active">
                                       <img src="assets/img/pant/1/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/pant/1/4.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/pant/2/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker discount"> -25%</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Men's Flat-Front Shorts</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£30.00</span>
                                    <span class="price-old">£40.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-brown active">
                                       <img src="assets/img/pant/2/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/pant/2/3.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/pant/2/5.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shoe/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Eastland Lumber Up Boots</a>
                                 </div>
                                 <div class="product-price">
                                    <span class="price-now">£38.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-4-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£84.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-16-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Soft Touch Interlock Polo</a>
                                 </div>
                                 <div class="product-price">
                                    <span class="price-now">£45.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/product-img1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ecomart Smart Watch</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£30.00</span>
                                    <span class="price-old">£38.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/sunglass/2.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ecomart Smart Glass</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£25.00</span>
                                    <span class="price-old">£39.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-black active">
                                       <img src="assets/img/sunglass/2.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/sunglass/5.jpg" alt="img">
                                    </li>
                                    <li class="cl-brown">
                                       <img src="assets/img/sunglass/8.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/sunglass/11.jpg" alt="img">
                                    </li>
                                    <li class="cl-wood">
                                       <img src="assets/img/sunglass/14.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shirt/2/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Cotton Shirt fot Men</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£85.00</span>
                                    <span class="price-old">£99.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-brown active">
                                       <img src="assets/img/shirt/2/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/shirt/2/4.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/shirt/2/7.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-5-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Double-breasted Blazer</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£32.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-1-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ribbed Cotton Bodysuits</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£71.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-ash active">
                                       <img src="assets/img/product/800_1034/Image-1-1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/product/800_1034/Image-1-2.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                        <div class="products-wrapper">


                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shirt/1/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Comfy Winter Shirt</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£55.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-pink active">
                                       <img src="assets/img/shirt/1/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/shirt/1/3.jpg" alt="img">
                                    </li>
                                    <li class="cl-black">
                                       <img src="assets/img/shirt/1/5.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/shirt/1/7.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/pant/1/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>

                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£45.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-navy active">
                                       <img src="assets/img/pant/1/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/pant/1/4.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-3-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker discount"> -25%</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Grand Atlantic Chukka Boots</a>
                                 </div>
                                 <div class="product-price">
                                    <span class="price-now">£24.00</span>
                                    <span class="price-old">£32.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-4-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£84.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-16-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Soft Touch Interlock Polo</a>
                                 </div>
                                 <div class="product-price">
                                    <span class="price-now">£45.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/product-img1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ecomart Smart Watch</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£30.00</span>
                                    <span class="price-old">£38.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/sunglass/2.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ecomart Smart Glass</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£25.00</span>
                                    <span class="price-old">£39.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-black active">
                                       <img src="assets/img/sunglass/2.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/sunglass/5.jpg" alt="img">
                                    </li>
                                    <li class="cl-brown">
                                       <img src="assets/img/sunglass/8.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/sunglass/11.jpg" alt="img">
                                    </li>
                                    <li class="cl-wood">
                                       <img src="assets/img/sunglass/14.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shirt/2/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Cotton Shirt fot Men</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£85.00</span>
                                    <span class="price-old">£99.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-brown active">
                                       <img src="assets/img/shirt/2/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/shirt/2/4.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/shirt/2/7.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-5-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Double-breasted Blazer</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£32.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-1-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ribbed Cotton Bodysuits</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£71.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-ash active">
                                       <img src="assets/img/product/800_1034/Image-1-1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/product/800_1034/Image-1-2.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                        <div class="products-wrapper">


                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/pant/1/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>

                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£45.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-navy active">
                                       <img src="assets/img/pant/1/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/pant/1/4.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/pant/2/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker discount"> -25%</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Men's Flat-Front Shorts</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£30.00</span>
                                    <span class="price-old">£40.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-brown active">
                                       <img src="assets/img/pant/2/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/pant/2/3.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/pant/2/5.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shoe/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Eastland Lumber Up Boots</a>
                                 </div>
                                 <div class="product-price">
                                    <span class="price-now">£38.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shirt/3/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Men's Poplin Dress Shirt</a>
                                 </div>
                                 <div class="product-price">
                                    <span class="price-now">£25.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-yellow active">
                                       <img src="assets/img/shirt/3/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-black">
                                       <img src="assets/img/shirt/3/2.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/shirt/3/3.jpg" alt="img">
                                    </li>
                                    <li class="cl-orange">
                                       <img src="assets/img/shirt/3/4.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/bag/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Varsi Leather Bag</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£65.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-brown active">
                                       <img src="assets/img/bag/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/bag/2.jpg" alt="img">
                                    </li>
                                    <li class="cl-black">
                                       <img src="assets/img/bag/3.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/product-img1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ecomart Smart Watch</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£30.00</span>
                                    <span class="price-old">£38.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/sunglass/2.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ecomart Smart Glass</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£25.00</span>
                                    <span class="price-old">£39.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-black active">
                                       <img src="assets/img/sunglass/2.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/sunglass/5.jpg" alt="img">
                                    </li>
                                    <li class="cl-brown">
                                       <img src="assets/img/sunglass/8.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/sunglass/11.jpg" alt="img">
                                    </li>
                                    <li class="cl-wood">
                                       <img src="assets/img/sunglass/14.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/shirt/2/1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Cotton Shirt fot Men</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£85.00</span>
                                    <span class="price-old">£99.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-brown active">
                                       <img src="assets/img/shirt/2/1.jpg" alt="img">
                                    </li>
                                    <li class="cl-navy">
                                       <img src="assets/img/shirt/2/4.jpg" alt="img">
                                    </li>
                                    <li class="cl-ash">
                                       <img src="assets/img/shirt/2/7.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-5-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Double-breasted Blazer</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£32.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="single-product">
                              <div class="product-image pos-rel">
                                 <a href="shop-details.html" class=""><img src="assets/img/product/800_1034/Image-1-1.jpg" alt="img"></a>
                                 <div class="product-action">
                                    <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                    <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                    <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                 </div>
                                 <div class="product-action-bottom">
                                    <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                       Cart</a>
                                 </div>
                                 <div class="product-sticker-wrapper">
                                    <span class="product-sticker new">New</span>
                                 </div>
                              </div>
                              <div class="product-desc">
                                 <div class="product-name"><a href="shop-details.html">Ribbed Cotton Bodysuits</a></div>
                                 <div class="product-price">
                                    <span class="price-now">£71.00</span>
                                 </div>
                                 <ul class="product-color-nav">
                                    <li class="cl-ash active">
                                       <img src="assets/img/product/800_1034/Image-1-1.jpg" alt="img">
                                    </li>
                                    <li class="cl-light-white">
                                       <img src="assets/img/product/800_1034/Image-1-2.jpg" alt="img">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="product-area-btn mt-10 text-center">
                     <a href="index.php?act=shops" class="border-btn">View All Products</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- product area end  -->



      <!-- category area2 start  -->

      <!-- category area2 end  -->

      <!-- bundle area style start -->
      <section class="bunle-pack-area pt-120 pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="section-title text-center">
                     <h2 class="section-main-title mb-50">Bundle combo Pack</h2>
                  </div>
               </div>
            </div>
            <div class="bundle-pack-wrapper">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="pack-items-wrapper">
                        <div class="pack-items-inner">
                           <div class="pack-items">
                              <div class="pack-item-single">
                                 <div class="product-image pos-rel">
                                    <a href="shop-details.html" class=""><img src="assets/img/combo_pack/pack-1-1.jpg" alt="procuct img"></a>
                                 </div>
                                 <div class="product-desc">
                                    <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                          T-Shirt S</a>
                                    </div>
                                    <div class="product-price">
                                       <span class="price-now">£19.00</span>
                                    </div>
                                    <div class="product-rating">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="pack-item-single">
                                 <div class="product-image pos-rel">
                                    <a href="shop-details.html" class=""><img src="assets/img/combo_pack/pack-1-1.jpg" alt="procuct img"></a>
                                 </div>
                                 <div class="product-desc">
                                    <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                          T-Shirt SS</a>
                                    </div>
                                    <div class="product-price">
                                       <span class="price-now">£35.00</span>
                                    </div>
                                    <div class="product-rating">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="pack-item-single">
                                 <div class="product-image pos-rel">
                                    <a href="shop-details.html" class=""><img src="assets/img/combo_pack/pack-1-1.jpg" alt="procuct img"></a>
                                 </div>
                                 <div class="product-desc">
                                    <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                          T-Shirt SSS</a>
                                    </div>
                                    <div class="product-price">
                                       <span class="price-now">£28.00</span>
                                    </div>
                                    <div class="product-rating">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="pack-price-btn">
                                 <div class="pack-total-price">£82.00</div>
                                 <button class="add-cart-btn">Add to Cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="product-package-photo pos-rel">

                        <?php
                        extract($listsanpham);
                        ?>
                        <?php
                        $img = $img_path . $img;

                        echo ' <img src="' . $img . '" alt="product image">';
                        ?>

                        <!-- <img src="assets/img/combo_pack/pack-1-all.jpg" alt="product image"> -->
                        <div class="product-image-nav">

                        </div>
                     </div>

                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- bundle area style end -->

      <!-- blog area start  -->
      <section class="blog-area pt-120 pb-110">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="section-title text-center">
                     <h2 class="section-main-title mb-50">Latest fashion news</h2>
                  </div>
               </div>
            </div>
            <div class="blog-items-wrapper">
               <!-- <div class="blog-single">
                  <div class="blog-single-inner">
                     <div class="blog-img">
                        <a href="blog-details.html">
                           <img src="assets/img/blog/b-1.jpg" alt="blog-img">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-folder-open"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.html">Fashion</a>
                              </div>
                           </div>
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-clock"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.html">31 Mar 2021</a>
                              </div>
                           </div>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.html">Worthy Cyber Monday Fashion
                              From Ecomart</a></h4>
                     </div>
                  </div>

               </div> -->
               <?php
               foreach ($listbanner as $banner) {
                  extract($banner);
                  $hinh = $img_path . $img;

                  echo '<div class="blog-single">
                  <div class="blog-single-inner">
                     <div class="blog-img">
                        <a href="blog-details.html">
                           <img src="' . $hinh . '" alt="blog-img">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-folder-open"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.html">Fashion</a>
                              </div>
                           </div>
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-clock"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.html">31 Mar 2021</a>
                              </div>
                           </div>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.html">' . $name . '</a></h4>
                     </div>
                  </div>

               </div>';
               }

               ?>

            </div>
         </div>
      </section>
      <!-- blog area end  -->

   </main>

   <!-- footer area start  -->
   <footer data-background="" class="footer2-bg">
      <section class="footer-area footer-area2 footer-area2-bg pt-95 pb-55">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 order-xl-1">
                  <div class="footer-widget footer2-widget footer2-widget1 mb-40">
                     <div class="footer-widget-logo mb-20">
                        <a href="index.html"><img src="assets/img/logo/logo-2-w.png" alt="img"></a>
                     </div>
                     <p class="mb-20">Ecomart is a fashion theme for presents a complete wardrobe of uniquely crafted
                        Ethnic
                        Wear, Casuals, Edgy Denims, &
                        Accessories inspired from the most contemporary</p>
                     <div class="social__links social-border">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 order-xl-5">
                  <div class="footer-widget footer2-widget footer2-widget5 mb-40 ">
                     <div class="footer-widget-title">
                        <h4>Newsletter</h4>
                     </div>
                     <p class="mb-20">Enter your email below to be the first to know about
                        new collections and product launches.</p>
                     <form action="#" class="subscribe-form subscribe-form-footer2">
                        <input type="text" placeholder="Enter your email">
                        <button type="submit">Subscribe Now<i class="fas fa-long-arrow-right"></i></button>
                     </form>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 order-xl-2">
                  <div class="footer-widget footer2-widget footer2-widget2 mb-40">
                     <div class="footer-widget-title">
                        <h4>Category</h4>
                     </div>
                     <ul>
                        <li><a href="#">Handbags & Wallets</a></li>
                        <li><a href="#">Women's Clothing</a></li>
                        <li><a href="#">Plus Sizes</a></li>
                        <li><a href="#">Complete Your Look</a></li>
                        <li><a href="#">Baby Corner</a></li>
                        <li><a href="#">Man & Woman Shoe</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 order-xl-3">
                  <div class="footer-widget footer2-widget footer2-widget3 mb-40">
                     <div class="footer-widget-title">
                        <h4>Information</h4>
                     </div>
                     <ul>
                        <li><a href="#">About Company</a></li>
                        <li><a href="#">Payment Type</a></li>
                        <li><a href="#">Awards Winning</a></li>
                        <li><a href="#">World Media Partner</a></li>
                        <li><a href="#">Become an Agent</a></li>
                        <li><a href="#">Refund Policy</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 order-xl-4">
                  <div class="footer-widget footer2-widget footer2-widget4 mb-40 ">
                     <div class="footer-widget-title">
                        <h4>Help & Support</h4>
                     </div>
                     <ul>
                        <li><a href="#">Dealers & Agents</a></li>
                        <li><a href="#">FAQ Information</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Shipping & Delivery</a></li>
                        <li><a href="#">Order Tranking</a></li>
                        <li><a href="#">List of Shops</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="copyright-area copyright2-area">
         <div class="container">
            <div class="copyright2-inner">
               <div class="copyright-text copyright2-text">
                  Copyright by <a href="https://themeforest.net/user/bdevs/portfolio">BDevs</a>. All Rights Reserved
               </div>
               <div class="copyright-link">
                  <a href="#" class="text-btn">Privacy Policy</a>
                  <a href="#" class="text-btn">Terms & Conditions</a>
                  <a href="#" class="text-btn">Sitemap</a>
               </div>
               <div class="cards-wrapper">
                  <p>We Support</p>
                  <div class="card-links">
                     <ul>
                        <li><a href="#"><img src="assets/img/cards/card-1.png" alt="card-img"></a></li>
                        <li><a href="#"><img src="assets/img/cards/card-2.png" alt="card-img"></a></li>
                        <li><a href="#"><img src="assets/img/cards/card-3.png" alt="card-img"></a></li>
                        <li><a href="#"><img src="assets/img/cards/card-4.png" alt="card-img"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end  -->

   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
               <img src="assets/img/logo/logo-text.png" alt="logo-img">
               <img class="loading-logo" src="assets/img/logo/preloader.svg" alt="img">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->


   <!-- JS here -->
   <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
   <script src="assets/js/vendor/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/magnific-popup.min.js"></script>
   <script src="assets/js/parallax.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/jquery-ui-slider-range.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/counterup.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/validate.js"></script>
</body>