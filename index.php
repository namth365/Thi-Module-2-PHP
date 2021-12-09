<?php
session_start();
include_once './Controllers/ProductController.php';
include_once './Controllers/CategoryController.php';
?>

<?php

$objProduct = new ProductController();
$prod = (isset($_REQUEST['prod'])) ? $_REQUEST['prod'] : '';
switch ($prod) {
    case "add":
        $objProduct->add();
        break;
    case "edit":
        $objProduct->edit();
        break;
    case "delete":
        $objProduct->delete();
        break;
    case "view":
        $objProduct->view();
        break;
        case "list":
            $objProduct->list();
            break;
    default:
    $objProduct->list();
        break;

    }
        $objCategory = new CategoryController();
        $cate = (isset($_REQUEST['cate'])) ? $_REQUEST['cate'] : '';
        switch ($cate) {
            case "add":
                $objCategory->add();
                break;
            case "edit":
                $objCategory->edit();
                break;
            case "delete":
                $objCategory->delete();
                break;
            case "view":
                $objCategory->view();
                break;
                case "list":
                    $objCategory->list();
                    break;
         
}
