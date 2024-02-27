<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Danh sách loại áo</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                       
                            <th scope="col">ID_USER</th>
                            <th scope="col">ID_PRO</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">NAME</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">SIZE</th>
                            <th scope="col">COLOR</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col">TOTAL</th>
                            <th scope="col">ID_BILL</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cartadmin as $carts) {
                            extract($carts);
                            $hinhpath = "../../upload/" . $img;
                            $xoacart = "index.php?act=delete_cart&id=" . $id;
                            if (is_file($hinhpath)) {
                                $hinh = '<img width="100px" src="' . $hinhpath . '" alt="">';
                            } else {
                                $hinh = "NO IMAGE..";
                            }

                        echo 
                                '<tr>
                                
                           
                              <td>' . $iduser . ' </td>
                              <td>' . $idpro . ' </td>
                              <td>' . $hinh . ' </td>
                              <td>' . $name . ' </td>
                              <td>' . $price . ' </td>
                              <td>' . $size . ' </td>
                              <td>' . $color . ' </td>
                              <td>' . $soluong . ' </td>
                              <td>' . $thanhtien . ' </td>
                              <td>BILL- ' . $idbill . ' </td>
                              <td><a href="'.$xoacart.'">Delete</a></td>
                              </tr>
                              ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>