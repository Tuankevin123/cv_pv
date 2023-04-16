<?php include_once "../resources/views/admin/header.php" ?>

<div class="name-btn">
                <p>Thêm mới sản phẩm</p>
                <a href="/product"><button type="button" class="btn btn-success">Danh sách</button></a>
            </div>

            <div class="form_add-sp">
                <form action="/create-product" method="POST" enctype="multipart/form-data">
                    <div class="text-input-form-sp">
                        <div class="text-input-form-sp-div1">
                            <div class="masp">
                                <p>Danh mục</p>
                                <select name="iddm" id="iddm">
                                <?php foreach ($category as $cate) : ?>
                <option value="<?= $cate->id ?>">
                    <?= $cate->ten_loai ?>
                </option>
            <?php endforeach ?>
                                </select>
                            </div>

                            <div class="price">
                                <p>Giá nhập</p>
                                <input type="number" name="price_n"> 
                            </div>

                            <div class="price">
                                <p>Giá bán</p>
                                <input type="number" name="price_b"> 
                            </div>
                        </div>

                        <div class="text-input-form-sp-div2">
                                <div class="tensp">
                                    <p>Tên sản phẩm</p>
                                    <input type="text" name="name"> 
                                </div>
                                <div class="address">
                                    <p>Địa chỉ nhập hàng</p>
                                    <input type="text" name="address_n"> 
                                </div>

                                <div class="address">
                                    <p>Địa chỉ bán hàng</p>
                                    <input type="text" name="address_b"> 
                                </div>
                        </div>

                        <div class="text-input-form-sp-div3">
                            <div class="tensp">
                                <p>Ảnh đại diện sản phẩm</p>
                                <input type="file" name="img"> 
                            </div>

                            <div class="mota">
                                <p>Mô tả</p>
                                <textarea name="mo_ta" id="mo_ta" cols="35" rows="6"></textarea>
                            </div>
                          
                        </div>

                        

                        
                    </div>

                    <div class="btn-form-sp">
                        <!-- <input type="submit" id="them" name="them" value="Thêm"> -->

                        <button type="submit" id="them">Thêm</button>

                        <input type="reset" id="nl" name="nl" value="Nhập lại">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php include_once "../resources/views/admin/footer.php" ?>