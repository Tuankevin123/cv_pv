<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Đăng ký</title>
</head>
<body>

    <div class="container">
    <form class="col-12 mt-5" action="/dangky" method="POST" enctype="multipart/form-data">
        

        <div class="form">
            <div class="h1">
                <h1 class="text-center">Đăng ký</h1>
            </div>

            <div class="div-name row mt-5">
                
                <input class="form-control w-25 mx-auto" type="text" id="user" placeholder="Tên đăng ký" name="name_kh">
            </div>

            <div class="div-name row mt-3">
                
                <input class="form-control w-25 mx-auto" type="text" id="" placeholder="Email" name="email">
            </div>

            <div class="div-name row mt-3">
                
                <input class="form-control w-25 mx-auto" type="text" id="pass" placeholder="Mật khẩu" name="password">
            </div>


            <div class="button row mt-5">
                <button class="w-25 btn btn-success mx-auto" type="submit" id="btn" value="dangky">Đăng ký</button>
            </div>
        </div>
    </form>

    <div class="col-12 mt-3 text-center">
    <a class="text-decoration-none " href="/dangnhap">Đăng nhập</a>
    </div>
    <div class="col-12 mt-3 text-center">
    <a class="text-decoration-none " href="/home"><-- Quay về trang chủ</a>
    </div>

    <!-- <?php if(isset($erro)) : ?> -->
        <span><?php $_SESSION['erro']?></span>
        <!-- <?php endif ?> -->
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>