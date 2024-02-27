<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Danh sách loại áo</h4>
            </div>
            <form action="index.php?act=listsp" method="POST">
              
            Product:
            <select name="id_groupproduct" id="">
                <option value="0" selected>All</option>

                <?php foreach ($listgroupproduct as $groupproduct) {
                    extract($groupproduct);

                    echo '<option value="' . $id . '">' . $name . '</option>';
                }

                ?>
            </select>
            <input type="text" name="keyw" placeholder="Tim kiem">
                <input type="submit" name="listok" value="Search">

            </form>
           
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name Shirt </th>
                            <th scope="col">Image </th>
                            <th scope="col">Price </th>
                  
                            <th scope="col"><a href="index.php?act=addsp">ADD</a></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listproducts as $products) {
                            extract($products);
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;
                            $addbienthe = "index.php?act=addbienthe&id=" . $id;
                            $hinhpath = "../../upload/" . $img;
                            if (is_file($hinhpath)) {
                                $hinh = '<img width="100px" src="' . $hinhpath . '" alt="">';
                            } else {
                                $hinh = "NO IMAGE..";
                            }

                            echo
                            ' <tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
                        
                            <td> 
                            <a href="' . $suasp . '" class="status_btn"><input type="button" class="btn" value="Sửa"></a>
                                 <a href="' . $xoasp . '" class="status_btn"><input type="button" class="btn" value="Xóa">
                                 <a href="' . $addbienthe . '" class="status_btn"><input type="button" class="btn" value="Add bien the">
                                 </a>
                            </td>
                            
                        </tr>';
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


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