<?php include_once 'Views/Layouts/header.php' ?>
<?php
    if (isset($_SESSION['alert']))
        echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    ?>
<div class="container-fluid">
    <h1 class="text-center mt-5">Thêm </h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="">

                <div class="form-group">
                    <label>Mã Hàng</label>
                    <input type="text" class="form-control" placeholder="Mã" name="ma_hang">
                    <small class="form-text text-danger">
                        <?php
                        if (isset($errors['ma_hang'])) {
                            echo $errors['ma_hang'];
                        }
                        ?>
                    </small>
                </div>
            <div class="form-group">
                    <label> Tên Hàng</label>
                    <input type="text" class="form-control" placeholder="Tên" name="ten_hang">
                    <small class="form-text text-danger">
                        <?php
                        if (isset($errors['ten_hang'])) {
                            echo $errors['ten_hang'];
                        }
                        ?>
                    </small>
                </div>   
                 
                <div class="form-group">
      
                    <label> Loại Hàng</label>

                    <select class="form-control" name="category_id">
                <?php foreach ($categorys as $key=> $category ) : ?>
                    
                <option value="<?= $category->id; ?>"><?= $category->ten; ?></option>
                <?php endforeach; ?>
                    </select>
                
                </div>   
                
                <div class="form-group">
                    <label> Giá</label>
                    <input type="text" class="form-control" placeholder="Giá" name="gia">
                    <small class="form-text text-danger">
                        <?php
                        if (isset($errors['gia'])) {
                            echo $errors['gia'];
                        }
                        ?>
                    </small>
                </div>    <div class="form-group">
                    <label> Số Lượng</label>
                    <input type="text" class="form-control" placeholder="Số Lượng" name="so_luong">
                    <small class="form-text text-danger">
                        <?php
                        if (isset($errors['so_luong'])) {
                            echo $errors['so_luong'];
                        }
                        ?>
                    </small>
                </div>    <div class="form-group">
                    <label> Ngày Tạo</label>
                    <input type="text" class="form-control" placeholder="Ngày" name="ngay_tao">
                    <small class="form-text text-danger">
                        <?php
                        if (isset($errors['ngay_tao'])) {
                            echo $errors['ngay_tao'];
                        }
                        ?>
                    </small>
                </div>
                <div class="form-group">
                    <label> Mô Tả</label>
                    <input type="text" class="form-control" placeholder="Mô Tả" name="mo_ta">
                    <small class="form-text text-danger">
                        <?php
                        if (isset($errors['mo_ta'])) {
                            echo $errors['mo_ta'];
                        }
                        ?>
                    </small>
                </div>  
                <div class="row form-group mt-2 justify-content-end">
                    <div class="col-md-10">
                        <input type="submit" value="Lưu" class="btn btn-primary">
                        <a href="index.php?prod=list" class="btn btn-secondary">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'Views/Layouts/footer.php' ?>
