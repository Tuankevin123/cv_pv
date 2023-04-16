<?php include_once "../resources/views/header.php" ?>
<style>
    .dm-right .sanpham a{
        text-decoration: none;
    }

    .loc-dm .check-dm a{
    text-decoration: none;
    color: black;
}

.loc-sp .loc-dm{
    height: 300px;
}
</style>

<main>

        <div class="danhmuc">
            <div class="dm-left">
                <div class="tieude-dm">
                    <span class="gray">TRANG CHỦ </span><span>/</span><span class="black"> DANH MỤC</span>
                </div>

                <div class="loc-sp">
                    <div class="tieu-de">
                        <span><i class="fa-sharp fa-solid fa-filter"></i></span><span>BỘ LỌC TÌM KIẾM</span>
                    </div>
                    <div class="loc-dm">
                        <p>Theo Danh Mục</p>
                        <?php foreach($category as $value) : ?>
                        <div class="check-dm" >
                            <input type="checkbox"> <a href="/danhmuc?id=<?= $value->id ?>"><?= $value->ten_loai ?></a>
                        </div>
                        
                        <?php endforeach ?>
                    </div>

                    <!-- ---------- Địa điểm ----------- -->

                    <div class="loc-diadiem">
                        <p>Nơi Bán</p>
                        <div class="check-dm">
                            <input type="checkbox"> Hà Nội
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> TP.Hồ Chí Minh
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Thái Nguyên
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Vĩnh Phúc
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Cần Thơ
                        </div>
                    </div>


                    <!-- --------- Đơn vị vận chuyển ---- -->
                    
                    <div class="loc-dvvc">
                        <p>Đơn Vị Vận Chuyển</p>
                        <div class="check-dm">
                            <input type="checkbox"> Hỏa Tốc
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Nhanh
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Tiết Kiệm
                        </div>
                        
                    </div>


                    <!-- --------- Thương Hiệu ---- -->
                    
                    <div class="loc-thuonghieu">
                        <p>Thương Hiệu</p>
                        <div class="check-dm">
                            <input type="checkbox"> Teelap
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Nike
                        </div>
                        <div class="check-dm">
                            <input type="checkbox"> Localbran
                        </div>
                        
                    </div>


                    <!-- --------- Đánh Giá --------- -->
                    
                    <div class="loc-dg">
                        <p>Đánh Giá</p>
                        <div class="check-dm">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="check-dm">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="check-dm">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="check-dm">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="check-dm">
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        
                    </div>


                    <!-- --------- Giá ---- -->
                    
                    <div class="loc-gia">
                        <p>Khoảng Giá</p>
                        <div class="check-dm">
                            <input type="number" placeholder="đ Từ"> <span>-</span> <input type="number" placeholder="đ Đến">
                        </div>
                        
                        <div class="button-delete">
                            <button>ÁP DỤNG</button>
                        </div>
                        
                    </div>

                    <div class="button-delete">
                        <button>XÓA TẤT CẢ</button>
                    </div>
                </div>


                <!-- ---------------- Bài Viết ---------- -->

                <div class="bai-viet">
                    <div class="tieude">
                        <p>BÀI VIẾT MỚI NHẤT</p>
                    </div>

                    <div class="div-baiviet">
                        <div class="text-img">
                            <div class="img">
                                <img src="src/img/giay_nike1.webp" alt="">
                            </div>

                            <div class="text">
                                <p>Converse sẽ mang Golf le Fleur* Chuck 70 về Việt Nam?</p>
                            </div>
                        </div>

                        <div class="text-img">
                            <div class="img">
                                <img src="src/img/giay_nike1.webp" alt="">
                            </div>

                            <div class="text">
                                <p>Converse sẽ mang Golf le Fleur* Chuck 70 về Việt Nam?</p>
                            </div>
                        </div>

                        <div class="text-img">
                            <div class="img">
                                <img src="src/img/giay_nike1.webp" alt="">
                            </div>

                            <div class="text">
                                <p>Converse sẽ mang Golf le Fleur* Chuck 70 về Việt Nam?</p>
                            </div>
                        </div>

                        <div class="text-img">
                            <div class="img">
                                <img src="src/img/giay_nike1.webp" alt="">
                            </div>

                            <div class="text">
                                <p>Converse sẽ mang Golf le Fleur* Chuck 70 về Việt Nam?</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <!-- ------------ DM RIGHT --------------- -->

            <div class="dm-right">
                <div class="thutu">
                    <select name="select-tt" id="select-tt">
                        <option value="">Giá</option>
                        <option value="">Giá: Thấp đến Cao</option>
                        <option value="">Giá: Cao đến Thấp</option>
                        <option value="">Theo điểm đánh giá</option>
                    </select>
                </div>

                <!-- --------------- Show Sản Phẩm --------- -->

                <div class="sanpham">
                    <!-- ---------- Sản Phẩm 1 ------------ -->
                    <?php foreach($products as $value) : ?>

                    <a href="/sanpham_ct?id=<?= $value->id ?>"><div class="div-sanpham">
                        <div class="img">
                            <img src="src/img/<?= $value->img?>" alt="">
                        </div>
                        <div class="text" style="text-align: center;">
                            <p><?= $value->name ?></p>
                        </div>
                        <div class="price">
                            <p>200,000 <u>đ</u></p>
                        </div>
                        <div class="dg-dc">
                            <div class="dg">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>

                            <div class="dc">
                                <p>Hà Nội</p>
                            </div>
                        </div>
                    </div></a>
                    <?php endforeach ?>

                    <!-- ---------- Sản Phẩm 2 ------------ -->
                    
                </div>

                <div class="trangsp">
                    <div class="trang" style="background-color: #c30005; border: none; color: white;">
                        <p>1</p>
                    </div>
                    <div class="trang">
                        <p>2</p>
                    </div>
                    <div class="trang">
                        <p><i class="fa-sharp fa-solid fa-arrow-right"></i></p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once "../resources/views/footer.php" ?>