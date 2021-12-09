<?php include_once 'Views/Layouts/header.php'; ?>

<div class="container">
<?php
if (isset($_SESSION['alert']))
    echo $_SESSION['alert'];
unset($_SESSION['alert']);
?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center"> Danh Sách Mặt Hàng
        </h3>

        <form class="form-inline" action="index.php?prod=list">
            <input type="hidden" name="prod" value="list">
            <a href="index.php?prod=add" class="btn btn-primary">Thêm Mới </a>
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="s">
            <button class="btn btn-success" type="submit">Search</button>
        </form>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Hàng</th>
                    <th scope="col">Loại Hàng</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($products) > 0) : ?>
                    <?php foreach ($products as $key => $product) : ?>
                        <tr>
                            <th scope="row"><?= $product->id ?></th>
                            <td > <a href="index.php?prod=view&id=<?= $product->id; ?>" ><?= $product->ten_hang; ?> </a></td>
                            <td><?= $product->ten; ?>  </td>
                            <td>
                                <a href="index.php?prod=edit&id=<?= $product->id; ?>" class="btn btn-info">Edit </a>
                                <a href="index.php?prod=delete&id=<?= $product->id; ?>" class="btn btn-danger" onclick="return confirm('Xóa Mặt Hàng <?= $product->ten_hang; ?> Nhé ?')">Delete </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav>
    </div>
</div>
</div>

<?php include 'Views/Layouts/footer.php'; ?>