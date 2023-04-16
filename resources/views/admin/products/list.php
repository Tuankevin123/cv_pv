<?php include_once "../resources/views/admin/header.php" ?>
<div class="name-btn">

<div class="search-list-sp">
<p>Sản phẩm</p>
<form action="/product" method="POST">
  <input type="text" id="kyw" name="kyw">

  <select name="iddm" id="iddm" class="select-dm">
    <option value="0" selected>Tất cả</option>
    
    <?php 
      foreach($category as $list): ?>
        <!-- // extract($list); -->

        <option value="<?= $list->id ?>">
         <?= $list->ten_loai ?>
        </option>

      
   <?php endforeach ?>
  </select>

  <input type="submit" class="listok" name="listok" id="listok" value="Tìm kiếm">
</form>
</div>

<div class="btnsp">

<a href="/create-product"><button type="button" class="add">Thêm mới</button></a>
</div>
</div>

<table class="table">
<thead>
  <tr>
    <th scope="col"><input type="checkbox"></th>
    <th scope="col">Id</th>
    <th scope="col">Tên sản phẩm</th>
    <th scope="col">Ảnh</th>
    <th scope="col">Giá bán</th>
    
    <th scope="col">Iddm</th>
    <th scope="col"></th>
  </tr>
</thead>
<tbody>

  <?php 
    foreach($products as $lit) : ?>
    <!-- //   extract($lit); -->

      <!-- $sua_sp = "index.php?ctr=sua_sp&id=".$lit->id;
      $xoa_sp = "index.php?ctr=xoa_sp&id=".$lit->id;

      $imgpath = "src/img".$img;
      if(is_file($imgpath)){
        $img = "<img src='".$imgpath."' width='100' height='60'>";
      }
      else{
        $img = "Không có ảnh";
      } -->
      
      <tr>
      <td scope="row"><input type="checkbox"></th>
      <td><?= $lit->id ?></td>
      <td><?= $lit->name ?></td>
      <td><img src=" src/img/<?= $lit->img ?>" width="120" alt=""></td>
      <td><?= $lit->price_b ?></td>
      
      <td><?= $lit->iddm ?></td>
      <td><a href="/update-product?id=<?=$lit->id?>"><input type="button" id="s" value="Sửa"></a> <a href="/delete-product?id=<?= $lit->id ?>" onclick="return confirm('Bạn muốn Xóa chứ')"><input id="x" type="button" value="Xóa"></a></td>
    </tr>
    

    <?php endforeach ?>
  
</tbody>
</table>
</div>
</div>
<?php include_once "../resources/views/admin/footer.php" ?>