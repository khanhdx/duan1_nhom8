<?php
ob_start();
session_start();
include "../../model/pdo.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "../../model/taikhoan.php";
include "../../model/banners.php";
include "../../model/thongke.php";
include "../../model/comment.php";
include "../../model/cart.php";
include "../../model/variants.php";
include "../../global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$loadonetk = loadone_users(0);
$billl = loadall_bill_admin();
$listsizes = loadall_sizes();
$listcolors = loadall_colors();
$loadonesp = loadone_sanpham(0);





include "header.php";
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // danh mục
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongBao = "Thêm Thành Công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listgroupproduct = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];

                update_danhmuc($id, $tenloai);
                $thongBao = "Cập Nhật Thành Công";
            }
            $listgroupproduct = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danhmuc($id);
            }
            $listgroupproduct = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


            //// ///  san pham


        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_groupproduct = $_POST['id_groupproduct'];
                $name = $_POST['name'];
                $price = $_POST['price'];

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($hinh);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    echo 'Thanh cong';
                } else {
                    insert_sanpham($name, $hinh, $price, $id_groupproduct);
                    echo "Them thanh cong";
                }
            }

            $listgroupproduct = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':

            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyw = $_POST['keyw'];
                $id_groupproduct = $_POST['id_groupproduct'];
            } else {
                $keyw = '';
                $id_groupproduct = 0;
            }
            $listgroupproduct = loadall_danhmuc();
            $listproducts = loadall_sanpham($keyw, $id_groupproduct);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listproducts = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;


        case 'delete_bill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_orders($_GET['id']);
            }
            $listbill = loadall_bill(0);
            include "bill/listbill.php";
            break;
        case 'delete_cart':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_cart($_GET['id']);
            }
            $cartadmin = loadall_cart_admin(0);
            include "bill/ctdonhang.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $products = loadone_sanpham($_GET['id']);

                $listgroupproduct = loadall_danhmuc();
                include "sanpham/update.php";
            }
            break;

        case 'updatesp':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $id_groupproduct = $_POST['id_groupproduct'];
                $name = $_POST['name'];
                $price = $_POST['price'];

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($hinh);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                update_sanpham($id, $name, $hinh, $price, $id_groupproduct);
                echo "Them thanh cong";
            }

            $listgroupproduct = loadall_danhmuc();
            $listproducts = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

            //khachhang

        case 'listtk':
            $list_users = loadall_users();
            include "khachhang/list.php";
            break;

        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suatk = loadone_users($_GET['id']);
            }
            $list_users = loadall_users();
            include "khachhang/update.php";
            break;


        case 'updatetk':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $gender = $_POST['gender'];
                $roles = $_POST['roles'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                update_users_ad($id, $user, $email, $phone, $address, $password, $gender, $roles, $hinh);
                $thongBao = "cập nhật thành công";
            }
            $list_users = loadall_users();
            include "khachhang/list.php";
            break;
        case 'xoatk';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $list_users = loadall_users("", 0);
            include "khachhang/list.php";
            break;
        case 'thongke';
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo';
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;

        case 'listbanner':
            $listbanner = loadall_banners();
            include "banner/list.php";
            break;
        case 'addbanner':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($hinh);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    echo 'Thanh cong';
                } else {
                    insert_banners($name, $hinh);
                    echo "Them thanh cong";
                }
            }

            $listbanner = loadall_banners();
            include "banner/add.php";

            break;
        case 'xoabn';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_banners($_GET['id']);
            }
            $listbanner = loadall_banners("", 0);
            include "banner/list.php";
            break;

        case 'suabn':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $banners = loadone_banners($_GET['id']);
            }
            $listbanner = loadall_banners();
            include "banner/update.php";
            break;

        case 'updatebn':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                update_banners($id, $name, $hinh);
                echo "Them thanh cong";
            }


            $listbanner = loadall_banners("", 0);
            include "banner/list.php";
            break;
        case 'dsbinhluan':
            $listcomments_admin = loadall_comments_admin();
            include "binhluan/list.php";
            break;
        case 'xoabl':
            $id_comment = $_GET['id_comment'];
            softdelete_comments($id_comment);
            $listcomments_admin = loadall_comments_admin();
            include "binhluan/list.php";
            break;
        case 'listbill':
            $listbill = loadall_bill(0);
            include "bill/listbill.php";
            break;
        case 'ctdonhang':
            $cartadmin = loadall_cart_admin();
            include "bill/ctdonhang.php";
            break;

        case 'updatesta':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bills = loadone_bill($_GET['id']);
            }
            $listbill = loadall_bill(0);
            include "bill/status.php";
            break;

        case 'updatestatus':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $status = $_POST['bill_status'];
                update_status($id, $status);
            }

            $billl = loadall_bill_admin();
            include "bill/listbill.php";
            break;

        case 'tkbl';
            $listbl = loadall_tkbl();
            include "thongke/listbl.php";
            break;
        case 'tkdh';
            $listdh = loadall_tkdh();
            include "thongke/listdh.php";
            break;
        case 'variants':
            $listvariants = loadall_variants();
            include "variants/list.php";
            break;


        case 'addbienthe':
            $product = loadone_sanpham($_GET['id']);
            $listsizes = loadall_sizes();
            $listcolors = loadall_colors();
            include "variants/add.php";
            break;
        case 'addvariants':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $quantity = $_POST['quantity'];
                $id_product = $_POST['id'];
                $color = $_POST['color'];
                $size = $_POST['size'];
                insert_variant($quantity, $id_product, $size, $color);
            }


            $listvariants = loadall_variants();
            include "variants/add.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: http://localhost:8080/duAnBanHang/webshirt/html/index.php?act=dangnhap');
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
