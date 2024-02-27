<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Danh Sách Bình Luận</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                           
                            <th scope="col">Noi Dung </th>
                            <th scope="col">User</th>
                            <th scope="col">Idpro</th>
                            <th scope="col">Ngay Binh Luan</th>
                            <th scope="col"><a href="">Add</a></th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listcomments_admin as $comment) {
                            extract($comment);
                         
                            $xoabl = "index.php?act=xoabl&id_comment=" . $id_comment;
                            echo '
                            <tr>
                                     
                                        <td>' . $content . ' </td>
                                        <td>' . $user. ' </td>
                                        <td>' . $id_product . ' </td>
                                        <td>' . $time . ' </td>
                                        <td> 
                                        <a href="' . $xoabl . '" class="status_btn"><input type="button" class="btn" value="Xóa"></a></td> </td>
                                    
                            </tr>
                            ';
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