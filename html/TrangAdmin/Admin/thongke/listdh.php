<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Thống kê đơn hàng</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Id sản phẩm</th> -->
                            <th scope="col">Id khách hàng</th>
                            <th scope="col">hình ảnh</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Tổng đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listdh as $dh) {
                            extract($dh);
                            echo
                            ' <tr>
                            <td>' . $iduser . '</td>
                            <td><img width="70px" src="../../upload/' . $img . '" alt="Product Image" style=" border-radius:5px;"></td>
                            <td>' . $bill_name . '</td>
                            <td>' . $total_orders . '</td>
                        </tr>';
                        
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>