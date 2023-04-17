<?php include_once "../resources/views/header.php" ?>
<style>
    main {
        margin-top: 40px;

    }

    .spct {
        width: 100%;
        height: 600px;
        margin-bottom: 100px;
        /* border: 2px solid red; */
    }

    .img_sp {
        float: left;
        width: 40%;
        margin-left: 40px;
        /* border: 2px solid red; */
    }

    .tt_sp {
        float: right;
        width: 55%;
    }

    .img_chinh img {
        width: 420px;
        height: 450px;
    }

    .img_phu {

        margin-top: 20px;
        width: 420px;
        height: 100px;
        /* border: 2px solid red; */
        display: flex;
        grid-gap: 20px;
    }

    .img_phu .img_p {
        width: 90px;
        height: 80px;
        /* border: 1px solid gray; */
    }

    .img_phu .img_p img {
        width: 88px;
        height: 77.7px;
    }

    .name_sp {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .luot_xem {
        color: red;
        margin-bottom: 20px;
    }

    .price_sp {
        color: green;
        margin-bottom: 30px;
    }

    .btn_sp {
        margin-top: 300px;
        width: 100%;
        /* border: 2px solid red; */
        height: 50px;
    }

    .cart_sp img {
        width: 25px;
        height: 30px;

    }

    .them_gh {
        border: 2px solid orangered;
        width: 250px;
        height: 50px;
        border-radius: 3px;

        /* margin-bottom: 20px; */
    }

    .them_gh:hover {
        background-color: rgb(240, 237, 228);
    }

    .btn_add {
        float: left;
        width: 40%;
    }

    .btn_mua {
        float: right;
        width: 60%;
    }

    .cart_sp {

        float: left;
        width: 20%;
        /* border: 2px solid red; */
        text-align: right;
    }

    .cart_text {
        float: right;
        width: 76%;
        text-align: left;
        /* border: 2px solid red; */
        font-size: 18px;
        color: #ec3504;
        margin-top: 5px;
    }

    .add_mua {
        width: 120px;
        height: 50px;
        background-color: orangered;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 3px;
    }

    .add_mua:hover {
        background-color: #ec3504;
    }

    .sp_cungLoai {
        margin-bottom: 50px;
    }


    .show-sp{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 20px;
        text-align: center;

    } 
    
    .show-sp img{
        width: 100%;
        transition: transform 0.5s;
    }

    .show-sp img:hover{
        transform: scale(1.08);
    }

    .show-sp .but-add-sp{
    width: 120px;
    height: 30px;
    margin: 0px auto;
    }

    .show-sp .but-add-sp button{
        background-color: red;
        margin: 0px auto;
        border: none;
        font-size: 14px;
        color: white;
        width: 120px;
        height: 30px;
        font-weight: bold;
        overflow: hidden;
        transition: all 0.5s;
        transform: scale(0);
    }

    .show:hover button{
    transform: scale(100%);

    }

    .show-sp .show .name {
    margin-top: 6px;
    }

    .show-sp .show .name a {
        font-size: 16px;
        text-decoration: none;
        color: black;
        /* font-weight: bold; */
    }



    .show-sp .show .price {
        font-size: 14px;
        color: rgb(220, 11, 11);
        font-weight: bold;
        margin-top: -10px;
    }

    #binhluan input{
        border: 2px solid gray; 
        width:50%; 
        height:40px;
        border-radius: 8px 0px 0px 8px;
        padding-left: 20px;
    }

    #binhluan button{
        border: 1px solid gray; 
        width:10%; 
        height:40px;
        border-radius: 0px 8px 8px 0px;
        font-size: 18px;
        font-weight: bold;
        background-color: green;
        color: white;
    }

    
</style>

<main>
    <div class="main">
        <div class="spct">
            

            <div class="img_sp">
                <div class="img_chinh">
                    <img src="src/img/<?= $product->img ?>" alt="">

                </div>

                <div class="img_phu">
                    
                </div>
            </div>
            


            <div class="tt_sp">
                

                
                    <div class="name_sp">
                    <h1><?= $product->name ?></h1>
                    </div>

                    <div class="luot_xem">
                        <p>1000 view</p>
                    </div>

                    <div class="price_sp">
                    <?= $product->price_b ?>, 000 VND
                    </div>

                    <div class="mo_ta">
                        <p><?= $product->mo_ta ?></p>
                    </div>
                    
                
                

                <div class="btn_sp">
                    <div class="btn_add">
                    <?php if(isset($_SESSION['user'])) : ?>
                        <form action="/cart" method="POST" enctype="multipart/form-data">
                        
                        <input type="hidden" name="cart_idUser" value="<?= $_SESSION['user']->id ?> ?>">
                            
                            <input type="hidden" name="cart_name" value="<?= $product->name ?>">
                            <input type="hidden" name="cart_img" value="<?= $product->img ?>">
                            <input type="hidden" name="cart_priceB" value="<?= $product->price_b ?>">
                            <input type="hidden" name="cart_moTa" value="<?= $product->mo_ta ?>">
                            <input type="hidden" name="cart_idProduct" value="<?= $product->id ?>">



                            <button type="submit" class="them_gh">
                                <div class="cart_sp">
                                    <a href=""><img src="src/img/header-icon-cart.png" alt=""></a>
                                </div>
                                <div class="cart_text">Thêm vào giỏ hàng</div>
                            </button>
                        </form>
                        <?php endif ?>
                        <?php if(!isset($_SESSION['user'])) :?>
                        <button type="submit" class="them_gh">
                                <div class="cart_sp">
                                    <a href=""><img src="src/img/header-icon-cart.png" alt=""></a>
                                </div>
                                <div onclick="alert('Bạn phải đăng nhập')" class="cart_text">Thêm vào giỏ hàng</div>
                            </button>
                        <?php endif ?>

                    </div>

                    <div class="btn_mua">
                        <button class="add_mua">Mua ngay</button>
                    </div>
                </div>
            </div>


        </div>

        <!-- <input type="text" disabled> -->

        <?php if(isset($_SESSION['user'])){ 
            // extract($_SESSION['user']);    
        ?>
        <div class="binhluan" id="binhluan">
            <form action="" method="POST">
                <h4>Bình luận</h4>
                <input type="hidden" name="id_product" value="<?= $product->id ?>">
                <input type="hidden" name="id_users" value="<?= $_SESSION['user']->id ?>">
                <input type="hidden" name="date" value="<?= date('d/m/Y'); ?>">

                <input type="text" name="noidung"><button type="submit">Gửi</button>

                
                
            </form>
        </div>
        <?php } ?>
        <table class="table w-50">
            <?php foreach($binhLuan as $value) : ?>

                    <tr>
                        <td><?= $value->name_kh ?></td>
                        <td><?= $value->noidung ?></td>
                        <td><?= $value->date ?></td>
                    </tr>
            <?php endforeach ?>
                </table>
        <div class="sp_cungLoai" style="margin-top: 50px;">
            <h4>Sản phẩm cùng loại</h4>
            <br>
            <div class="show-sp">
                <?php foreach($product_iddm as $value) :  ?>

                    <?php if($value->iddm == $product->iddm) : ?>

                
                            <div class="show">
                            <div class="img">
                            <a href="/sanpham_ct?id=<?= $value->id ?>"><img src="src/img/<?= $value->img ?>" alt=""></a>
                            </div>
                            <p class="name"><a href="/sanpham_ct?id=<?= $value->id ?>"><?= $value->name ?></a></p>
                            <p class="price"><?= $value->price_b ?>,000 VNĐ</p>
                            <div class="but-add-sp">
                            <a class="text-decoration-none" href="/sanpham_ct?id=<?= $value->id ?>"><button>Xem chi tiết</button></a>

                    </div>
                            </div>
                    <?php endif ?>  
                   <?php endforeach ?>         
                


                
            </div>
        </div>
    </div>

</main>

<?php include_once "../resources/views/footer.php" ?>