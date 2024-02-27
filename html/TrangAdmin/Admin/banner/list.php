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
                            <th scope="col">id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbanner as $banner) {
                            extract($banner);
                            $suabn = "index.php?act=suabn&id=" . $id;
                            $xoabn = "index.php?act=xoabn&id=" . $id;
                            $hinhpath = "../../upload/" .$img;
                            if (is_file($hinhpath)) {
                                $hinh = '<img width="100px" src="' . $hinhpath . '" alt="">';
                            } else {
                                $hinh = "NO IMAGE";
                            }
                            echo
                            ' <tr>
                                <td>' . $id . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $name . '</td>
                                <td><a href="' . $suabn . '" class="status_btn"><input type="button" class="btn" value="Sửa"></a>
                                 <a href="' . $xoabn . '" class="status_btn"><input type="button" class="btn" value="Xóa"></a></td>
                            </tr>';
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>