<?php
function loadall_sizes()
{
    $sql = "SELECT * FROM sizes  ORDER BY id_size asc";
    $listsizes = pdo_query($sql);
    return $listsizes;
}
function loadone_variants($id)
{
    $sql = "SELECT * FROM variants
    LEFT JOIN products 
    ON products.id = variants.id 
    WHERE variants.id='$id'";
    $variants = pdo_query_one($sql);
    return $variants;
}
function loadone_sizes($id_size)
{
    $sql = "SELECT * FROM sizes WHERE id_size=" . $id_size;
    $listonesizes = pdo_query_one($sql);
    return $listonesizes;
}
function loadone_colors($id_color)
{
    $sql = "SELECT * FROM colors WHERE id_color=" . $id_color;
    $listonecolors = pdo_query_one($sql);
    return $listonecolors;
}
function loadall_colors()
{
    $sql = "SELECT * FROM colors  ORDER BY id_color asc";
    $listcolors = pdo_query($sql);
    return $listcolors;
}
function loadall_variants()
{
    $sql = "SELECT * FROM variants
    LEFT JOIN sizes ON variants.id_size = sizes.id_size  
    LEFT JOIN colors ON variants.id_color = colors.id_color  
    WHERE 1";
    $listvariants = pdo_query($sql);
    return $listvariants;
}
function insert_variant($quantity, $id_product, $size, $color)
{
    $sql = "INSERT INTO variants(quantity,id,id_size,id_color)VALUES( '$quantity', '$id_product', '$size', '$color')";
    
    pdo_execute($sql);
}
function load_variants_product($id)
{
    $sql = "SELECT * FROM variants 
    LEFT JOIN products 
    ON variants.id = products.id WHERE 1";
    $sql .= " AND variants.id = '$id'";
    $sql .= " ORDER BY variants.id_variant desc";
    $list_variants_product = pdo_query($sql);
    return $list_variants_product;
}
