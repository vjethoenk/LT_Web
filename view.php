<?php 
include "frontend/header.php";
include "local.php";

if(isset($_GET['art'])){
    $art = $_GET['art'];
    switch($art){
        case 'sp':
            include "frontend/SanPham/DsSP.php";    
            break;
        case 'ChiTiet':
            include "frontend/SanPham/ChiTietSP.php";    
            break;
        case 'user':
            include "frontend/UserKH/dangnhap.php";    
            break;
        case 'dk':
            include "frontend/UserKH/dangki.php";    
            break;
        default:
            include "frontend/home.php";
            break;
    }
}
else{
    include "frontend/home.php";
}
include "frontend/footer.php";
?>