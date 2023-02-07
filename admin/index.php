<?php
include "header.php";
include "../modal/pdo.php";
include "../modal/danhmuc.php";
// controller nè


if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra có click vào nút add không
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert($tenloai);
                $thongbao = "Đã thêm thành công";
            }
            include "danhmuc/add.php";

            break;
        case 'listdm':
            $listdm=load_all();
            include "danhmuc/list.php";
            break;

            case 'xoadm':
            if(isset($_GET['id']) &&($_GET['id']>0) ){
            delete_danhmuc($_GET['id']);
            }
            $listdm = load_all();

            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id']) &&($_GET['id']>0) ){
                $dm = load_one($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                
                $thongbao = "Cập nhật thành công";
                }
                // desc là cái nào mới nhập thì hiện lên trên 
                $listdm = load_all();


                include "danhmuc/list.php";
                break;



        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";

}

include "footer.php";

?>