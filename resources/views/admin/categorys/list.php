<?php include_once "../resources/views/admin/header.php" ?>

<div class="name-btn">
    <p>Danh sách loại hàng</p>
    <a href="/create-category"><button type="button" class="btn btn-success">Thêm mới</button></a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col"><input type="checkbox"></th>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categorys as $ds) : ?>
            <!-- extract($ds);

            $sua_dm = "index.php?ctr=suadm&id=" . $id;
            $xoa_dm = "index.php?ctr=xoadm&id=" . $id; -->

            
                <tr>
                    <td><input type="checkbox"></td>
                    <td style="font-weight: bold"><?= $ds->id ?></th>
                    <td><?= $ds->ten_loai ?></td>
                    <td><a href="/update-category?id=<?= $ds->id ?>"><input type="button" id="s" value="Sửa"></a> <a href="/delete-category?id=<?= $ds->id ?>"><input type="button" id="x" value="Xóa"></a></td>
                </tr>
            

            <?php endforeach ?>
        

        
        <!-- <tr>
            <th scope="row">2</th>
            <td></td>
            <td>Thornton</td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr> -->
    </tbody>
</table>

        <div class="tb">
            <?php if(isset($tb) && ($tb)) echo $tb; ?>
        </div>
</div>
</div>

<?php include_once "../resources/views/admin/footer.php" ?>