<?php
if (is_array($suatk)) {
    extract($suatk);

}

$hinhpath = "../../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = '<img width="100px" src="' . $hinhpath . '" alt="">';
} else {
    $hinh = "No image";
}


?>
<section class="main_content dashboard_part large_header_bg">
    <div class="container-fluid g-0">
    </div>
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3> Cập Nhật Tài Khoản</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Khách Hàng</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="index.php?act=updatetk" method="POST" enctype="multipart/form-data">
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Name</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="user" value="<?= $suatk['user'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Email</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="email" value="<?= $suatk['email'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Số Điện Thoại</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="phone" value="<?= $suatk['phone'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Mật Khẩu</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="password" value="<?= $suatk['password'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Địa Chỉ</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="address" value="<?= $suatk['address'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Gioi Tinh</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="gender" value="<?= $suatk['gender'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Vai Trò</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="roles" value="<?= $suatk['roles'] ?>">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Vai Trò</h5>
                                                    </div>
                                                </label>
                                                <input type="file" class="form-control" name="hinh">
                                                <a style="width: 100px;" href=""><?= $hinh ?></a>
                                            </div>
                                            <div class>
                                                <div class="add_button">
                                                    <input type="hidden" name="id" class="btn_1" value="<?= $suatk['id'] ?>">
                                                    <input type="submit" name="capnhat" class="btn_1" value="Cập nhật">
                                                    <input type="reset" class="btn_1" value="Nhập Lại">
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($thongBao) && ($thongBao != "")) {
                                            echo $thongBao;
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>