<?php
include_once './Models/Category.php';

class CategoryController
{
    public function add()
    {

        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten    = $_REQUEST['ten'];
                   $objCategory = new Category();
            
            $objCategory->create($ten);
            $_SESSION['alert'] = "Thêm mới thành công";
            header("Location: index.php?cate=list");
        }
        include_once 'Views/Categorys/add.php';
    }
    public function edit()
    {
        $id = $_REQUEST['id'];
        $objCategory = new Category();
        $product = $objCategory->find($id);

        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten    = $_REQUEST['ten'];
                      if ($ten        == '') {
                $errors['ten']      = "Vui lòng nhập ten";
            }
            
            if (count($errors)  == 0) {
                $objCategory = new Category();
                $data = [
                    'ten'   => $ten,
                                 ];
                $objCategory->update($id,$ten);
                $_SESSION['alert'] = "Cập nhật thành công";
                header("Location: index.php?cate=list");
            }
        }
        include_once 'Views/Categorys/edit.php';
    }
    public function view()
    {  
        $id         = $_REQUEST['id'];
        $objCategory = new Category();
        $category    = $objCategory->find($id);

        include 'Views/Categorys/view.php';
    }

    public function list()
    {
        $s = (isset($_REQUEST['s']) && !empty($_REQUEST['s'])) ? $_REQUEST['s'] : 0;
        $objCategory = new Category();
        if ($s) {
            $categorys = $objCategory->getAllSearch($s);
        } else {
            $categorys = $objCategory->getAll();
        }
        include_once 'Views/Categorys/list.php';
    }

    public function delete()
    {
        $id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? $_REQUEST['id'] : 0;
        if (!$id) {
            header("Location: index.php?cate=list");
            die();
        }
        $objCategory = new Category();
        $objCategory->delete($id);
        $_SESSION['alert'] = 'Xóa thành công !';

        header("Location: index.php?cate=list");
        die();
    }
}
