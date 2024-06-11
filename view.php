<?php 
include "frontend/header.php";
include "local.php";

if(isset($_GET['art'])){
    $art = $_GET['art'];
    switch($art){
        case 'sp':
            include "frontend/DsSP.php";    
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