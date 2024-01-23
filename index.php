<?php
session_start();
// dieu huong cac phuong thuc tu controller
require_once 'models/sanPham.php';
require_once 'models/cat.php';
include('views/header.php');
$listSanPham = listSanPham() ;
$listCat = listCat() ;
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'detailSP':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $idSP = $_GET['id'];
                $detailSP = getOne($idSP);
            } else {
                $maLoaiPhong = 0;
            }
            include('views/detail.php');

            break;
        case 'shop':
            include 'views/shop.php';
            break;
        case 'detail':
            include 'views/detail.php';
            break;
        case 'cart':
            include 'views/cart.php';
            break;
        case 'checkout':
            include 'views/checkout.php';
            break;
        case 'contact':
            include 'views/contact.php';
            break;

        default:
            // include 'view/main.php';
            break;
    }
} else {
    include('views/main.php');
}

include('views/footer.php');

?>