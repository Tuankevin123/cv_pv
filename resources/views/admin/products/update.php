<?php include_once "../resources/views/admin/header.php" ?>

    <!-- if(is_array($suasp)){
        extract($suasp);
    }

    $imgpath = "../upload/".$img;
        if(is_file($imgpath)){
          $img = "<img src='".$imgpath."' width='100' height='60'>";
        }
        else{
          $img = "Không có ảnh";
        } -->


<div class="name-btn">
                <p>Sửa sản phẩm</p>
                <a href="/product"><button type="button" class="btn btn-success">Danh sách</button></a>
            </div>

            <div class="form_add-sp">
                <form action="/update-product" method="POST" enctype="multipart/form-data">
                    <div class="text-input-form-sp">
                        <input type="hidden" name="id" value="<?= $product->id ?>">

                        <div class="text-input-form-sp-div1">

                            <div class="masp">
                                <p>Danh mục</p>
                                <select name="iddm" id="iddm">
                                    <?php 
                                        foreach($category as $lit) :?>
                                        
                                            <!-- // extract($lit); -->
                                            <?php if($product->iddm == $lit->id) :  ?>
                                            <option value="<?= $lit->id ?>" selected><?= $lit->ten_loai ?></option>';

                                            <?php else : ?>
                                            
                                                echo '<option value="<?= $lit->id ?>"><?= $lit->ten_loai ?></option>';
                                            
                                            <?php endif ?>
                                            
                                    <?php endforeach ?>
                                    
                                </select>
                            </div>

                            <div class="price">
                                <p>Giá nhập</p>
                                <input type="number" name="price_n" value="<?= $product->price_n ?>"> 
                            </div>

                            <div class="price">
                                <p>Giá bán</p>
                                <input type="number" name="price_b" value="<?= $product->price_b ?>"> 
                            </div>
                        </div>

                        <div class="text-input-form-sp-div2">
                                <div class="tensp">
                                    <p>Tên sản phẩm</p>
                                    <input type="text" name="name" value="<?= $product->name ?>"> 
                                </div>
                                <div class="address">
                                    <p>Địa chỉ nhập hàng</p>
                                    <input type="text" name="address_n" value="<?= $product->address_n ?>"> 
                                </div>

                                <div class="address">
                                    <p>Địa chỉ bán hàng</p>
                                    <input type="text" name="address_b" value="<?= $product->address_b ?>"> 
                                </div>
                        </div>

                        <div class="text-input-form-sp-div3">
                            <div class="tensp">
                                <p>Ảnh đại diện sản phẩm</p>
                                <img src="src/img/<?= $product->img ?>" width="120" alt="">
                                <input type="file" name="img"> 
                            </div>

                            <div class="mota">
                                <p>Mô tả</p>
                                <textarea name="mo_ta" id="mo_ta" cols="35" rows="6"><?= $product->mo_ta ?></textarea>
                            </div>
                          
                        </div>

                        

                        
                    </div>

                    <div class="btn-form-sp">
                        <!-- <input type="submit" id="them" name="capnhat" value="Cập nhật"> -->
                        <button type="submit" id="them">Cập nhật</button>
                        <input type="reset" id="nl" name="nl" value="Nhập lại">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php include_once "../resources/views/admin/footer.php" ?>