<?php include_once 'Views/Layouts/header.php' ?>
<?php
    if (isset($_SESSION['alert']))
        echo $_SESSION['alert'];
    unset($_SESSION['alert']);
    ?>
<div class="container-fluid">
    <h1 class="text-center mt-5">Đang Xem Mặt Hàng <?= $product->ten_hang; ?> </h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="">
   
            <div class="form-group">
                <label>Tên Hàng : </label>
                <tr> <?= $product->ten_hang; ?></tr> <br>
                <label>Loại Hàng : </label>
<?php foreach ($categorys as $key => $category  ): ?>

                <tr> <?= $category->ten; ?></tr><br>
<?php endforeach; ?>
                <label>Giá : </label>
                <tr> <?= $product->gia; ?></tr><br>
                <label>Ngày Tạo : </label>
                <tr> <?= $product->ngay_tao; ?></tr><br>
                <label>Mô Tả : </label>
                <tr> <?= $product->mo_ta; ?></tr><br>
           
            </div>
            <a href="index.php?prod=list" class="btn btn-danger">Quay Lại </a>
        </form>
    </div>
</div>


<?php include_once 'Views/Layouts/footer.php' ?>




