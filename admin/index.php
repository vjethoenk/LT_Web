<?php 
include "header.php";
if(isset($_GET['art'])){
    $art = $_GET['art'];
    switch($art){
        case 'adddm':
            include "danhmuc/add.php";    
            break;
         case 'themSP':
            include "sanpham/them.php";    
            break;
        case 'listKH':
            include "khachhang/list.php";    
            break;
        default:
            include "home.php";
            break;
    }
}
else{
    include "home.php";
}
include "footer.php";
?>