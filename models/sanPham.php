<?php
require_once 'db.php';

    function listSanPham()
    {
        $sql = "select * from products";
        return getData($sql);
    }
    function getOne($idSP)
    {
        $sql = "select * from products where id=" . $idSP;
        return getData($sql);
    }
    
