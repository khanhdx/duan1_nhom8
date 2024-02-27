<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Thống kê bình luận</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">Id sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tổng số lượt bình luận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbl as $bl) {
                            extract($bl);
                            echo
                            ' <tr>
                            <td>' . $id_product . '</td>
                            <td>' . $name . '</td>
                            <td><img src="../../upload/' . $img . '" alt="Product Image" style="max-width: 100px;"></td>
                            <td>' . $total_comments . '</td>
                        </tr>';
                        
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>