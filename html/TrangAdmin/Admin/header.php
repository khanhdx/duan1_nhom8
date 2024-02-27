<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/analytic-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 15:14:54 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ADMIN</title>
    <link rel="icon" href="../img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="../css/bootstrap1.min.css" />

    <link rel="stylesheet" href="../vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="../vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="../vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="../vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="../vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="../tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="../vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="../vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="../vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="../vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="../vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="../vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="../vendors/morris/morris.css">

    <link rel="stylesheet" href="../vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="../css/metisMenu.css">

    <link rel="stylesheet" href="../css/style1.css" />
    <!-- <link rel="stylesheet" href="../css/style.css" /> -->
    <link rel="stylesheet" href="../css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">


    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="index.php"><img src="../img/logo.png" alt></a>
            <a class="small_logo" href="index.php"><img src="../img/mini_logo.png" alt></a>

            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>

        </div>
        <ul id="sidebar_menu">
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/5.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Quản lý danh mục</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=listdm">Danh sách</a></li>
                    <li><a href="index.php?act=adddm">Thêm mới</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/16.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Pages</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=listbanner">Image Banner</a></li>
                    <li><a href="index.php?act=addbanner">Add banner</a></li>

                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/4.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Quản lý sản phẩm</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=listsp">Danh sách</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/4.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Quản lý tài khoản</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=listtk">Danh sách</a></li>
                    <li><a href="index.php?act=addtk">Thêm mới</a></li>
                </ul>
            </li>

            <li class>





                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/4.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Quản lý bình luận</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=dsbinhluan">DSBL</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/4.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Quản lý Variants</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=variants">List Variants</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/8.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Quản lý đơn hàng</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=listbill">List don hang</a></li>
                    <li><a href="index.php?act=ctdonhang">Product details</a></li>

                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/9.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Thống kê</span>
                    </div>
                </a>
                <ul>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
                    <li><a href="index.php?act=bieudo">Biểu đồ</a></li>
                    <li><a href="index.php?act=tkbl">Thống kê bình luận</a></li>
                    <li><a href="index.php?act=tkdh">Thống kê đơn hàng</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="../img/menu-icon/9.svg" alt>
                    </div>
                    <div class="nav_title">
                        <span>Option</span>

                    </div>
                </a>
                <ul>
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        if ($roles == 1 || $roles == 2) {
                    ?>
                            <li><a href="trangadmin/admin/index.php" style="color:black">Ad_<?= $user ?></a></li>
                            <!-- <li><a href="index.php?act=edit_taikhoan" style="color:black">Up_Account</a></li> -->
                            <!-- <li><a href="index.php?act=mybill" style="color:black">My order</a></li> -->

                            <li><a href="index.php?act=thoat" style="color:black">Logout</a></li>
                        <?php
                        } else {
                        ?><li><a href="#" style="color:black">User_<?= $user ?></a></li>
                            <!-- <li><a href="index.php?act=edit_taikhoan" style="color:black">Account_ed</a></li> -->
                            <!-- <li><a href="index.php?act=mybill" style="color:black">My order</a></li> -->
                            <li><a href="index.php?act=thoat" style="color:black">Logout</a></li><?php } ?>
                    <?php
                    } else {
                    ?>
                        <li><a href="index.php?act=dangnhap" style="color:black">Login</a></li>

                    <?php
                    }   ?>
                </ul>
            </li>
            </div>
        </ul>
    </nav>