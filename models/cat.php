<?php
require_once 'db.php';

    function listCat()
    {
        $sql = "select * from categories";
        return getData($sql);
    }