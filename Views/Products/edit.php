<?php include_once 'Views/Layouts/header.php' ?>
<?php
    if (isset($_SESSION['alert']))
        echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    ?>
<div class="container-fluid">
    <h1 class="text-center mt-5">Chỉnh Sửa Mặt Hàng <?= $product->ten_hang; ?> </h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="">
            <div class="form-group">
                <label>Mã Hàng</label>
                <input type="text" class="form-control" placeholder="Mã" name="ma_hang" value="<?= $product->ma_hang; ?>">
                <small class="form-text text-danger">
                    <?php
                    if (isset($errors['ma_hang'])) {
                        echo $errors['ma_hang'];
                    } ?>
                </small>
            </div>
            <div class="form-group">
                <label>Tên Hàng</label>
                <input type="text" class="form-control" placeholder="Tên" name="ten_hang" value="<?= $product->ten_hang; ?>">
                <small class="form-text text-danger">
                    <?php
                    if (isset($errors['ten_hang'])) {
                        echo $errors['ten_hang'];
                    } ?>
                </small>
            </div>

                  <div class="form-group">

            <label> Loại Hàng</label>

                <select class="form-control" name="category_id">

            <?php foreach ($categorys as $key=> $category ) : ?>
            <?php if ($product->category_id == $category->id): ?>
                <option selected value="<?= $category->id; ?>"><?= $category->ten; ?></option>
            <?php else: ?>
                <option value="<?= $category->id; ?>"><?= $category->ten; ?></option>
            <?php endif; ?>

           
            <?php endforeach; ?>
                </select>

                   
  </div>    


            <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" placeholder="Giá" name="gia" value="<?= $product->gia; ?>">
                <small class="form-text text-danger">
                    <?php
                    if (isset($errors['gia'])) {
                        echo $errors['gia'];
                    } ?>
                </small>
            </div>
            <div class="form-group">
                <label>Số Lượng</label>
                <input type="text" class="form-control" placeholder="Số lượng" name="so_luong" value="<?= $product->so_luong; ?>">
                <small class="form-text text-danger">
                    <?php
                    if (isset($errors['so_luong'])) {
                        echo $errors['so_luong'];
                    } ?>
                </small>
            </div>
            <div class="form-group">
                <label>Ngày Tạo</label>
                <input type="text" class="form-control" placeholder="Ngày" name="ngay_tao" value="<?= $product->ngay_tao; ?>">
                <small class="form-text text-danger">
                    <?php
                    if (isset($errors['ngay_tao'])) {
                        echo $errors['ngay_tao'];
                    } ?>
                </small>
            </div>
            <div class="form-group">
                <label>Mô Tả</label>
                <input type="text" class="form-control" placeholder="Mô Tả" name="mo_ta" value="<?= $product->mo_ta; ?>">
                <small class="form-text text-danger">
                    <?php echo (isset($errors['mo_ta'])) ? $errors['mo_ta'] : ''; ?>
                </small>
            </div>
      
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php?prod=list" class="btn btn-danger">Quay Lại </a>

        </form>
    </div>


</div>


<?php include_once 'Views/Layouts/footer.php' ?>




