<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO groupproduct(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM groupproduct ORDER BY id asc";
    $listgroupproduct = pdo_query($sql);
    return $listgroupproduct;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM groupproduct WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function  update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE groupproduct SET name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM groupproduct WHERE id=" . $id;
    pdo_execute($sql);
}
