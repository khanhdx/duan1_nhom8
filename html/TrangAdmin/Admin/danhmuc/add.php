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
                                    <h3> Thêm Mới Loại Áo</h3>
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
                                        <h5 class="modal-title text_white">Loại áo</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="index.php?act=adddm" method="post">
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Mã Loại Áo:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="maloai" disabled placeholder="auto number">
                                            </div>
                                            <div class="mb_10">
                                                <label for="">
                                                    <div class="main-title">
                                                        <h5 class="mb-0">Tên Loại Áo:</h5>
                                                    </div>
                                                </label>
                                                <input type="text" class="form-control" name="tenloai" placeholder="Tên loại áo">
                                            </div>
                                            <div class>
                                                <div class="add_button">
                                                    <input type="submit" name="themmoi" class="btn_1" value="Thêm Mới">
                                                    <input type="reset" class="btn_1" value="Nhập Lại">
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                    if(isset($thongBao) && ($thongBao != "")){
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