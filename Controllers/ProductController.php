<?php
include_once './Models/Product.php';
include_once './Models/Category.php';

class ProductController
{
    public function add()
    {

        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_hang    = $_REQUEST['ma_hang'];
            $ten_hang   = $_REQUEST['ten_hang'];
            $category_id  = $_REQUEST['category_id'];
            $gia        = $_REQUEST['gia'];
            $so_luong   = $_REQUEST['so_luong'];
            $ngay_tao   = $_REQUEST['ngay_tao'];
            $mo_ta      = $_REQUEST['mo_ta'];
            $objProduct = new Product();
            
            $objProduct->create($ma_hang, $ten_hang ,$category_id,$gia,$so_luong,$ngay_tao,$mo_ta);
            $_SESSION['alert'] = "Thêm mới thành công";
            header("Location: index.php?prod=list");
        }

        $objCategory = new Category();
        $categorys = $objCategory->getAll();


        include_once 'Views/Products/add.php';
    }
    public function edit()
    {
        $id = $_REQUEST['id'];
        $objProduct = new Product();
        $product = $objProduct->find($id);

//         echo '<pre>';
// print_r ($product);
// die();
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_hang    = $_REQUEST['ma_hang'];
            $ten_hang   = $_REQUEST['ten_hang'];
            $category_id  = $_REQUEST['category_id'];
            $gia        = $_REQUEST['gia'];
            $so_luong   = $_REQUEST['so_luong'];
            $ngay_tao   = $_REQUEST['ngay_tao'];
            $mo_ta      = $_REQUEST['mo_ta'];
            if ($ma_hang        == '') {
                $errors['ma_hang']      = "Vui lòng nhập ma hang";
            }
            if ($ten_hang       == '') {
                $errors['ten_hang']     = "Vui lòng nhập ten hang";
            }
            if ($category_id      == '') {
                $errors['category_id']    = "Vui lòng nhập loai hang";
            }  
            if ($gia            == '') {
                $errors['gia']          = "Vui lòng nhập gia";
            }  
            if ($so_luong       == '') {
                $errors['so_luong']     = "Vui lòng nhập so luong";
            }  
            if ($ngay_tao       == '') {
                $errors['ngay_tao']     = "Vui lòng nhập ngay tao";
            }  
            if ($mo_ta          == '') {
                $errors['mo_ta']        = "Vui lòng nhập mo ta";
            }
            if (count($errors)  == 0) {
                $objProduct = new Product();
                $data = [
                    'ma_hang'   => $ma_hang,
                    'ten_hang'  => $ten_hang,
                    'category_id' => $category_id,
                    'gia'       => $gia,
                    'so_luong'  => $so_luong,
                    'ngay_tao'  => $ngay_tao,
                    'mo_ta'     => $mo_ta,
                ];
                $objProduct->update($id,$ma_hang, $ten_hang ,$category_id,$gia,$so_luong,$ngay_tao,$mo_ta);
                $_SESSION['alert'] = "Cập nhật thành công";
                header("Location: index.php?prod=list");
            }
        }
        $objCategory = new Category();
        $categorys = $objCategory->getAll();
        include_once 'Views/Products/edit.php';
    }
    public function view()
    {  
        $id         = $_REQUEST['id'];
        $objProduct = new Product();
        $product    = $objProduct->find($id);

        include 'Views/Products/view.php';
    }

    public function list()
    {
        $s = (isset($_REQUEST['s']) && !empty($_REQUEST['s'])) ? $_REQUEST['s'] : 0;
        $objProduct = new Product();
        if ($s) {
            $products = $objProduct->getAllSearch($s);
        } else {
            $products = $objProduct->getAll();
        }
        include_once 'Views/Products/list.php';
    }

    public function delete()
    {
        $id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? $_REQUEST['id'] : 0;
        if (!$id) {
            header("Location: index.php?prod=list");
            die();
        }
        $objProduct = new Product();
        $objProduct->delete($id);
        $_SESSION['alert'] = 'Xóa thành công !';

        header("Location: index.php?prod=list");
        die();
    }
}
