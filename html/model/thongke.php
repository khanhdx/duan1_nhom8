<?php
function loadall_thongke()
{
    $sql = "SELECT groupproduct.id AS madm, groupproduct.name AS tendm, COUNT(products.id) AS countsp, MIN(products.price) AS minprice, MAX(products.price) AS maxprice, AVG(products.price) AS avgprice";
    $sql .= " FROM products LEFT JOIN groupproduct ON groupproduct.id=products.id_groupproduct";
    $sql .= " GROUP BY groupproduct.id ORDER BY groupproduct.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_tkbl()
{
    $sql = "SELECT comments.id_product, COUNT(*) AS total_comments, products.img, products.name";
    $sql .= " FROM comments";
    $sql .= " LEFT JOIN products ON comments.id_product = products.id";
    $sql .= " WHERE comments.softdelete = 0";
    $sql .= " GROUP BY comments.id_product";
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadall_tkdh()
{
    $sql = " SELECT users.id AS iduser,users.user, users.img,
    COUNT(bill.id) AS total_orders, bill.bill_name FROM users LEFT JOIN
    bill ON users.id = bill.iduser GROUP BY users.id ORDER BY total_orders DESC";
    $listdh = pdo_query($sql);
    return $listdh;
}
?>