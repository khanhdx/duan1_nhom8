<?php
function viewcart()
{

    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[7];
        $tong += $ttien;
        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><i class="fa fa-times"></i></a>';
?>
        <tr>
            <td class="product-thumbnail"><img src="<?= $hinh ?>" alt="img"></td>
            <td class="product-name"><?= $cart[1] ?></td>
            <td class="product-price">$<?= $cart[3] ?></td>
            <td class="product-size"><?= $cart[5] ?></td>
            <td class="product-color"><?= $cart[6] ?></td>
            <td class="product-quantity text-center"><?= $cart[7] ?></td>
            <td class="product-subtotal">$<?= $ttien ?></td>
            <td class="product-remove"><?= $xoasp ?></td>

        </tr>
<?php

        $i += 1;
    }
    echo '<br>' . ' <tr><th colspan="8" style="font-size:20px; margin-top:50px">Total Price  $' . $tong . '</th></tr>';
}

function tongdonhang()
{

    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[7];
        $tong += $ttien;
    }
    return $tong;
}


function insert_bill($iduser, $name, $email, $address, $phone, $pttt, $code_order, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_phone,bill_pttt,ngaydathang,total,code_order)values('$iduser','$name','$email','$address','$phone','$pttt','$ngaydathang','$tongdonhang','$code_order')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $quantity, $ttien, $idbill, $size, $color)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill,size,color)values('$iduser','$idpro','$img','$name','$price','$quantity','$ttien','$idbill','$size','$color')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadone_cart($id)
{
    
    $sql = "SELECT * FROM cart JOIN bill ON  cart.iduser = bill.iduser WHERE cart.id =".$id;
    $cartss = pdo_query($sql);
    return $cartss;
}

function loadall_cart($idbill)
{
    $sql = "SELECT * FROM bill where id=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_bill_admin()
{
    $sql = "SELECT * FROM bill where 1";
    $billl = pdo_query($sql);
    return $billl;
}
function loadall_cart_admin($id)
{
    $sql = "SELECT * FROM cart where iduser='$id'";
    $cartadmin = pdo_query($sql);
    return $cartadmin;
}

function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM bill where id=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill($iduser)
{

    $sql = "SELECT * FROM bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_bills($idbill)
{

    $sql = "SELECT * FROM cart where 1";
    if ($idbill > 0) $sql .= " AND id=" . $idbill;
    $sql .= " order by id desc";
    $listbilll = pdo_query($sql);
    return $listbilll;
}



function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đang chờ sử lý";
            # code...
            break;
        case '1':
            $tt = "Đang giao hàng";
            break;
        case '2':
            $tt = "Giao hàng hoàn tất";
            break;
        case '3':
            $tt = "Đơn hàng đã hủy";
            break;
        case '4':
            $tt = "Đơn hàng đã hủy";
            break;
        default:
            # code...$
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_pttt($pt)
{
    switch ($pt) {
        case '1':
            $ttt = "Thanh toán khi nhận hàng";
            break;
        case '2':
            $ttt = "Thanh toán online";
            break;
        default:
            # code...$
            // $ttt = "Thanh toán khi nhận ";
            break;
    }
    return $ttt;
}



function   update_status($id, $status)
{
    $sql = "UPDATE bill SET bill_status= '" . $status . "' where id=" . $id;
    pdo_execute($sql);
}


function delete_orders($id)
{
    $sql = "DELETE FROM bill WHERE id=" . $id;
    pdo_execute($sql);
}
function delete_cart($id)
{
    $sql = "DELETE FROM cart WHERE id=" . $id;
    pdo_execute($sql);
}



function list_sanpham_idbill($id){
    $sql="SELECT * FROM cart LEFT JOIN bill ON cart.idbill= bill.id WHERE cart.idbill='$id'";
    $sql.=" ORDER BY cart.idbill DESC";
    $list_sanpham_idbill = pdo_query($sql);
    return $list_sanpham_idbill;
}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>