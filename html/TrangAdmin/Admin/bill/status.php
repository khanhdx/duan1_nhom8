<?php
if (is_array($bills)) {
    extract($bills);
}


?>

<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Danh sách loại áo</h4>
            </div>
            <div class="QA_table mb_30">
                <form action="index.php?act=updatestatus" method="POST">
                    <table class="table lms_table_active ">
                        <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">TT</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <select class="sel" name="bill_status" value="<?= $bills['bill_status'] ?>">
                                        <option value="0">Đang chờ xử lý</option>
                                        <option value="1">Đang giao</option>
                                        <option value="2">Giao hàng hoàn tất</option>
                                        <option value="3">Đơn hàng đã hủy</option>
                                        
                                    </select>
                                </td>
                                <td>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input style="width: 150px; height:30px;border-radius:4px;" class="hover-capnhat" type="submit" name="capnhat" value="Update Status">
                                </td>
                            </tr>



                        </tbody>
                        <style>
                            .hover-capnhat:hover {
                                background-color: white;
                                color: black;
                            }
                            .sel{
                                width: 100%;
                                height: 30px;
                            }
                        </style>


                    </table>


                </form>


            </div>
        </div>
    </div>