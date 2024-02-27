<?php
function  insert_sanpham($name, $hinh, $price, $id_groupproduct)
{
    $sql = "INSERT INTO products(name,img,price,id_groupproduct) VALUES('$name','$hinh','$price','$id_groupproduct')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM products WHERE id=" . $id;
    pdo_execute($sql);
}


function loadall_sanpham_home()
{
    $sql = "SELECT * FROM products WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// function loadall_sanpham_top10()
// {
//     $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

function loadall_sanpham($keyw = "", $id_groupproduct)
{
    $sql = "SELECT * FROM products WHERE 1";
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($id_groupproduct > 0) {
        $sql .= " and id_groupproduct='" . $id_groupproduct . "'";
    }
    $sql .= "  ORDER BY id DESC";
    $listproducts = pdo_query($sql);
    return $listproducts;
}


// function load_ten_dm($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     } else {
//         return "";
//     }
// }
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM products WHERE id=" . $id;
    $products = pdo_query_one($sql);
    return $products;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM products WHERE iddm=" . $iddm . " AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function   update_sanpham($id, $name, $hinh, $price, $id_groupproduct)
{

    if ($hinh != "") {
        $sql = "UPDATE products SET id_groupproduct='" . $id_groupproduct . "', name='" . $name . "' ,img='" . $hinh . "',price='" . $price . "' where id=" . $id;
    } else {
        $sql = "UPDATE products SET id_groupproduct='" . $id_groupproduct . "', name='" . $name . "' ,img='" . $hinh . "',price='" . $price . "' where id=" . $id;
    }
    pdo_execute($sql);
}
