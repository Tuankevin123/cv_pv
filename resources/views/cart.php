<?php include_once "../resources/views/header.php" ?>

<h2 class="text-center">Trang giỏ hàng</h2>
<div class="text-right">
<div class="bang">
<table class="table w-75 mx-auto text-center">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Số lượng</th>
        <th></th> 
    </tr>
    <?php foreach($cart as $value) : ?>
    <tr>
        <td class="pt-5"><?= $value->cart_name ?></td>
        <td><img style="width: 100px; height: 100px" src="/src/img/<?= $value->cart_img ?>" alt=""></td>
        <td class="pt-5"><?= $value->cart_priceB ?></td>
        <td class="pt-5"><?= $value->cart_moTa ?></td>
        <td class="w-25 pt-5"><input class="w-25 text-center" type="number" value="<?= $value->soluong ?>"></td>
        <td class="pt-5"><button class="btn btn-danger w-50 h-50">Xóa</button></td>
    </tr>
    <?php endforeach ?>
</table>
</div>
</div>

<?php include_once "../resources/views/footer.php" ?>
