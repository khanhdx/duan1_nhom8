<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Danh Sách Tài Khoản</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">ID KH</th>
                            <th scope="col">NAME </th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Image</th>
                            <th scope="col">SỐ ĐIỆN THOẠI</th>
                            <th scope="col">ĐỊA CHỈ</th>
                            <th scope="col">MẬT KHẨU</th>
                            <th scope="col">GIOI TINH</th>
                            <th scope="col"><a href="index.php?act=add">Add</a></th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_users as $users) {
                            extract($users);
                            $suatk = "index.php?act=suatk&id=" . $id;
                            $xoatk = "index.php?act=xoatk&id=" . $id;
                            $hinhpath = "../../upload/" . $img;
                            if (is_file($hinhpath)) {
                                $hinh = '<img width="50px" src="' . $hinhpath . '" alt="">';
                            } else {
                                $hinh = "NO IMAGE..";
                            }

                            echo '
                            <tr>
                                        <td>' . $id . ' </td>
                                        <td>' . $user . ' </td>
                                        <td>' . $email . ' </td>
                                        <td>' . $roles . ' </td>
                                        <td>' . $hinh. ' </td>
                                        <td>' . $phone . ' </td>
                                        <td>' . $address . ' </td>
                                        <td>' . $password . ' </td>
                                        <td>' . $gender . ' </td>
                                       
                                       
                                       
                                        <td> <a href="' . $suatk . '" class="status_btn"><input type="button" class="btn" value="Sửa"></a>
                                        <a href="' . $xoatk . '" class="status_btn"><input type="button" class="btn" value="Xóa"></a></td> </td>
                                        
                            
                              
                                
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