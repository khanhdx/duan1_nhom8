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
                            <th scope="col">id_loaihang</th>
                            <th scope="col">Ten </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listgroupproduct as $groupproduct) {
                            extract($groupproduct);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;
                            echo
                            ' <tr>
                                <th scope="row"> <a href="#" class="question_content">
                                        ' . $id . '</a></th>
                                <td>' . $name . '</td>
                                <td><a href="' . $suadm . '" class="status_btn"><input type="button" class="btn" value="Sửa"></a>
                                 <a href="' . $xoadm . '" class="status_btn"><input type="button" class="btn" value="Xóa"></a></td>
                            </tr>';
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>