<?php include_once "../resources/views/admin/header.php" ?>
<div class="name-btn">
                <p>Thêm mới loại hàng</p>
                <a href="/category"><button type="button" class="btn btn-success">Danh sách</button></a>
            </div>

            <div class="form_add">
                <form action="/create-category" method="POST" enctype="multipart/form-data">
                    <div class="text-input-form">
                        <div class="maloai">
                            <p>Mã loại</p>
                               
                                <input type="text" name="id" value="" disabled>
                                

                        </div>
                    
                        <div class="tenloai">
                            <p>Tên loại</p>
                            <input type="text" name="ten_loai" > 

                            
                        </div>
                    </div>

                    <div class="btn-form">
                        <!-- <input type="submit" id="them" name="" value="Thêm"> -->
                        <button type="submit" id="them" name="">Thêm</button>

                        <input type="reset" id="nl" name="nl" value="Nhập lại">
                    </div>

                    <div class="tb">
                        <?php if(isset($tb) && ($tb!='')) echo $tb; ?>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php include_once "../resources/views/admin/footer.php" ?>