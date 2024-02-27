
<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/taikhoan.php";
include "view/header.php";
include "model/sanpham.php";
include "global.php";
include "model/danhmuc.php";
include "model/banners.php";
include "model/comment.php";
include "model/variants.php";
include "model/cart.php";



if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];



$listsanpham = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$listbanner = loadall_banners();
$listproducts = loadall_sanpham("", 0);
$listsizes = loadall_sizes();
$listcolors = loadall_colors();
$loadonebill = loadone_bill(0);
$cartss = loadone_cart(0);
$listbill = loadall_bill(0);
$list_sanpham_idbill = list_sanpham_idbill(0);



if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            # code...
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                insert_taikhoan($user, $password, $email, $address, $phone);
                $thongbao = "Đăng ký thành công !";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $checkuser = checkuser($user, $password);
                if (is_array($checkuser)) {
                    if ($user !== 'nguyendacquan') {
                        $_SESSION['user'] = $checkuser;
                        header('Location: index.php');
                    } else {
                        $_SESSION['user'] = $checkuser;
                        header('Location: TrangAdmin/Admin/index.php');
                    }
                } else {
                    echo "Login failed";
                }
            }

            include "view/taikhoan/dangnhap.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;

        case 'addtocart':

            if (isset($_POST['addto']) && ($_POST['addto'])) {
                // Sanitize input data
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $size = $_POST["size"];
                $color = $_POST["color"];
                $quantity = htmlspecialchars($_POST["quantity"]);
                $ttien = $quantity * $price;
                $bientam = true;
                foreach ($_SESSION['mycart'] as $i => $item) {
                    if ($item[0] === $id && $item[5] === $size && $item[6] === $color) {
                        $_SESSION['mycart'][$i][7] += $quantity;
                        $bientam = false;
                        break;
                    }
                }
                if ($bientam) {
                    $spadd = [$id, $name, $img, $price, $ttien, $size, $color, $quantity];
                    $_SESSION['mycart'][] = $spadd;
                }
            }

            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=addtocart');
            break;
        case 'sanpham':
            if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                $keyw = $_POST['keyw'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['id_groupproduct']) && ($_GET['id_groupproduct'] > 0)) {
                $id_groupproduct = $_GET['id_groupproduct'];
                $listproducts = loadall_sanpham($keyw, $id_groupproduct);
            } else {
                $id_groupproduct = 0;
            }

            include "view/shops.php";
            break;
        case 'sanphamhome':
            if (isset($_GET['id_groupproduct']) && ($_GET['id_groupproduct'] > 0)) {
                $id_groupproduct = $_GET['id_groupproduct'];
                $listproducts = loadall_sanpham($keyw = "", $id_groupproduct);
                include "view/home.php";
            }
            break;


        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $variants = loadone_variants($id);
                extract($variants);
                $listcomments = loadall_comments($id);
                if (isset($_POST['guidanhgia'])) {
                    $idhidden = $_POST['id_comment'];
                    $content = $_POST['comment'];
                    $time = date('Y-m-d H:i:s');
                    $name_user = $_SESSION['user']['user'];

                    insert_comments($content, $time, $id, $name_user);
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                    // var_dump($_SESSION['user']);

                }
            }
            include "view/sanphamct.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;

        case 'shops':

            if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                $keyw = $_POST['keyw'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['id_groupproduct']) && ($_GET['id_groupproduct'] > 0)) {
                $id_groupproduct = $_GET['id_groupproduct'];
                $listproducts = loadall_sanpham($keyw, $id_groupproduct);
            } else {
                $id_groupproduct = 0;
            }

            include "view/shops.php";
            break;
        case 'billcomfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id = 0;
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $code_order = "CODE" . rand(0, 99999999);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaydathang = date('Y-m-d H:i:s');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email, $address, $phone, $pttt, $code_order, $ngaydathang, $tongdonhang);

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[7], $cart[4], $idbill, $cart[5], $cart[6]);
                    // $spadd = [$id, $name, $img, $price,$ttien ,$size, $color, $quantity];
                }
                $_SESSION['mycart'] = [];
            }


            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billcomfirm.php";
            break;
        case 'delorder':
            $_SESSION['mycart'] = [];
            // include "view/cart/viewcart.php";
            header('Location: index.php?act=addtocart');
            include "view/cart/viewcart.php";
            break;


        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;

        case 'updatestatus':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $status = $_POST['bill_status'];
                update_status($id, $status);
                header("Location: {$_SERVER['REQUEST_URI']}");
                exit();
            }
            $listbill = loadall_bill($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;

        case 'mydetails':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $list_sanpham_idbill = list_sanpham_idbill($id);
            }
            $listsanpham = loadall_sanpham_home();
            include "view/cart/details.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $id = $_POST['id'];  // Add this line to define $id

                update_taikhoan($id, $user, $password, $email, $phone, $address);
                $_SESSION['user'] = checkuser($user, $password);
                $thongbao = "Cập nhật thành công !";
                // header('Location: index.php?act=edit_taikhoan');

            }

            include "view/taikhoan/edit_taikhoan.php";
            break;

        default:
            # code...
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";

?>

