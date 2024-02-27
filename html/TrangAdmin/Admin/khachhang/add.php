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
                                    <h3> Thêm Mới Khách Hàng</h3>
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
                                        <form action="index.php?act=addtk" method="post">
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Tên Khách Hàng</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="name" placeholder="Nhập Tên">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Email</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="email" placeholder="Nhập Email ">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Số Điện Thoại</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="phone" placeholder="Nhập Số Điện Thoại">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Địa Chỉ</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="address" placeholder="Nhập Địa Chỉ ">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Mật Khẩu</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="password" placeholder="Nhập Mật Khẩu ">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Giới tính</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="gender" placeholder="Giới tính">
                                            </div>
                                            <div class>
                                                <div class="add_button">
                                                    <input type="submit" name="themmoi" class="btn_1" value="Thêm Mới">
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