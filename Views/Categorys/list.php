<?php include_once 'Views/Layouts/header.php'; ?>

<div class="container">
<?php
if (isset($_SESSION['alert']))
    echo $_SESSION['alert'];
unset($_SESSION['alert']);
?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center"> Danh Sách Thể Loại
        </h3>

        <form class="form-inline" action="index.php?cate=list">
            <input type="hidden" name="cate" value="list">
            <a href="index.php?cate=add" class="btn btn-primary">Thêm Mới </a>
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
                    <th scope="col">Tên Thể Loại</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($categorys) > 0) : ?>
                    <?php foreach ($categorys as $key => $category) : ?>
                        <tr>
                            <th scope="row"><?= $category->id ?></th>
                            <td > <a href="index.php?prod=view&id=<?= $category->id; ?>" ><?= $category->ten; ?> </a></td>
                                                  <td>
                                <a href="index.php?cate=edit&id=<?= $category->id; ?>" class="btn btn-info">Edit </a>
                                <a href="index.php?cate=delete&id=<?= $category->id; ?>" class="btn btn-danger" onclick="return confirm('Xóa Thể Loại <?= $category->ten; ?> Nhé ?')">Delete </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php include 'Views/Layouts/footer.php'; ?>