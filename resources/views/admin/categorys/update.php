<?php include_once "../resources/views/admin/header.php" ?>

<div class="name-btn">
                <p>Sửa loại hàng</p>
                <a href="/category"><button type="button" class="btn btn-success">Danh sách</button></a>
            </div>

            <div class="form_add">
                <form action="/update-category" method="POST">
                    <div class="text-input-form">
                        <div class="maloai">
                            <p>Mã loại</p>

                                <input type="text" name="id" value="<?= $category->id ??= '' ?>" disabled>
  
                        </div>
                    
                        <div class="tenloai">
                            <p>Tên loại</p>
                            <input type="text" name="ten_loai" value="<?= $category->ten_loai ?>"> 

                            <?php if(isset($err_ten_loai)) : ?>
                                <p class="err">
                                    <?= $err_ten_loai ??= '' ?>
                                </p>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="btn-form">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <!-- <input type="submit" id="them" name="capnhat" value="Cập nhật"> -->
                        <button type="submit" id="them" >Cập nhật</button>

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