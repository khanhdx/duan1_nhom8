<?php
function insert_banners($name,$hinh)
{
    $sql = "INSERT INTO banners(img,name) VALUES('$hinh','$name')";
    pdo_execute($sql);
}
function loadall_banners()
{
    $sql = "SELECT * FROM banners ORDER BY id asc";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
function loadone_banners($id)
{
    $sql = "SELECT * FROM banners WHERE id=" . $id;
    $banners = pdo_query_one($sql);
    return $banners;
}
function  update_banners($id, $name, $hinh)
{
    $sql = "UPDATE banners SET name='" . $name . "' , img='" . $hinh . "'  where id=" . $id;
    pdo_execute($sql);
}

function delete_banners($id)
{
    $sql = "DELETE FROM banners WHERE id=" . $id;
    pdo_execute($sql);
}
