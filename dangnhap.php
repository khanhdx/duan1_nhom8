<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from wphix.com/html/ecomart-prev/ecomart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 14:04:19 GMT -->

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Ecomart - Fashion eCommerce HTML Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/preloader.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/backToTop.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/ui-range-slider.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <link rel="stylesheet" href="assets/css/default.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- header area start  -->
   <header class="header1">
      <div class="header-top d-none d-md-block">

         <?php
         if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
         ?>



            <li><a href="#" style="color:black"> <?= $user ?></a> --- <a href="index.php?act=thoat" style="color:black">Logout</a></li>
         <?php
         } else {
         ?>


            <div class="container header-container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="header-top-link">
                        <a href="#" class="text-btn">About Us</a>
                        <a href="#" class="text-btn">My account</a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="header-top-right">
                        <a href="login.html" class="text-btn"><i class="flaticon-avatar"></i>Sign in</a>
                        <select name="lan-select" id="lan-select" class="language-select border-left">
                           <option value="1">English</option>
                           <option value="2">Hindi</option>
                           <option value="3">Arabic</option>
                           <option value="3">Bengali</option>
                           <option value="3">French</option>
                        </select>
                        <select name="currency-select" id="currency-select" class="currency-select border-left">
                           <option value="1">USD</option>
                           <option value="2">EUR</option>
                           <option value="3">JPY</option>
                           <option value="4">GBP</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
      </div>


   <?php
         }

   ?>

   <div id="header-sticky" class="header-main header-main1">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
               <div class="header-main-content-wrapper">
                  <div class="header-main-left header-main-left-header1">
                     <div class="header-logo header1-logo">
                        <a href="index.php" class="logo-bl"><img width="150px" src="assets/img/logo/GroupThree.png" alt="logo-img"></a>
                     </div>
                     <div class="main-menu main-menu1 d-none d-lg-block">
                        <nav id="mobile-menu">
                           <ul>
                              <li class="menu-item-has-children"><a href="index.php">Home</a>

                              </li>
                              <li class="menu-item-has-children"><a href="shop.html">Shop</a>


                              </li>


                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="header-main-right header-main-right-header1">
                     <form action="#" class="filter-search-input header-search d-none d-xl-inline-block">
                        <input type="text" placeholder="Search Products.....">
                        <button><i class="fal fa-search"></i></button>
                     </form>
                     <div class="action-list d-none d-md-flex action-list-header1">
                        <div class="action-item action-item-cart">
                           <a href="index.php?act=addtocart" class="view-cart-button">
                              <i class="fal fa-shopping-bag"></i>
                              <!-- <span class="action-item-number">3</span> -->
                           </a>
                        </div>
                        <!-- <div class="action-item action-item-wishlist">
                           <a href="javascript:void(0)" class="view-wishlist-button">
                              <i class="fal fa-heart"></i>
                              <span class="action-item-number">2</span></a>
                        </div> -->
                     </div>
                     <div class="menu-bar d-xl-none ml-20">
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
               <div class="offset-profile-action d-md-none">
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

      <!-- page title area start  -->

      <!-- page title area end  -->

      <!-- register area start  -->
      <div class="register-area pt-120 pb-120">
         <div class="container container-small">

            <?php
            if (isset($_SESSION['user'])) {
               extract($_SESSION['user']);
            ?>
            <?php
            } else {
            ?>




               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <form action="index.php?act=dangnhap" method="POST">
                        <div class="signup-form-wrapper">
                           <div class="signup-wrapper">
                              <input type="text" placeholder="Email or Username" name="user">
                           </div>
                           <div class="signup-wrapper">
                              <input type="text" placeholder="Password" name="password">
                           </div>
                           <div class="signup-action">

                           </div>
                           <div class="">
                              <style>
                                 .hoverr:hover {
                                    background-color: black;
                                    border-radius: 4px;
                                    color: white;
                                 }
                              </style>
                              <!-- <button class="sing-btn" name="sub">Login</button> -->
                              <input type="submit" name="dangnhap" value="Login" style="width: 100%;border-radius:4px;" class="hoverr">
                           </div>
                           <div class="registered wrapper">
                              <div class="not-register">
                                 <span>Not registered?</span><span><a href="index.php?act=dangky">Sign up</a></span>
                              </div>
                              <div class="forget-password">
                                 <a href="#">Forgot password?</a>
                              </div>
                           </div>
                           <div class="sign-social text-center">
                              <span>Or Sign- in with</span>
                           </div>
                           <div class="sign-social-icon">
                              <div class="sign-facebook">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9.034" height="18.531" viewBox="0 0 9.034 18.531">
                                    <path id="Path_212" data-name="Path 212" d="M183.106,757.2v-1.622c0-.811.116-1.274,1.39-1.274h1.621v-3.127h-2.664c-3.243,0-4.285,1.506-4.285,4.169v1.969h-2.085v3.127h1.969v9.265h4.054v-9.265h2.664l.347-3.243Z" transform="translate(-177.083 -751.176)" fill="#2467ec"></path>
                                 </svg>
                                 <a href="#">Facebook</a>
                              </div>
                              <div class="sign-gmail">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21.692" height="16.273" viewBox="0 0 21.692 16.273">
                                    <g id="gmail" transform="translate(0 -63.953)">
                                       <path id="Path_8685" data-name="Path 8685" d="M1.479,169.418H4.93v-8.381l-2.26-3.946L0,157.339v10.6a1.479,1.479,0,0,0,1.479,1.479Z" transform="translate(0 -89.192)" fill="#0085f7"></path>
                                       <path id="Path_8686" data-name="Path 8686" d="M395.636,169.418h3.451a1.479,1.479,0,0,0,1.479-1.479v-10.6l-2.666-.248-2.264,3.946v8.381Z" transform="translate(-378.874 -89.192)" fill="#00a94b"></path>
                                       <path id="Path_8687" data-name="Path 8687" d="M349.816,65.436,347.789,69.3l2.027,2.541,4.93-3.7V66.176A2.219,2.219,0,0,0,351.2,64.4Z" transform="translate(-333.054)" fill="#ffbc00"></path>
                                       <path id="Path_8688" data-name="Path 8688" d="M72.7,105.365l-1.932-4.08L72.7,98.956l5.916,4.437,5.916-4.437v6.409L78.619,109.8Z" transform="translate(-67.773 -33.52)" fill="#ff4131" fill-rule="evenodd"></path>
                                       <path id="Path_8689" data-name="Path 8689" d="M0,66.176v1.972l4.93,3.7V65.436L3.55,64.4A2.219,2.219,0,0,0,0,66.176Z" transform="translate(0)" fill="#e51c19"></path>
                                    </g>
                                 </svg>
                                 <a href="#">Google</a>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
         </div>

      <?php
            }

      ?>
      </div>
      <!-- register area end  -->







   </main>

   <!-- footer area start  -->

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
</body>


<!-- Mirrored from wphix.com/html/ecomart-prev/ecomart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 14:04:20 GMT -->

</html>