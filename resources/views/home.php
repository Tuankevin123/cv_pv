<?php include_once "../resources/views/header.php" ?>
<div class="slideShow">
            <div class="banner" id="banner">
                <img src="src/img/banner2.png" alt="">
            </div>

            <div class="banner" id="banner">
                <img src="src/img/banner1.png" alt="">
            </div>


            <div class="banner" id="banner">
                <img src="src/img/banner3.png" alt="">
            </div>

            <a class="prev" onclick="plusSlides(-1)"> ❮ </a>
            <a class="next" onclick="plusSlides(1)"> ❯ </a>

                            <div class="showDot" style="text-align: center;">
                                <div class="dot" onclick="currentSlide(1)"></div>
                                <div class="dot" onclick="currentSlide(2)"></div>
                                <div class="dot" onclick="currentSlide(3)"></div>
                            </div>
        </div>


        <!-- SẢN Phẩm -->

        <div class="san-phamtd">
            <?php foreach($product_iddm as $value) : ?>
            <div class="sptd-img">
                <label for="img1"><img src="src/img/<?= $value->img ?>" alt=""></label>
                <!-- <input type="checkbox" id="img1"> -->
                <div class="but"><button><a href="/sanpham_ct?id=<?= $value->id ?>">Xem sản phẩm</a></button></div>
            </div>
            <?php endforeach ?>

        </div>

    </header>

    <!----------- Main ----------->

    <main>
        <div class="main">
            <div class="name-san-phamc">
                <a href=""><button class="btn-new">
                    SẢN PHẨM MỚI
                </button></a>
                <a href=""><button class="btn-run">
                    SẢN PHẨM BÁN CHẠY
                </button></a>
                <a href=""><button class="btn-th">
                    SẢN PHẨM PHỔ BIẾN
                </button></a>
            </div>

            <!-- ----------- Sản phẩm chính ----------- -->

            <div class="san-phamc">
                <?php foreach($products as $value) : ?>
                <div class="img-name-price">
                <label for="addsp1">                
                        <div class="img">
                            <a href="/sanpham_ct?id=<?= $value->id ?>"><img src="src/img/<?= $value->img ?>" alt=""></a>
                        </div>
    
                        <div class="name">
                            <p><a href="/sanpham_ct?id=<?= $value->id ?>"><?= $value->name ?></a></p>
                        </div>
                        <div class="price">
                            <p><?= $value->price_b ?><span>,000</span> <u>đ</u></p>
                        </div>             
                
                    
                    <div class="but-add-sp">
                        <a class="text-decoration-none" href="/sanpham_ct?id=<?= $value->id ?>"><button>Xem chi tiết</button></a>
                    </div>
                </label>
                </div>
                <?php endforeach ?>

               
            </div>

            <!----------------- Phụ kiện --------->

            <div class="name-pk">
                <p>PHỤ KIỆN KHÁC</p>
            </div>

            <div class="phu-kien">
                <?php foreach($pk as $value) : ?>
                <div class="img-name-price">
                    <label for="addsp5">
                        <div class="img">
                            <a href="/sanpham_ct?id=<?= $value->id ?>"><img src="src/img/<?= $value->img ?>" alt=""></a>
                        </div>
    
                        <div class="name">
                            <p><?= $value->name ?></p>
                        </div>
                        <div class="price">
                            <p><?= $value->price_b ?><span>,000</span> <u>đ</u></p>
                        </div>
    
                        
                                <div class="but-add-sp">
                                <a class="text-decoration-none" href="/sanpham_ct?id=<?= $value->id ?>"><button>Xem chi tiết</button></a>

                                </div>
                    </label>
                </div>

                <?php endforeach ?>

            </div>

            <div class="xem">
                <button>Xem tất cả</button>
            </div>


            <div class="banner-main">
                <img src="src/img/banner_sale.jpg" alt="">
            </div>



            <!----------------- Giảm Giá -------------->


            <div class="name-pk">
                <p>SẢN PHẨM GIẢM GIÁ</p>
            </div>

            <div class="phu-kien">

                <?php foreach($sale as $value) : ?>
                <div class="img-name-price">
                    <label for="addsp13">

                        <div class="img">
                            <a href="/sanpham_ct?id=<?= $value->id ?>"><img src="src/img/<?= $value->img ?>" alt=""></a>
                            

                            <div class="div-sale">
                                <p>-30%</p>
                            </div>
                        </div>
    
                        <div class="name">
                            <p><?= $value->name ?></p>
                        </div>
                        <div class="price">
                            <p><strike><?= $value->price_b ?><span>,000</span> <u>đ</u></strike> <?= $value->price_b-40 ?><span>,000</span> <u>đ</u></p>
                        </div>
    
                        <input type="checkbox" id="addsp13">
                                        <div class="but-add-sp">
                                        <a class="text-decoration-none" href="/sanpham_ct?id=<?= $value->id ?>"><button>Xem chi tiết</button></a>

                                        </div>
                    </label>
                </div>

                <?php endforeach ?>

                
            </div>
            <div class="xem">
                <button>Xem tất cả</button>
            </div>

        </div>
    </main>

    <?php include_once "../resources/views/footer.php" ?>