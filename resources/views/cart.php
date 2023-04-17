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
    <?php $hh = 0; $hg=0; foreach($cart as $value) : ?>
    <tr>
        <td class="pt-5"><a style="text-decoration: none; color: black;" href="/sanpham_ct?id=<?= $value->cart_idProduct?>"><?= $value->cart_name ?></a></td>
        <td><img style="width: 100px; height: 100px" src="/src/img/<?= $value->cart_img ?>" alt=""></td>
        <td class="pt-5"><?= $value->cart_priceB ?></td>
        <td class="pt-5"><?= $value->cart_moTa ?></td>
        <td class="w-25 pt-5"><input class="w-25 text-center" type="text" value="<?= $value->soluong ?>" disabled></td>
        <td class="pt-5"><a href="/delete-cart?id=<?= $value->cart_id ?>" onclick="return confirm('Bạn muốn xóa chứ')"><button class="btn btn-danger w-50 h-50">Xóa</button></a></td>
    </tr>
    <input type="hidden" value="<?=$hh=($value->cart_priceB*$value->soluong)?>">
    <input type="hidden" value="<?= $hg=$hg+$hh ?>">
    <?php endforeach ?>
    <tr>
        <td colspan="6">Tổng: <span class="text-danger fw-bold"><?=$hg?></span></td>
    </tr>
</table>
</div>
</div>

<?php include_once "../resources/views/footer.php" ?>
