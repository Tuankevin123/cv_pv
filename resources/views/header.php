<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/gioithieu.css">
    <link rel="stylesheet" href="src/css/phukien.css">
    <link rel="stylesheet" href="src/css/tintuc.css">
    <link rel="stylesheet" href="src/css/lienhe.css">
    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>

    <header>

        <!-------------- Menu top ------->

        <div class="menu-top">
            <div class="top">
            

                

                <?php if (isset($_SESSION['user']))  : ?>
                    
                <?php if (isset($_SESSION['rols']) && $_SESSION['rols'] === 1) : ?>
                    

                    <div class="dangky-dangnhap">
                <span style="color: aqua;">Xin chào <?php echo $_SESSION['name']; ?></span>
                <a href="/logout">Đăng xuất</a>
                <p>
                <a href="/home-admin">Đăng nhập Admin</a>
                
                </p>
                </div>
                
                    
                <?php endif ?>
                <?php if (isset($_SESSION['rols']) && $_SESSION['rols'] === 0) : ?>

                    <div class="dangky-dangnhap">
                <span style="color: aqua;">Xin chào <?php echo $_SESSION['name']; ?></span>
                <a href="/logout">Đăng xuất</a>

                </div>
              
                    
                <?php endif ?>
            <?php endif ?>

            <?php if (!isset($_SESSION['user'])) : ?>

            <div class="dangky-dangnhap">
            <a href="/dangnhap">ĐĂNG NHẬP /</a>  <a href="/dangky"> ĐĂNG KÝ</a>
            </div>
            <?php endif ?>

                <div class="logo">
                    <div class="text-top">
                        <p>DIFF ALLEY</p>
                    </div>

                    <div class="text-bottom">
                        <p>Clothing Store</p>
                    </div>
                </div>

                <div class="search-cart">
                    <span class="search">
                        <label for="ss" class="ss"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></label>
                        <input type="checkbox" id="ss">
                        <br>
                        <!-- <div class="tamgiac">      
                        </div> -->
                        <div class="show" id="show">
                            <input type="text" class="tim-kiem" id="tim-kiem">
                            <button class="btn-timkiem"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </span>

                    <div class="a">
                        <a href="">
                            <span class="cart">GIỎ HÀNG / 0đ <i class="fa-sharp fa-solid fa-cart-shopping"></i></span>
                        </a>
                    </div>



                </div>


            </div>
        </div>

        <!---------------- Menu ---------->

        <div class="menu-n">
            <div class="menu-t">
                <ul>
                    <li><a href="/home">TRANG CHỦ</a></li>
                    <li ><a href="/gioithieu">GIỚI THIỆU</a></li>
                    <li ><a  href="/danhmuc">DANH MỤC</a></li></label>
                    <!-- <input type="checkbox" id="down-dm"> -->
            
                    <li><a href="/phukien">PHỤ KIỆN</a></li>
                    <li ><a href="/tintuc">TIN TỨC</a></li>
                    <li ><a href="/lienhe">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>