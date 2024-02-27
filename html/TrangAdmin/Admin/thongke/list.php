<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Thống kê sản phẩm theo loại</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">Mã danh mục</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá cao nhất</th>
                            <th scope="col">Giá thấp nhất </th>
                            <th scope="col">Giá trung bình </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo
                            ' <tr>
                            <td>' . $madm . '</td>
                            <td>' . $tendm . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $maxprice . '</td>
                            <td>' . $minprice . '</td>
                            <td>' . $avgprice . '</td>
                            <td>  
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>